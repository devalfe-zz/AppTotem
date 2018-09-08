import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'


// state
export const state = {
    element: [],
    token: Cookies.get('token'),

}

// getters
export const getters = {
    element: state => state.element,
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

    [types.CATEGORY_ID_SUCCESS](state, {
        element
    }) {
        state.element = element
    },
    [types.CATEGORY_ID_FAILURE](state) {
        state.token = null
        Cookies.remove('token')
    },

    [types.UPDATE_ID_CATEGORY](state, {
        element
    }) {
        state.element = element
    },
    [types.DELETE_CATEGORY](state, element) {
        state.element = element
    }


}

// actions
export const actions = {

    async loadCategoryId({
        commit
    }, payload) {
        try {
            const {
                data
            } = await axios.get('/api/v1/atractivo/' + payload)
            commit(types.CATEGORY_ID_SUCCESS, {
                element: data
            })
        } catch (e) {
            commit(types.CATEGORY_ID_FAILURE)
        }
    },

    updateCategory({
        commit
    }, payload) {
        commit(types.UPDATE_ID_CATEGORY, payload)
    },

    async deleteCategory({
        commit
    }, payload) {
        //*axios.delete('/api/v1/atractivo/' + payload)
        try {
            axios.delete('/api/v1/atractivo/' + payload)
            const {
                data
            } = await axios.get('/api/v1/atractivo/' + payload)
            commit(types.CATEGORY_ID_SUCCESS, {
                element: data
            })
        } catch (e) {
            commit(types.CATEGORY_ID_FAILURE)
        }
        //?commit(types.DELETE_CATEGORY, payload)
    },


}