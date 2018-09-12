<template>
    <card :title="$t('your_info')">
        <div class="product_element" id="product_element">
            <div>
                <div>
                    <div>
                        <h3 class="modal-title">{{ element.titulo}}</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-6 product_img">
                                <img class="img-fluid" :src="element.foto_url | baseurl">
                            </div>
                            <div class="col-md-6 product_content">
                                <h4>
                                    <span>{{element.descripcion}}</span>
                                </h4>

                                <p>{{ element.detalle }}</p>
                                <h4 class="cost">
                                    <small class="pre-cost"> {{ element.latitud}}
                                    </small>

                                    <small class="pre-cost"> {{ element.longitud}}
                                    </small>
                                </h4>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        {{ element.direccion }}
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-4 col-sm-6 col-xs-12"> {{ element.ubicacion}}
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-4 col-sm-12">{{ element.horarios }}
                                    </div>
                                    <!-- end col -->
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <video width="100%" height="100%" controls>
                                    <source :src="element.video_url | url">
                                </video>
                            </div>
                            <!-- <v-Map :Lat="element.latitud" :lng="element.longitud " :title="element.titulo"></v-Map> -->
                            <GmapMap :center="{lat:element.latitud,lng:element.longitud}" :zoom="17" style="width: 100%; height: 500px">
                                <GmapMarker :key="index" v-for="(m, index) in markers" :position="{lat:element.latitud,lng:element.longitud,}" :clickable="true" :draggable="true" @click="center=m.position"></GmapMarker>
                            </GmapMap>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </card>
</template>

<script>
import { mapGetters, mapState } from 'vuex'
import Vue from 'vue'

Vue.filter('url', function (value) {
    return "https://guiaturistica.moqueguaturismo.gob.pe/public/" + value
});

export default {
    middleware: 'auth',

    data () {
        return {
            hashId: '',
            markers: [{
                position: {
                    lat: '',
                    lng: ''
                }
            }]
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
            element: state => state.category.element,
            //?element: 'category/element',
        }),
    },

    methods: {
        refresh () {
            location.reload();
        }
    }



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
