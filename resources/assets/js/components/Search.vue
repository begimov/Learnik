<template>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <form role="search" action="" method="get">
              <div class="input-group">
                <input type="text" name="q" id="q" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-index-search" type="submit">Найти</button>
                </span>
              </div>
            </form>
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
      query: null,
    }
  },
  methods: {
    ...mapActions([
      'search'
    ]),
    send() {
      this.search({
        query: this.query,
      }).then(() => {
        this.query = null
      })
    }
  },
  props: [],
  mounted() {
  }
}
</script>
