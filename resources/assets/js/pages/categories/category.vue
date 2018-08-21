<template>
    <div :title="$t('home')">
        <v-Box :lists="category"></v-Box>
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
            categoryId: '',
        }
    },

    created() {
        this.categoryId = this.$route.params.hashid;
        //?this.addCategory();
    },

    mounted() {
        //?this.$store.dispatch('category/addCategory')
        this.$store.dispatch('category/loadCategory', this.categoryId)
    },

    computed: mapGetters({
        category: 'category/category'
    }),

    //? methods: {
    //?     async addCategory() {
    //?         this.$store.dispatch('category/addCategory', this.categoryId)
    //?     }
    //? },

}
</script>
<style lang="sass">

</style>

