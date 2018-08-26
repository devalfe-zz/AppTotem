<template>
    <card :title="$t('your_info')">
        <h3>{{ view.titulo }}</h3>
    </card>
</template>

<script>
import { mapGetters } from 'vuex'
import Form from 'vform'

export default {
    computed: mapGetters({
        view: 'category/category'
    }),
    data() {
        return {
            hashId: '',
        }
    },

    created() {
        this.hashId = this.$route.params.hashid;
    },
    mounted() {
        this.$store.dispatch('category/loadCategoryId', this.hashId)
    },
}
</script>

<style>
h3 {
  color: #ff0022;
}
</style>
