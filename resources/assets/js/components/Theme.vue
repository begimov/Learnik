<template>
    <div class="container">
      <search></search>
        <div class="row">
            <div class="col-md-12" v-if="collections">
              <div class="collection col-lg-3 col-md-4 col-sm-6" v-for="collection in collections">
                <a :href="`${route}/${collection.id}`">
                  <div class="panel panel-default">
                      <div class="panel-body card-body">
                        <h3>{{ collection.name }}</h3>
                      </div>
                  </div>
                </a>
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
            'getIsLoadingCollections'
        ])
    },
    methods: {
        ...mapActions([
            'getCollections'
        ])
    },
    props: ['route', 'themeId'],
    mounted() {
      this.getCollections({
        page: 1,
        themeId: this.themeId
      })
    }
}
</script>
