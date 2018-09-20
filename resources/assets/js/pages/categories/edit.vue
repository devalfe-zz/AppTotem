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
                <div class="col-md-5">
                    <GmapAutocomplete class="form-control" @place_changed="setPlace">
                    </GmapAutocomplete>
                </div>
                <GmapMap style="width: 600px; height: 300px;" :zoom="17" :center="{lat: form.latitud, lng: form.longitud}">
                    <GmapMarker v-for="(marker, index) in markers" :key="index" :position="marker.position" />
                    <GmapMarker v-if="this.place" label="★" :position="{
                            lat: this.place.geometry.location.lat(),
                            lng: this.place.geometry.location.lng(),
                            }" />
                </GmapMap>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('horarios') }}</label>
                <div class="col-md-8">
                    <input v-model="form.horarios" type="text" name="horarios" class="form-control" :class="{ 'is-invalid': form.errors.has('horarios') }">
                    <has-error :form="form" field="horarios"></has-error>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{ $t('foto_url') }}</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="foto_url" v-model="form.foto_url" placeholder="ex: /uploads/default_avatar.png">
                    <vue-dropzone id="drop1" :options="dropOptions" ref="dropzone" :useCustomSlot=true @vdropzone-complete="afterComplete">
                        <div class="dropzone-custom-content">
                            <h3 class="dropzone-custom-title">Arrastrar y soltar para cargar contenido!</h3>
                            <div class="subtitle">...o haz clic para seleccionar un archivo de tu computadora</div>
                        </div>
                    </vue-dropzone>
                </div>
                <div class="col-sm-5">
                    <div class="col-md-5">
                        <img class="img-fluid" :src=" url + element.foto_url">
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('video_url') }}</label>
                <div class="col-md-8">
                    <input v-model="form.video_url" type="text" name="video_url" class="form-control" :class="{ 'is-invalid': form.errors.has('video_url') }">
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
                    <v-button type="success" :loading="form.busy">{{ $t('update') }}</v-button>
                </div>
            </div>
        </form>
    </card>
</template>
<script>
import Form from 'vform'
import { mapGetters, mapState } from 'vuex'

import vueDropzone from "vue2-dropzone"
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

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
            video_url: ''
        }),
        hashId: '',
        url: null,
        dropOptions: {
            url: "/api/v1/file",
            maxFilesize: 5, // MB
            maxFiles: 1,
            thumbnailWidth: 250, // px
            thumbnailHeight: 250,
            addRemoveLinks: true,
            paramName: "file", // The name that will be used to transfer the file
            acceptedFiles: "image/*",

        },
        dropVideoOptions: {
            url: "/api/v1/file",
            maxFilesize: 10, // MB
            maxFiles: 1,
            thumbnailWidth: 250, // px
            thumbnailHeight: 200,
            addRemoveLinks: true,
            paramName: "file", // The name that will be used to transfer the file
            acceptedFiles: "video/mp4,video/avi,video/mpeg",

        },
        place: null,
        markers: []
    }),
    components: {
        vueDropzone
    },

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
        },
        afterComplete (file) {
            console.log(file);
            this.form.foto_url = 'images/' + file.name
        },
        afterVideoComplete (file) {
            console.log(file);
            this.form.video_url = 'video/' + file.name
        },
        setPlace (place) {
            this.place = place
            this.form.latitud = this.place.geometry.location.lat()
            this.form.longitud = this.place.geometry.location.lng()
            this.form.direccion = this.place.name
        },
        usePlace (place) {
            let self = this
            if (this.place) {
                this.markers.push({
                    position: {
                        lat: this.place.geometry.location.lat(),
                        lng: this.place.geometry.location.lng(),
                    }
                })
                this.place = null;
            }
        }
    },
    mounted () {
        this.url = process.env.MIX_APP_URL;
    },
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
