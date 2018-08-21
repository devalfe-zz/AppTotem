import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'

// state
export const state = {
    category: [],
    token: Cookies.get('token')
}

// getters
export const getters = {
    category: state => state.category,
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

    async loadCategory({
        commit
    }, payload) {
        try {
            const {
                data
            } = await axios.get('/api/v1/categoria/' + payload)
            commit(types.CATEGORY_SUCCESS, {
                category: data
            })
        } catch (e) {
            commit(types.CATEGORY_FAILURE)
        }
    }
}