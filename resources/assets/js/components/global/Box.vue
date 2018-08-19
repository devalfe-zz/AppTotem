<template>
    <div class="row">
        <div v-for="(item,i) in lists" :key="i" class="col-lg-3 col-md-4 col-sm-6 col-12 botonesInicio p-5">
            <router-link :to="{ name: 'settings.profile' }">
                <div class="d-flex flex-column align-items-center box-circle" :style="{background: item.color}">
                    <fa class="box-icon" :icon="item.icon" size="5x" />
                    <p class="box-title">
                        {{ item.titulo }}
                    </p>
                </div>
            </router-link>
        </div>
    </div>
</template>
<script>
export default {
    name: 'v-Box',
    props: ['lists'],
    computed: {
        items() {
            return [
                {
                    icon: 'user',
                    color: '#e74c3c',
                    route: 'settings.profile'
                },
                {
                    icon: 'lock',
                    color: '#2ecc71',
                    route: 'settings.password'
                },
                {
                    icon: 'user',
                    color: '#e67e22',
                    route: 'settings.profile'
                },
                {
                    icon: 'lock',
                    color: '#1abc9c',
                    route: 'settings.password'
                },
                {
                    icon: 'user',
                    color: '#9b59b6',
                    route: 'settings.profile'
                },
                {
                    icon: 'lock',
                    color: 'rgb(91, 192, 222)',
                    route: 'settings.password'
                },
                {
                    icon: 'user',
                    color: 'rgb(63, 144, 63)',
                    route: 'settings.profile'
                },
                {
                    icon: 'lock',
                    color: 'rgb(46, 109, 164)',
                    route: 'settings.password'
                }, {
                    icon: 'user',
                    color: 'rgb(245, 175, 75)',
                    route: 'settings.profile'
                },
                {
                    icon: 'lock',
                    color: 'rgb(50, 100, 78)',
                    route: 'settings.password'
                },
                {
                    icon: 'user',
                    color: 'rgb(240, 100, 78)',
                    route: 'settings.profile'
                }
            ]
        }
    },


}
</script>
<style lang="scss">
.box-circle {
  background-color: crimson;
}

.botonesInicio div {
  position: relative;
  display: block;
  margin: auto;
  width: 150px;
  height: 150px;
  text-align: center;
  border-radius: 50%;
  transition: all 1s ease;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
}
.botonesInicio:hover div {
  transform: rotateY(360deg);
  transform-style: preserve-3d;
}
.botonesInicio div .box-icon {
  font-size: 40px;
  margin-top: 30%;
  color: white;
}
.botonesInicio div p {
  font-size: 18px;
  color: white;
}
</style>
