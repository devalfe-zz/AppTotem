<template>
    <card :title="$t('category')">
        <v-List :columns="title"></v-List>
    </card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
    middleware: 'auth',
    created() {
        this.categoryId = this.$route.params.hasid
    },
    data() {
        return {
            categoryId: '',
            category: []
        }
    },
    metaInfo() {
        return { title: this.$t('category') }
    },
    methods: {

    },

    mounted() {
        this.$store.dispatch('category/loadCategories')
    },
    computed: mapGetters({
        title: 'category/categories'
    }),
}
</script>
<style lang="sass">

</style>

