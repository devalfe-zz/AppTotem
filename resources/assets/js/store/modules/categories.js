import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'

// state
export const state = {
    categories: [],
    token: Cookies.get('token')
}

// getters
export const getters = {
    categories: state => state.categories,
    token: state => state.token,
    //check: state => state.user !== null
}

// mutations
export const mutations = {
    [types.SAVE_TOKEN](state, {
        token,
        remember
    }) {
        state.token = token
        Cookies.set('token', token, {
            expires: remember ? 365 : null
        })
    },

    [types.CAT_SUCCESS](state, {
        categories
    }) {
        state.categories = categories
    },

    [types.CAT_FAILURE](state) {
        state.token = null
        Cookies.remove('token')
    },
    [types.CATEGORY_SUCCESS](state, {
        category
    }) {
        state.category = category
    },
    [types.CATEGORY_FAILURE](state) {
        state.token = null
        Cookies.remove('token')
    },

}

// actions
export const actions = {
    async loadCategories({
        commit
    }) {
        try {
            const {
                data
            } = await axios.get('/api/v1/categoria')
            commit(types.CAT_SUCCESS, {
                categories: data
            })
        } catch (e) {
            commit(types.CAT_FAILURE)
        }
    },
    async loadCategoriesId({
        commit
    }, payload) {
        try {
            const {
                data
            } = await axios.get('/api/v1/categoria/' + payload)
            commit(types.CAT_SUCCESS, {
                categories: data
            })
        } catch (e) {
            commit(types.CAT_FAILURE)
        }
    },
}