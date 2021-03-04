import "./bootstrap";
import GitHubCalendar from './components/GitHubCalendar.vue';
import Vue from 'vue';

Vue.component('github-calendar', GitHubCalendar);

new Vue({
    el: '#app'
});
