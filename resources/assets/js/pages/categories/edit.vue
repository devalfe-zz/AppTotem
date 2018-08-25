<template>
    <card :title="$t('your_info')">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
            <alert-success :form="form" :message="$t('info_updated')"></alert-success>
            <p>{{ edit.titulo }}</p>
            <p>{{form.titulo}}</p>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" value="category.titulo" type="text" name="titulo" id="titulo" placeholder="{category.titulo}" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto">
                    <v-button type="success" :loading="form.busy">{{ $t('update') }}</v-button>
                </div>
            </div>
        </form>
    </card>
</template>
<script>
import Form from 'vform'
import axios from 'axios'

import { mapGetters } from 'vuex'

export default {
    middleware: 'auth',
    ready() {
        //this.$store.dispatch('category/loadCategoryId', this.categoryId)
        //this.category.titulo = this.form.titulo;

        //this.form.titulo = this.category.titulo;
        //this.fetchCategories()
    },
    //?scrollToTop: false,
    metaInfo() {
        return { title: this.$t('settings') }
    },
    //? data: () => ({
    //?     form: new Form({
    //?         titulo: '',
    //?     }),
    //     //?categoryId: ''
    //? }),
    data() {
        return {
            form: new Form({
                titulo: '',
            }),
        }
    },

    computed: mapGetters({
        edit: 'category/category'
    }),

    mounted() {
        //?this.$store.dispatch('category/loadCategoryId', this.categoryId)
        //this.category.titulo = this.form.titulo;

    },
    created() {
        this.categoryId = this.$route.params.hashid;
        //!this.$store.dispatch('category/loadCategorysId', this.categoryId)

        //?Fill the form with data.
        this.form.keys().forEach(key => {
            this.form[key] = this.edit[key]
        })
    },


    methods: {
        async update() {
            const { data } = await this.form.patch('/api/v1/atractivo/' + this.categoryId)
            this.$store.dispatch('category/updateCategory', { edit: data })
        }
    }



}
</script>

