<template>
    <div>
        <router-link :to="{ name: 'create', params: {hashid: this.hashId }}">
            <VButton type="primary" style="margin-bottom: 15px;">Add new</VButton>
        </router-link>
        <v-List :lists="idcategories"></v-List>
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
            idcategories: state => state.categories.idcategories,
        }),
        // ...mapGetters({
        //     categories: 'categories/categories',
        // })
    },

}
</script>

<style>
</style>

