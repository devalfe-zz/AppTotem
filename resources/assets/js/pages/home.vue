<template>
    <card :title="$t('home')">
        <h1>Categories</h1>
        <button type="button" class="btn btn-lg btn-primary btn-flat" style="margin-bottom: 15px;">Add new category</button>
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Categories</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Category Name</th>
                                <th>Icon</th>
                            </tr>
                            <tr v-for="(category, index) in categories" :key="index">
                                <td>
                                    {{category.titulo}}
                                </td>
                                <td>{{category.id}}</td>
                                <td class="col-sm-3">
                                    <div class="btn-group">
                                        <button type="button" v-link="{ name: 'postincats', params: {hashid: category.hashid}}" class="btn btn-success">
                                            View posts
                                        </button>
                                        <button type="button" v-link="{ name: 'categories', params: {hashid: category.hashid}}" class="btn btn-warning">
                                            Edit
                                        </button>
                                        <button class="btn btn-danger" @click="deleteCategory(category)">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </card>
</template>

<script>
import { mapState, mapGetters, mapMutations, mapActions } from 'vuex'
import axios from 'axios'

export default {

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
        this.$store.dispatch('prod/loadCategories')
    },
    computed: mapGetters({
        categories: 'prod/categories'
    }),

    //computed: mapState({
    //categories: 'prod/categories'
    //}),
}
</script>
