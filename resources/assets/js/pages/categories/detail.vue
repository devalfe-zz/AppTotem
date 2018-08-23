<template>
    <card :title="$t('your_info')">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
            <alert-success :form="form" :message="$t('info_updated')"></alert-success>

            <!-- Name -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.descripcion" type="text" name="descripcion" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.detalle" type="text" name="detalle" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.direccion" type="text" name="direccion" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.ubicacion" type="text" name="ubicacion" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="text"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.longitud" type="text" name="longitud" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="text"></has-error>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.latitud" type="text" name="latitud" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="text"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                <div class="col-md-7">
                    <input v-model="form.horarios" type="text" name="horarios" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="text"></has-error>
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
            descripcion: '',
            detalle: '',
            direccion: '',
            ubicacion: '',
            longitud: '',
            latitud: '',
            horarios: ''
        })
    }),
    created() {
        //?Fill the form with data.
        this.form.keys().forEach(key => {
            this.form[key] = this.category[key]
        })
    },
    methods: {
        async update() {
            const { data } = await this.form.patch('/api/v1/atractivo/' + this.$route.params.hashid)
            this.$store.dispatch('category/updateCategory', { category: data })
        }
    },

    computed: mapGetters({
        category: 'category/category'
    }),

}
</script>
<style lang="sass">

</style>

