/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });
var urlCat = 'categoria';
new Vue({
    el: '#crud',
    created: function() {
        this.getCategorias();
    },
    data: {
        categorias: [],
        newCategoria: '',
        errors: []
    },
    methods: {
        getCategorias: function() {
            axios.get(urlCat).then(response => {
                this.categorias = response.data
            });
        },
        deleteCategorias: function(categoria) {
            //alert(categoria.id);
            var url = urlCat + '/' + categoria.id;
            axios.delete(url).then(response => {
                this.getCategorias();
                toastr.success('Eliminado');
            });
        },
        createCategoria: function() {
            var url = 'categoria';
            axios.post(url, {
                cat: this.newCategoria
            }).then(response => {
                this.getCategorias();
                this.newCategoria = '';
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Nueva Categoria creada con éxito');
            }).catch(error => {
                this.errors = error.response.data
            });
        }

    }

});