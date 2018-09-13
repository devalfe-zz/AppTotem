<template>
    <card :title="$t('your_info')">

        <form @submit.prevent="create" @keydown="form.onKeydown($event)">

            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">{{ $t('atractivo_id') }}</label>
                <div class="col-md-8">
                    <input v-model="form.atractivo_id" type="text" name="atractivo_id" class="form-control" :class="{ 'is-invalid': form.errors.has('atractivo_id')}" disabled="disabled">
                    <has-error :form="form" field="atractivo_id"></has-error>
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
                <label class="col-sm-2 col-form-label">{{ $t('foto_url') }}</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="foto_url" v-model="form.foto_url" placeholder="ex: /uploads/default_avatar.png" :class="{ 'is-invalid': form.errors.has('foto_url') }">
                    <has-error :form="form" field="foto_url"></has-error>

                    <vue-dropzone id="drop1" :options="dropOptions" ref="dropzone" :useCustomSlot=true @vdropzone-complete="afterComplete">
                        <div class="dropzone-custom-content">
                            <h3 class="dropzone-custom-title">Arrastrar y soltar para cargar contenido!</h3>
                            <div class="subtitle">...o haz clic para seleccionar un archivo de tu computadora</div>
                        </div>
                    </vue-dropzone>
                </div>
                <div class="col-sm-5">
                    <div class="col-md-5">
                        <img class="img-fluid" :src="element.foto_url | baseurl">
                    </div>

                </div>
            </div>
            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-md-10 ml-md-auto">
                    <v-button type="success" :loading="form.busy">{{ $t('register') }}</v-button>
                </div>
            </div>
        </form>
        <table class="table table-hover">
            <thead>
                <th>Id</th>
                <th>Titulo</th>
                <th>Foto</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <tr v-for="(foto, index) in element.fotos" :key="index">
                    <td class="col-md-1">{{ foto.id }}</td>
                    <td class="col-md-2">{{ foto.titulo }}</td>
                    <td class="col-md-2">
                        <div class="box-body">
                            <img class="img-fluid" :src="'https://guiaturistica.moqueguaturismo.gob.pe/public/' + foto.foto_url" alt="{{foto.titulo}}">
                        </div>
                    </td>
                    <td class="col-md-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger" v-on:click="deleteElement(foto)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </card>
</template>
<script>

import Form from 'vform'
import vueDropzone from "vue2-dropzone"
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
import swal from 'sweetalert2'
import axios from 'axios'

import { mapGetters, mapState } from 'vuex'

export default {

    data: () => ({
        form: new Form({
            titulo: '',
            foto_url: '',
            activo: 1,
            atractivo_id: ''
        }),
        hashId: '',
        dropOptions: {
            url: "/api/v1/file",
            maxFilesize: 0.5, // MB
            maxFiles: 1,
            thumbnailWidth: 250, // px
            thumbnailHeight: 250,
            addRemoveLinks: true,
            paramName: "file", // The name that will be used to transfer the file
            acceptedFiles: "image/*,image/png,image/gif",
        },


    }),
    computed: {
        ...mapGetters({
            element: 'category/element',
        }),
    },
    created () {
        this.hashId = this.$route.params.hashid
        this.form.atractivo_id = this.$route.params.hashid
        this.form.titulo = this.element[0]

    },

    mounted () {
        //?this.$store.dispatch('category/loadCategoryId', this.hashId)
    },

    methods: {
        async create () {
            try {
                const { data } = await this.form.post('/api/v1/galeria')
                this.$router.push({ name: 'categories.foto', params: { hashid: this.hashId } })
            } catch (error) {
                console.error(error);
            }
        },
        afterComplete (file) {
            console.log(file);
            this.form.foto_url = 'images/' + file.name
        },
        deleteElement (foto) {

            //?let self = this
            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover this post!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it',
            }).then(function () {
                const { response } = axios.delete('/api/v1/galeria' + foto.id, foto)
                    .then(function (response) {
                        swal(
                            'Deleted!',
                            'Your post has been deleted.',
                            'success'
                        );
                        location.reload();
                    }, function (response) {
                        //? show_stack_error('Deletion of post went wrong.', response)
                    })
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay', 'close', 'timer'
                if (dismiss === 'cancel') {
                    swal(
                        'Cancelled',
                        'Your post is safe :)',
                        'error'
                    );
                }
            });
        },
    },
    components: {
        vueDropzone
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

