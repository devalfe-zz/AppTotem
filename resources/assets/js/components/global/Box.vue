<template>
    <div>
        <ul>
            <li v-for="item in lists" class="botonesInicio">
                <a href="slide">
                    <div style="background:#e74c3c">
                        <span class="fa fa-toggle-right"></span>
                        <p class="box-title">{{ item.titulo }}</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name: 'Box',
    props: ['lists']
}
</script>
<style scoped>
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
