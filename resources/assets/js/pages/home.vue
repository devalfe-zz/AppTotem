<template>
    <div id="inicio" class="d-flex align-content-center">
        <v-Box :catx="categories"></v-Box>
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
        // axios
        //     .get('/api/v1/categoria')
        //     .then(response => {
        //         this.categories = response.data
        //     })
        //     .catch(error => {
        //         console.log(error)
        //         this.errored = true
        //     })
        //     .finally(() => this.loading = false)
        this.$store.dispatch('category/loadCategories')
    },
    computed: mapGetters({
        categories: 'category/categories'
    }),

    //computed: mapState({
    //categories: 'prod/categories'
    //}),
}
</script>
