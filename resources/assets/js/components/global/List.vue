<template>
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Foto</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <tr v-for="(item, index) in lists" :key="index">
                <td class="col-md-1">{{ item.id }}</td>
                <td class="col-md-2">{{ item.titulo }}</td>
                <td class="col-md-3">{{ item.descripcion }}</td>
                <td class="col-md-2">
                    <div class="box-body">
                        <img class="img-fluid" :src="url + item.foto_url" alt="item.titulo">
                    </div>
                </td>
                <td class="col-md-1">{{ item.direccion }}</td>
                <td class="col-md-3">
                    <div class="btn-group">
                        <router-link :to="{ name: 'categories.view', params: {hashid: item.id }}">
                            <VButton v-if="item.activo == '1'" type="warning">Ver/Edit</VButton>
                        </router-link>
                        <button type="button" class="btn btn-danger" v-on:click="deleteElement(item)">Delete</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
import { mapState } from 'vuex'

import Vue from 'vue'
import vuex from 'vuex'

import swal from 'sweetalert2'

import axios from 'axios'


export default {
    name: 'v-List',
    props: ['lists'],
    data () {
        return {
            url: null,
        }
    },
    methods: {
        deleteElement (item) {

            //?let self = this
            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover this post!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it',
            }).then(function () {
                const { response } = axios.delete('/api/v1/atractivo/' + item.id, item)
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

    computed: {
        ...mapState({
            idcategories: state => state.categories.idcategories,
        }),
        // ...mapGetters({
        //     categories: 'categories/categories',
        // })
    },
    refresh () {
        location.reload();
    },
    mounted () {
        this.url = process.env.MIX_APP_URL;
    },

}

</script>
<style lang="sass">

</style>
