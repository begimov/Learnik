<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12" v-if="themes">
              <div class="collection col-lg-3 col-md-4 col-sm-6" v-for="theme in themes">
                  <div class="panel panel-default">
                      <div class="panel-body">
                        <a :href="`${route}/${theme.id}`"><h3>{{ theme.name }}</h3></a>
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
            'themes',
            'getIsLoadingThemes'
        ])
    },
    methods: {
        ...mapActions([
            'getThemes'
        ])
    },
    props: ['route'],
    mounted() {
      this.getThemes(1)
    }
}
</script>
