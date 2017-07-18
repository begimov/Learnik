<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="collection col-md-6 col-md-offset-3">
                  <div class="panel panel-default">
                      <div class="panel-body" v-if="card">
                        {{ card.body }}
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
    props: ['collId', 'cardId'],
    mounted() {
        this.getCard({
          collId: this.collId,
          cardId: this.cardId
        })
    }
}
</script>
