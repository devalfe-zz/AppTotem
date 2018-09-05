<template>
    <div id="inicio" class="d-flex align-content-center">
        <v-Box :categories="home"></v-Box>
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
            home: state => state.categories.categories,
        }),
    },

    // computed: mapGetters({
    //     home: 'categories/categories'
    // }),

}
</script>
