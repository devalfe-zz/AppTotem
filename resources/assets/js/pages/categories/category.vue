<template>
    <div>
        <v-List :lists="categories"></v-List>
    </div>
</template>
<script>
import { mapState } from 'vuex'

export default {
    middleware: 'auth',

    metaInfo() {
        return { title: this.$t('home') }
    },
    data() {
        return {
            categoriesId: ''
        }
    },

    created() {
        this.categoriesId = this.$route.params.hashid;
    },

    mounted() {
        this.$store.dispatch('categories/loadCategoriesId', this.categoriesId)
    },

    computed: {
        ...mapState({
            categories: state => state.categories.categories,
        }),
        // ...mapGetters({
        //     categories: 'categories/categories',
        // })
    },

}
</script>

<style>
</style>

