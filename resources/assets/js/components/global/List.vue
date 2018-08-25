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
                        <img class="img-fluid" :src="item.foto_url | baseurl" alt="item.titulo">
                    </div>
                </td>
                <td class="col-md-1">{{ item.direccion }}</td>
                <td class="col-md-3">
                    <div class="btn-group">
                        <router-link :to="{ name: 'categories.view' , params: {hashid: item.id }}">
                            <VButton v-if="item.activo == '1'" type="success">Ver</VButton>
                        </router-link>
                        <router-link :to="{ name: 'categories.edit', params: {hashid: item.id }}">
                            <VButton type="info">Edit</VButton>
                        </router-link>
                        <VButton type="danger" @click="deletePost(item)">
                            Delete
                        </VButton>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
import Vue from 'vue'

Vue.filter('baseurl', function (value) {
    return "http://moqueguaturismo.gob.pe/public/dist/" + value
});

export default {
    name: 'v-List',
    props: ['lists'],
}
</script>
<style lang="sass">

</style>
