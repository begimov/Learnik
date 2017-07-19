<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="collection col-lg-4 col-md-4 col-sm-6 col-xs-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-2">
                  <div class="panel panel-default" v-if="cards">
                      <div class="panel-body" v-if="card">
                        <p v-if="card.body">{{ card.body }}</p>
                        <p v-if="card.snippet"><code class="prettyprint">{{ card.snippet }}</code></p>
                      </div>
                      <div class="panel-footer panel-custom">
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
