<template>
    <div class="row">
        <div class="col-md-3">
            <card :title="$t('settings')" class="settings-card">
                <ul class="nav flex-column nav-pills">
                    <li v-for="(tab, t) in tabs" :key="t" class="nav-item">
                        <router-link :to="{ name: tab.route }" class="nav-link" active-class="active">
                            <fa :icon="tab.icon" fixed-width/> {{ tab.name }}
                        </router-link>
                    </li>
                </ul>
            </card>
        </div>
        <div class="col-md-9">
            <transition name="fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapState } from 'vuex'

export default {
    middleware: 'auth',

    computed: {
        tabs () {
            return [
                {
                    icon: 'user',
                    name: this.$t('view'),
                    route: 'categories.view'
                },
                {
                    icon: 'lock',
                    name: this.$t('edit'),
                    route: 'categories.edit'
                },
                {
                    icon: 'lock',
                    name: this.$t('fotos'),
                    route: 'categories.foto'
                },
            ]
        },

    },


}
</script>

<style>
.settings-card .card-body {
  padding: 0;
}
</style>
