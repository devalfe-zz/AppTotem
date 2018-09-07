import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import App from '~/components/App'
import * as VueGoogleMaps from 'vue2-google-maps'

import {
    i18n
} from '~/plugins/i18n'

import '~/plugins'
import '~/components'

Vue.config.productionTip = false

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyD5zckljcogOGoZ0dKc0Lkefncg4GFUzyE',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        //// If you want to set the version, you can do so:
        // v: '3.26',
    },

})

new Vue({
    i18n,
    store,
    router,
    //?...App,
    render: h => h(...App)
})