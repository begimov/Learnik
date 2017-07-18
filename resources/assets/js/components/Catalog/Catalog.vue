<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body" v-for="collection in collections">
                      {{ collection }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {
    mapActions,
    mapGetters
} from 'vuex'

export default {
    computed: {
        ...mapGetters([
            'collections',
            'getLoadingCollections'
        ])
    },
    methods: {
        ...mapActions([
            'getCollections'
        ])
    },
    mounted() {
      this.getCollections(1)
    }
}
</script>
