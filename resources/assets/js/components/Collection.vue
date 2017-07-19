<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12" v-if="cards">
              <div class="collection col-lg-3 col-md-4 col-sm-6" v-for="card in cards">
                  <div class="panel panel-default">
                      <div class="panel-body">
                        <h3>{{ card.body }}</h3>
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
            'cards',
            'getIsLoadingCards'
        ])
    },
    methods: {
        ...mapActions([
            'getCards'
        ])
    },
    props: ['collectionId'],
    mounted() {
      this.getCards(this.collectionId)
    }
}
</script>
