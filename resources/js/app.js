import './axios';
import './modal';

import StyleChooser from './components/StyleChooser.vue';
import Vue from 'vue';

new Vue({
    el: '#style-chooser',
    render: createElement => createElement(StyleChooser)
});
