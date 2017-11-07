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
        addCategoria: {
            titulo: '',
            activo: ''
        },
        errors: {}
    },
    methods: {
        getCategorias: function() {
            axios.get(urlCat).then(response => {
                this.categorias = response.data
            });
        },
        deleteCategorias: function(categoria) {
            let ok = confirm("are you sure?");
            if (ok) {
                var url = urlCat + '/' + categoria.id;
                axios.delete(url).then(response => {
                    //console.log(response);
                    this.getCategorias();
                    //toastr.success('Eliminado');
                });
            }
        },
        createCategorias: function() {
            // axios.post('categoria', this.addCategoria)
            //     .then(response => {
            //         this.getCategorias();
            //         this.addCategoria = "";
            //         this.errors = "";
            //         console.log(response);
            //         //$('#create').modal('hide');
            //         $('#create').modal().hide();
            //     })
            //     .catch(error => {
            //         this.errors = error.response;
            //         console.log(error.response)
            //     })
            axios.post('categoria', {
                titulo: this.addCategoria,
                activo: this.addCategoria
            }).then(response => {
                this.getCategorias();
                this.addCategoria = "";
                this.errors = [];
                $('#create').modal('hide');
                console.log(response);
                // toastr.success('Nueva Categoria creada con éxito');
            }).catch(error => {
                this.errors = error.response.data
                console.log(error.response)
            });

        }

    },
    mounted() {
        console.log('Component mounted.')
    }

});