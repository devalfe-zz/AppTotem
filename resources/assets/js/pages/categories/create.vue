<template>
    <div class="row">
        <div class="col-lg-8 m-auto">
            <card :title="$t('register')">
                <form @submit.prevent="create" @keydown="form.onKeydown($event)">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right">{{ $t('categoria_id') }}</label>
                        <div class="col-md-8">
                            <input v-model="form.categoria_id" type="text" name="categoria_id" class="form-control" :class="{ 'is-invalid': form.errors.has('categoria_id') }">
                            <has-error :form="form" field="categoria_id"></has-error>
                        </div>
                    </div>
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
                            <v-button type="success" :loading="form.busy">{{ $t('register') }}</v-button>
                        </div>
                    </div>
                </form>
            </card>
        </div>
    </div>
</template>
<script>
import Form from 'vform'
export default {

    metaInfo () {
        return { title: this.$t('register') }
    },

    data: () => ({
        form: new Form({
            categoria_id: '',
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
    }),

    methods: {
        async create () {
            try {
                const { data } = await this.form.post('/api/v1/atractivo');
                console.log(data);
                await this.$store.dispatch('category/updateCategory', { element: data })
                this.$router.push({ name: 'home' })

            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>
