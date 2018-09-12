<template>
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
                        <img class="img-fluid" :src="'https://guiaturistica.moqueguaturismo.gob.pe/public/' + foto.foto_url" :alt="item.titulo">
                    </div>
                </td>
                <td class="col-md-3">
                    <div class="btn-group">
                        <router-link :to="{ name: 'categories.view', params: {hashid: foto.id }}">
                            <VButton v-if="foto.activo == '1'" type="warning">Ver/Edit</VButton>
                        </router-link>
                        <button type="button" class="btn btn-danger" v-on:click="deleteElement(foto)">Delete</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
    created () {
        this.hashId = this.$route.params.hashid

    },

    mounted () {
        this.$store.dispatch('category/loadCategoryId', this.hashId)
    },
    computed: {
        ...mapState({
            element: state => state.category.element,
        }),
    },

}
</script>

