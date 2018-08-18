<template>
    <table class="table">
        <thead>
            <slot name="columns">
                <th v-for="(column, col) in columns" :key="col">
                    {{ column }}
                </th>
            </slot>
        </thead>
        <tbody>
            <tr v-for="(item, i) in data" :key="i">
                <slot :row="item">
                    <td v-for="(column, col) in columns" :key="col" v-if="hasValue(item,column)">
                        {{ itemValue(item, column) }}
                    </td>
                </slot>
            </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    name: 'v-Table',
    props: {
        columns: Array,
        data: Array
    },
    methods: {
        hasValue(item, column) {
            return item[column.toLowerCase()] !== 'undefined'
        },
        itemValue(item, column) {
            return item[column.toLowerCase()]
        }
    }
}
</script>

