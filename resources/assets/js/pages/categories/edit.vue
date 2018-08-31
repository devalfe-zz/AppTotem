<template>
    <card :title="$t('your_info')">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
            <alert-success :form="form" :message="$t('info_updated')"></alert-success>
            <p>{{form.titulo}}</p>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('titulo') }">
                    <has-error :form="form" field="titulo"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('titulo') }">
                    <has-error :form="form" field="titulo"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('titulo') }">
                    <has-error :form="form" field="titulo"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('titulo') }">
                    <has-error :form="form" field="titulo"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('titulo') }">
                    <has-error :form="form" field="titulo"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('titulo') }">
                    <has-error :form="form" field="titulo"></has-error>
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
import { mapGetters } from 'vuex'

export default {
    middleware: 'auth',
    scrollToTop: false,
    metaInfo() {
        return { title: this.$t('settings') }
    },
    data: () => ({
        form: new Form({
            titulo: '',
        }),
    }),
    computed: mapGetters({
        category: 'category/category'
    }),
    created() {
        this.categoryId = this.$route.params.hashid;
        this.form.keys().forEach(key => {
            this.form[key] = this.category[key]
        })
    },

    methods: {
        async update() {
            const { data } = await this.form.patch('/api/v1/atractivo/' + this.categoryId)
            this.$store.dispatch('category/updateCategory', { category: data })
        }
    }

}
</script>

