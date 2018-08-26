<template>
    <div>
        <v-List :lists="categories"></v-List>
    </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
    middleware: 'auth',
    ready() {
        //this.fetchCategories()
    },

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
        this.loadCategory();
    },

    mounted() {
        //?this.$store.dispatch('category/loadCategory')
        //?this.$store.dispatch('category/loadCategoriesId', this.categoriesId)
        this.$store.dispatch('category/loadCategoriesId', this.categoryId)

    },

    computed: {
        ...mapGetters({
            categories: 'categories/categories'
        })
    },
    methods: {
        async loadCategory() {
            this.$store.dispatch('categories/loadCategoriesId', this.categoriesId)
        },
    },
    events: {

    }

}
</script>

<style>
</style>

