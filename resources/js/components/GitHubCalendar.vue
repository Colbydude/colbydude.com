<template>
    <div ref="container">
        <svg
            class="w-full"
            :height="8 * squareSize"
            :viewBox="`-1 -1 ${width + 1} ${8 * squareSize + 1}`"
        >
            <g v-for="(week, i) in values" :key="i">
                <rect
                    class="stroke-1 stroke-white dark:stroke-slate-900 transition duration-500 hover:duration-[0ms] ease-in-out hover:stroke-pink-500 dark:hover:stroke-pink-400"
                    :class="rangeColors[contribCount(day.contributionCount)]"
                    style="shape-rendering: geometricPrecision"
                    v-for="(day, j) in week.contributionDays"
                    :key="j"
                    :width="squareSize"
                    :height="squareSize"
                    :x="i * (squareSize + 1)"
                    :y="j * (squareSize + 1)"
                    rx="2"
                    ry="2"
                />
            </g>
        </svg>
    </div>
</template>

<script>
const DEFAULT_RANGE_COLOR = [
    'fill-slate-200 dark:fill-slate-800',
    'fill-green-200 dark:fill-green-900',
    'fill-green-400 dark:fill-green-700',
    'fill-green-600 dark:fill-green-500',
    'fill-green-800 dark:fill-green-300',
];

export default {
    name: 'GitHubCalendar',

    props: {
        months: {
            type: Number,
            default: 12,
        },
        rangeColors: {
            type: Array,
            default: () => DEFAULT_RANGE_COLOR,
        },
    },

    data() {
        return {
            values: [],
            squareSize: 0,
            width: 0,
        };
    },

    computed: {
        /**
         * Calculate the highest contribution count number, so we can
         * adjust the color based off of a relative percentage.
         *
         * @return {number}
         */
        highestContributionCount() {
            if (this.values.length == 0) {
                return 0;
            }

            let highestValue = 0;

            this.values.forEach((week) => {
                week.contributionDays.forEach((day) => {
                    if (day.contributionCount > highestValue) {
                        highestValue = day.contributionCount;
                    }
                });
            });

            return highestValue;
        },
    },

    mounted() {
        this.fetchContribData();
    },

    created() {
        this.resizeListener = window.addEventListener('resize', (e) => {
            this.setSquareSize();
        });
    },

    destroyed() {
        window.removeEventListener('resize', this.resizeListener);
    },

    methods: {
        /**
         * Determine color to use when filling in a contribution square.
         *
         * @param  {number}  count
         * @return {number}
         */
        contribCount(count) {
            if (count === 0) {
                return 0;
            }

            const percentage = Math.round((count / this.highestContributionCount) * 100);

            // @TODO: Use better maths for this probably. Hopefully these weights are consistent.
            if (percentage < 19) {
                return 1;
            } else if (percentage < 35) {
                return 2;
            } else if (percentage < 50) {
                return 3;
            } else {
                return 4;
            }
        },

        /**
         * Fetch contribution data form the GitHub API.
         */
        fetchContribData() {
            window.axios
                .get(`/api/github-contributions`)
                .then((res) => {
                    this.values =
                        res.data.data.user.contributionsCollection.contributionCalendar.weeks.slice(
                            53 - this.months * 4
                        );
                    this.setSquareSize();
                })
                .catch(() => console.log);
        },

        /**
         * Determine the size of each contribution square by the width of the container.
         */
        setSquareSize() {
            this.width = this.$refs.container.offsetWidth;
            this.squareSize = this.width / this.values.length - 1;
        },
    },
};
</script>
