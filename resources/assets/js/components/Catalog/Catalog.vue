<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12" v-if="collections">
              <div class="collection col-lg-3 col-md-4 col-sm-6" v-for="collection in collections">
                  <div class="panel panel-default">
                      <div class="panel-body">
                        <a :href="`${route}/${collection.id}`"><h3>{{ collection.name }}</h3></a>
                      </div>
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
    props: ['route'],
    mounted() {
      this.getCollections(1)
    }
}
</script>
