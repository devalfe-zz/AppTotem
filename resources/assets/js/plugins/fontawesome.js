import Vue from 'vue'
import {
    library
} from '@fortawesome/fontawesome-svg-core'
import {
    FontAwesomeIcon
} from '@fortawesome/vue-fontawesome'
import {
    faUser,
    faLock,
    faSignOutAlt,
    faCog,
    faInfo,
    faSearch,
    faSignInAlt,
    faSort,
    faSpinner,
    faCoffee,
    faArchway
}
from '@fortawesome/free-solid-svg-icons'

import {
    faLaravel
}
from '@fortawesome/free-brands-svg-icons'

library.add(
    faUser, faLock, faSignOutAlt, faCog, faInfo, faSearch, faSignInAlt, faSort, faSpinner, faCoffee, faArchway, faLaravel
)
Vue.component('fa', FontAwesomeIcon)

Vue.config.productionTip = false