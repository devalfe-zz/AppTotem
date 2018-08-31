
<script>
import { mapState } from 'vuex'

export default {
    name: 'v-Spinner',

    computed: {
        ...mapState(['fetching']),
    },
}
</script>

<template>
    <div class="container">
        <fa icon="sign-out-alt" v-show="fetching" />

    </div>
</template>

<style scoped>
.container {
  display: inline-block;
  width: 40px;
  color: #fff;
  position: absolute;
  z-index: 1;
  right: 18px;
  top: 18px;
}
</style>
