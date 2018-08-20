<template>
    <table class="table">
        <thead>
            <slot name="columns">
                <th v-for="(column, index) in columns" :key="index">
                    {{ column }}
                </th>
            </slot>
        </thead>
    </table>
</template>
<script>
export default {
    name: 'v-List',
    props: ['columns'],
}
</script>
<style lang="sass">

</style>
