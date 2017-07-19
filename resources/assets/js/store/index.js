import themes from './modules/themes'
import theme from './modules/theme'
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    themes,
    theme
  }
})
