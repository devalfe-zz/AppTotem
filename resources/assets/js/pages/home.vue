<template>
    <div id="inicio" class="d-flex align-content-center">
        <v-Box :boxs="categories"></v-Box>
    </div>
</template>

<script>
import { mapGetters, mapState } from 'vuex'

export default {
    middleware: 'auth',

    metaInfo () {
        return { title: this.$t('home') }
    },

    mounted () {
        this.$store.dispatch('categories/loadCategories')
    },

    computed: {
        ...mapState({
            categories: state => state.categories.categories,
        }),
        ...mapGetters({
            authenticated: 'auth/check'
        })
    },

    // computed: mapGetters({
    //     home: 'categories/categories'
    // }),

}
</script>
