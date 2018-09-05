<template>
    <card :title="$t('your_info')">
        <div class="product_view" id="product_view">
            <div>
                <div>
                    <div>
                        <h3 class="modal-title">{{ view.titulo}}</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-6 product_img">
                                <img class="img-fluid" :src="view.foto_url | baseurl">
                            </div>
                            <div class="col-md-6 product_content">
                                <h4>
                                    <span>{{vies,descripcion}}</span>
                                </h4>

                                <p>{{ view.detalle }}</p>
                                <h3 class="cost">
                                    <small class="pre-cost"> {{ view.latitud}}
                                    </small>

                                    <small class="pre-cost"> {{ view.longitud}}
                                    </small>
                                </h3>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        {{ view.direccion }}
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-4 col-sm-6 col-xs-12"> {{ view.ubicacion}}
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-4 col-sm-12">{{ view.horarios }}
                                    </div>
                                    <!-- end col -->
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <v-Map :Lat="view.latitud" :lng="view.longitud " :title="view.titulo "></v-Map>
                            <div class="col-6">
                                <video width="100%" height="100%" controls>
                                    <source :src="view.video_url | baseurl">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </card>
</template>

<script>
import { mapGetters, mapState } from 'vuex'

export default {
    middleware: 'auth',

    data () {
        return {
            hashId: ''
        }
    },

    created () {
        this.hashId = this.$route.params.hashid
    },

    mounted () {
        this.$store.dispatch('category/loadCategoryId', this.hashId)
    },
    computed: {
        //?...mapGetters({

        ...mapState({
            view: state => state.category.element,
            //?view: 'category/element',
        }),
    },



}
</script>

<style>
h3 {
  color: #ff0022;
}
.map {
  height: 500px;
  display: inline-block;
  color: #fff;
  position: relative;
  z-index: 1;
  top: 18px;
}
</style>
