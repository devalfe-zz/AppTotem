<template>
    <div class="row">
        <div class="col-lg-8 m-auto">
            <card :title="$t('register')">
                <form @submit.prevent="create" @keydown="form.onKeydown($event)">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right">{{ $t('categoria_id') }}</label>
                        <div class="col-md-8">
                            <input v-model="form.categoria_id" type="text" name="categoria_id" class="form-control" :class="{ 'is-invalid': form.errors.has('categoria_id') }" disabled="disabled">
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
                            <input v-model="form.foto_url" type="text" name="foto_url" class="form-control" :class="{ 'is-invalid': form.errors.has('foto_url') }" disabled="disabled">
                            <has-error :form="form" field="foto_url"></has-error>
                            <vue-dropzone id="drop1" :options="dropOptions" ref="dropzone" :useCustomSlot=true @vdropzone-complete="afterComplete">
                                <div class="dropzone-custom-content">
                                    <h3 class="dropzone-custom-title">Arrastrar y soltar para cargar contenido!</h3>
                                    <div class="subtitle">...o haz clic para seleccionar un archivo de tu computadora</div>
                                </div>
                            </vue-dropzone>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right">{{ $t('video_url') }}</label>
                        <div class="col-md-8">
                            <input v-model="form.video_url" type="text" name="video_url" class="form-control" :class="{ 'is-invalid': form.errors.has('video_url') }" disabled="disabled">
                            <has-error :form="form" field="video_url"></has-error>
                            <vue-dropzone id="drop2" :options="dropVideoOptions" ref="dropzone2" :useCustomSlot=true @vdropzone-complete="afterVideoComplete">
                                <div class="dropzone-custom-content">
                                    <h3 class="dropzone-custom-title">Arrastrar y soltar para cargar contenido!</h3>
                                    <div class="subtitle">...o haz clic para seleccionar un archivo de tu computadora</div>
                                </div>
                            </vue-dropzone>
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
import vueDropzone from "vue2-dropzone"
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
export default {

    metaInfo () {
        return { title: this.$t('register') }
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
            activo: 1,
            categoria_id: ''
        }),
        hashId: '',
        dropOptions: {
            url: "/api/v1/file",
            maxFilesize: 0.5, // MB
            maxFiles: 1,
            thumbnailWidth: 250, // px
            thumbnailHeight: 200,
            resizeWidth: 500,

            addRemoveLinks: true,
            paramName: "file", // The name that will be used to transfer the file
            acceptedFiles: "image/*,image/png,image/gif",

        },
        dropVideoOptions: {
            url: "https://guiaturistica.moqueguaturismo.gob.pe/api/v1/file",
            maxFilesize: 5, // MB
            maxFiles: 1,
            thumbnailWidth: 250, // px
            thumbnailHeight: 200,
            addRemoveLinks: true,
            paramName: "file", // The name that will be used to transfer the file
            acceptedFiles: "video/mp4,video/avi,video/mpeg",

        }

    }),
    components: {
        vueDropzone
    },
    created () {
        this.hashId = this.$route.params.hashid
        this.form.categoria_id = this.$route.params.hashid
    },
    methods: {
        async create () {
            try {
                const { data } = await this.form.post('/api/v1/atractivo');
                //*console.log(data);
                //?await this.$store.dispatch('category/updateCategory', { element: data })
                this.$router.push({ name: 'categories.category', params: { hashid: this.hashId } })

            } catch (error) {
                console.error(error);
            }
        },

        afterComplete (file) {
            console.log(file);
            this.form.foto_url = 'images/' + file.name
        },
        afterVideoComplete (file) {
            this.form.video_url = 'video/' + file.name
        }
    }
}
</script>
<style>
#drop1 {
  height: 250px;
  padding: 15px;
  color: white;
}

#drop1 .dz-preview {
  width: 200px;
}
#drop2 {
  height: 250px;
  padding: 15px;
  color: white;
}

#drop2 .dz-preview {
  width: 200px;
}
.dropzone-custom-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.dropzone-custom-title {
  margin-top: 0;
  color: #00b782;
}

.subtitle {
  color: #314b5f;
}
</style>
