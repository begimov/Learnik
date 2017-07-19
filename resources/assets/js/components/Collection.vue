<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="collection col-lg-3 col-md-4 col-sm-6">
                  <div class="panel panel-default" v-if="cards">
                      <div class="panel-body" v-if="card">
                        <h3>{{ card.body }}</h3>
                        <a href="#" v-on:click.stop.prevent="previousCard()">
                          PREV
                        </a>
                        <a href="#" v-on:click.stop.prevent="nextCard()">
                          NEXT
                        </a>
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
            'getIsLoadingCards',
            'card'
        ])
    },
    methods: {
        ...mapActions([
            'getCards',
            'nextCard',
            'previousCard'
        ])
    },
    props: ['collectionId'],
    mounted() {
      this.getCards(this.collectionId)
    }
}
</script>
