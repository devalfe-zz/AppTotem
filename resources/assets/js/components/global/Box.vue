<template>
    <div class="row">
        <div v-for="(item,i) in boxs" :key="i" class="col-lg-3 col-md-4 col-sm-6 col-12 botonesInicio p-5">
            <router-link :to="{ name: 'categories.category', params: {hashid: item.id }}">
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
    props: ['boxs'],
}
</script>
<style lang="scss">
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
