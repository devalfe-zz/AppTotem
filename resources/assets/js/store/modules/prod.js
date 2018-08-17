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

    SET_CATEGORIES(state, categories) {
        state.categories = categories
    },
    [types.FETCH_CAT_SUCCESS](state, {
        categories
    }) {
        state.categories = categories
    },

    [types.FETCH_CAT_FAILURE](state) {
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

            commit(types.FETCH_CAT_SUCCESS, {
                categories: data
            })
        } catch (e) {
            commit(types.FETCH_CAT_FAILURE)
        }
    },

}