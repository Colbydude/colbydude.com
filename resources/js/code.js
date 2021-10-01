import './bootstrap';
import GitHubCalendar from './components/GitHubCalendar.vue';
import Vue from 'vue';

new Vue({
    el: '#github-calendar',
    render: createElement => createElement(GitHubCalendar, {
        props: {
            user: 'Colbydude',
            months: 12
        }
    })
});
