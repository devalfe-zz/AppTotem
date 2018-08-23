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
    faArchway,
    faAward,
    faHotel,
    faImages,
    faMapMarkedAlt,
    faStore,
    faServer,
    faPortrait,
    faPassport,
    faMoon,
    faMap,
    faMedal,
    faBookmark,
    faBuilding,
    faBus,
    faBook,
    faCamera,
    faHome,
    faImage,
    faTags,
    faEdit,
    faTrashAlt,
    faSearchPlus,
    faSpinner
}
from '@fortawesome/free-solid-svg-icons'

import {
    faLaravel
}
from '@fortawesome/free-brands-svg-icons'

library.add(
    faUser, faLock, faSignOutAlt, faCog, faInfo, faSearch, faSignInAlt,
    faArchway, faLaravel, faAward, faHotel, faImages, faMapMarkedAlt, faStore,
    faServer, faPortrait, faPassport, faMoon, faMap, faMedal,
    faBookmark, faBuilding, faBus, faBook, faCamera, faHome, faImage, faTags, faEdit,
    faTrashAlt, faSearchPlus, faSpinner
)
Vue.component('fa', FontAwesomeIcon)

Vue.config.productionTip = false