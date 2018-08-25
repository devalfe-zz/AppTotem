<template>
    <card :title="$t('your_info')">
        <h3>{{ view.titulo }}</h3>

        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
            <alert-success :form="form" :message="$t('info_updated')"></alert-success>
            <p>{{ edit.titulo }}</p>
            <p>{{form.titulo}}</p>
            <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right">{{ $t('name') }}</label>
                <div class="col-md-7">
                    <input v-model="form.titulo" value="category.titulo" type="text" name="titulo" id="titulo" placeholder="{category.titulo}" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto">
                    <v-button type="success" :loading="form.busy">{{ $t('update') }}</v-button>
                </div>
            </div>
        </form>
    </card>
</template>

<script>
import { mapGetters } from 'vuex'
import Form from 'vform'

export default {
    computed: mapGetters({
        view: 'category/category'
    }),
    data() {
        return {
            hashId: '',
            form: new Form({
                titulo: '',
            }),
        }
    },
    created() {
        this.hashId = this.$route.params.hashid;
    },
    mounted() {
        this.$store.dispatch('category/loadCategoryId', this.hashId)
    },
}
</script>

<style>
h3 {
  color: #ff0022;
}
</style>
