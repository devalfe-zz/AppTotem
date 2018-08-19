<template>
    <div id="inicio" class="d-flex align-content-center">
        <v-Box :lists="categories"></v-Box>
    </div>
</template>

<script>
import { mapState, mapGetters, mapMutations, mapActions } from 'vuex'

export default {

    metaInfo() {
        return { title: this.$t('home') }
    },
    data() {
        return {
            //categories: null,
            //loading: true,
            //errored: false
        }
    },

    methods: {

    },
    mounted() {
        this.$store.dispatch('category/loadCategories')
    },
    computed: mapGetters({
        categories: 'category/categories'
    }),

}
</script>
