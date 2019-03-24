import Vue from 'vue'
import Vuex from 'vuex'
import shortLink from "./stores/shortLink";

Vue.use(Vuex);

const isDebug = process.env.NODE_ENV !== 'production';

const store = new Vuex.Store({
    modules: {
        shortLink: shortLink
    },
    strict: isDebug
});

export default store