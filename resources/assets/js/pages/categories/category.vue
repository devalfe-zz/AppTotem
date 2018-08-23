<template>
    <div>
        <v-List :lists="category"></v-List>
    </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
    middleware: 'auth',
    metaInfo() {
        return { title: this.$t('home') }
    },
    data() {
        return {
            categoryId: ''
        }
    },

    created() {
        this.categoryId = this.$route.params.hashid;
        this.addCategory();
    },

    mounted() {
        //?this.$store.dispatch('category/loadCategory')
        //?this.$store.dispatch('category/loadCategory', this.categoryId)
    },

    computed: {
        ...mapGetters({
            category: 'category/category',
        })
    },
    methods: {
        async addCategory() {
            this.$store.dispatch('category/loadCategory', this.categoryId)
        },
    },
    events: {

    }

}
</script>

<style>
</style>

