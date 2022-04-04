<template>
    <div id="github-stats">
        <svg class="cal-wrapper" :height="8 * squareSize">
            <g class="cal-week" v-for="(week, i) in values" :key="i">
                <rect
                    class="cal-day"
                    v-for="(day, j) in week.contributionDays"
                    :key="j"
                    :style="{
                        fill: rangeColors[contribCount(day.contributionCount)],
                    }"
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
    'var(--color-calendar-graph-day-bg)',
    'var(--color-calendar-graph-day-L1-bg)',
    'var(--color-calendar-graph-day-L2-bg)',
    'var(--color-calendar-graph-day-L3-bg)',
    'var(--color-calendar-graph-day-L4-bg)',
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
        };
    },

    computed: {
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

    methods: {
        /**
         * Determine color to use when filling in a contribution square.
         *
         * @param  {Number}  count
         * @return {Number}
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
         *
         * @return {Void}
         */
        fetchContribData() {
            window.axios
                .get(`/api/github-contributions`)
                .then((res) => {
                    this.values =
                        res.data.data.user.contributionsCollection.contributionCalendar.weeks.slice(
                            53 - this.months * 4
                        );
                    this.squareSize =
                        document.getElementById('github-stats').offsetWidth / this.values.length -
                        1;
                })
                .catch(() => console.log);
        },
    },
};
</script>

<style scoped>
.cal-wrapper {
    width: 100%;
}

.cal-wrapper .cal-day {
    stroke: var(--color-bg-primary);
    stroke-width: 1;
    shape-rendering: geometricPrecision;
}

.cal-wrapper .cal-day:hover {
    stroke: var(--color-app-primary);
}
</style>
