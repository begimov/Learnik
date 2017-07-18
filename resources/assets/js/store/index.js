import catalog from './modules/catalog'
import collection from './modules/collection'
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    catalog,
    collection
  }
})
