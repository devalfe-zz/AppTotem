<template>
    <div class="panel-inicio">
        <div v-for="(item, i) in lists" :key="i" class="botonesInicio p-2">
            <a href="slide">
                <div style="background:#e74c3c">
                    <fa icon="coffee" size="5x" :style="{ color: 'white' }" />
                    <p class="box-title">{{ item.titulo }}</p>
                </div>
            </a>
        </div>
    </div>
</template>
<script>
export default {
    name: 'v-Box',
    props: ['lists']
}
</script>
<style lang="scss">
.panel-inicio {
  display: flex;
  flex-wrap: wrap;
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
.botonesInicio div span {
  font-size: 40px;
  margin-top: 30%;
  color: white;
}
.botonesInicio div p {
  font-size: 20px;
  color: white;
}
</style>
