import "./bootstrap";
import GitHubCalendar from './components/github-calendar';
import Vue from 'vue';

Vue.component('github-calendar', GitHubCalendar);

new Vue({
    el: '#app'
});
