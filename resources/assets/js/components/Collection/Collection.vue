<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="collection col-md-6 col-md-offset-3">
                  <div class="panel panel-default">
                      <div class="panel-body">
                        ghjghj
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
            'card',
            'getLoadingCard'
        ])
    },
    methods: {
        ...mapActions([
            'getCard'
        ])
    },
    props: ['id'],
    mounted() {
      this.getCard(this.id, 1)
    }
}
</script>
