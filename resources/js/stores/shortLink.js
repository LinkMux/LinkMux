import axios from "axios";

const state = {
    list: [],
};

const actions = {
    getList: (context) => {
        axios.get('/api/shortlink')
            .then(response => {
                context.commit('getList', response.data.data);
            })
            .catch(error => {
                console.log(error.response);
            });
    }
};
const mutations = {
    getList: (state, payload) => {
        state.list = payload;
    }
};

const getters = {};

export default {
    namespaced: true,
    state,
    actions,
    getters,
    mutations
};