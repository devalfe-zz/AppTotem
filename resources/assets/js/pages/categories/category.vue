<template>
    <div>
        <button type="button" class="btn btn-lg btn-primary btn-flat" style="margin-bottom: 15px;">Add new</button>
        <v-List :lists="category"></v-List>
    </div>
</template>
<script>
import { mapState } from 'vuex'

export default {
    middleware: 'auth',

    metaInfo () {
        return { title: this.$t('home') }
    },
    data () {
        return {
            hashId: ''
        }
    },

    created () {
        this.hashId = this.$route.params.hashid;
    },

    mounted () {
        this.$store.dispatch('categories/loadCategoriesId', this.hashId)
    },

    computed: {
        ...mapState({
            category: state => state.categories.idcategories,
        }),
        // ...mapGetters({
        //     categories: 'categories/categories',
        // })
    },

}
</script>

<style>
</style>

