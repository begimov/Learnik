<template>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-group" action="#" v-on:submit.prevent="send">
              <div class="form-group">
                <select v-model="collectionId" name="collection" id="collection" class="form-control">
                  <option disabled value="">Выберите коллекцию</option>
                  <option v-for="collection in collectionsList" :value="collection.id">{{ collection.name }}</option>
                </select>
              </div>
              <div class="form-group">
                <textarea v-model="body" id="body" rows="4" cols="30" placeholder="body..." class="form-control"></textarea>
              </div>
              <div class="form-group">
                <textarea v-model="snippet" id="snippet" rows="4" cols="30" placeholder="snippet..." class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
              <div class="panel-body card-body">
                <p>{{ body }}</p>
                <div v-if="snippet">
                  <prism language="php">{{ snippet }}</prism>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {
  mapActions
} from 'vuex'
import Prism from 'vue-prism-component'

export default {
  components: {
    Prism
  },
  data() {
    return {
      collectionId: null,
      body: null,
      snippet: null,
      collectionsList: JSON.parse(this.collections)
    }
  },
  methods: {
    ...mapActions([
      'createCard'
    ]),
    send() {
      this.createCard({
        collectionId: this.collectionId,
        body: this.body,
        snippet: this.snippet
      }).then(() => {
        this.collectionId = null,
        this.body = null,
        this.snippet = null
      })
    }
  },
  props: ['collections'],
  mounted() {
  }
}
</script>
