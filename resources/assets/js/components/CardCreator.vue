<template>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-group" action="#" v-on:submit.prevent="send">
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
              <div class="panel-body">
                <div class="form-group">
                <textarea v-model="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <textarea v-model="snippet" class="form-control"></textarea>
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

export default {
  data() {
    return {
      body: null,
      snippet: null,
    }
  },
  methods: {
    ...mapActions([
      'createConversation'
    ]),
    send() {
      this.createConversation({
        body: this.body,
        snippet: this.snippet
      }).then(() => {
        this.body = null
        this.snippet = null
      })
    },
  },
  mounted() {
  }
}
</script>
