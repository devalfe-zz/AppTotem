<template>
    <card :title="$t('your_info')">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
            <alert-success :form="form" :message="$t('info_updated')"></alert-success>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('titulo') }}</label>
                <div class="col-md-8">
                    <input v-model="form.titulo" type="text" name="titulo" class="form-control" :class="{ 'is-invalid': form.errors.has('titulo') }">
                    <has-error :form="form" field="titulo"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('descripcion') }}</label>
                <div class="col-md-8">
                    <input v-model="form.descripcion" type="text" name="descripcion" class="form-control" :class="{ 'is-invalid': form.errors.has('descripcion') }">
                    <has-error :form="form" field="descripcion"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('detalle') }}</label>
                <div class="col-md-8">
                    <input v-model="form.detalle" type="text" name="detalle" class="form-control" :class="{ 'is-invalid': form.errors.has('detalle') }">
                    <has-error :form="form" field="detalle"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('direccion') }}</label>
                <div class="col-md-3">
                    <input v-model="form.direccion" type="text" name="direccion" class="form-control" :class="{ 'is-invalid': form.errors.has('direccion') }">
                    <has-error :form="form" field="direccion"></has-error>
                </div>
                <label class="col-md-2 col-form-label text-md-right">{{ $t('ubicacion') }}</label>
                <div class="col-md-3">
                    <input v-model="form.ubicacion" type="text" name="ubicacion" class="form-control" :class="{ 'is-invalid': form.errors.has('ubicacion') }">
                    <has-error :form="form" field="ubicacion"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('longitud') }}</label>
                <div class="col-md-3">
                    <input v-model="form.longitud" type="text" name="longitud" class="form-control" :class="{ 'is-invalid': form.errors.has('longitud') }">
                    <has-error :form="form" field="longitud"></has-error>
                </div>
                <label class="col-md-2 col-form-label text-md-right">{{ $t('latitud') }}</label>
                <div class="col-md-3">
                    <input v-model="form.latitud" type="text" name="latitud" class="form-control" :class="{ 'is-invalid': form.errors.has('latitud') }">
                    <has-error :form="form" field="latitud"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('horarios') }}</label>
                <div class="col-md-8">
                    <input v-model="form.horarios" type="text" name="horarios" class="form-control" :class="{ 'is-invalid': form.errors.has('horarios') }">
                    <has-error :form="form" field="horarios"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('foto_url') }}</label>
                <div class="col-md-8">
                    <input v-model="form.foto_url" type="text" name="foto_url" class="form-control" :class="{ 'is-invalid': form.errors.has('foto_url') }">
                    <has-error :form="form" field="foto_url"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('video_url') }}</label>
                <div class="col-md-8">
                    <input v-model="form.video_url" type="text" name="video_url" class="form-control" :class="{ 'is-invalid': form.errors.has('video_url') }">
                    <has-error :form="form" field="video_url"></has-error>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-md-10 ml-md-auto">
                    <v-button type="success" :loading="form.busy">{{ $t('update') }}</v-button>
                </div>
            </div>
        </form>
    </card>
</template>
<script>
import Form from 'vform'
import { mapGetters, mapState } from 'vuex'

export default {
    middleware: 'auth',
    scrollToTop: false,
    metaInfo () {
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
            horarios: '',
            foto_url: '',
            video_url: '',

        }),
        hashId: '',

    }),

    computed: {
        ...mapGetters({
            //?...mapState({
            //? element: state => state.category.category,
            element: 'category/element'
        }),
    },
    created () {
        this.hashId = this.$route.params.hashid;
        this.form.keys().forEach(key => {
            this.form[key] = this.element[key]
        })
    },

    methods: {
        // async update () {
        //     try {
        //         const data = await this.form.patch('/api/v1/atractivo/' + this.hashId);
        //         console.log(data);
        //         this.$store.dispatch('category/updateCategory', { element: data })
        //     } catch (error) {
        //         console.error(error);
        //     }
        // }
        async update () {
            const { data } = await this.form.patch('/api/v1/atractivo/' + this.hashId)

            this.$store.dispatch('category/updateCategory', { element: data })
        }
    },
}
</script>

