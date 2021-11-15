import GitHubCalendar from './components/GitHubCalendar.vue';
import { createApp } from 'vue';

createApp(GitHubCalendar, {
    months: 12
}).mount('#github-calendar');
