import api from '../../api'

export default {
  getCollections ({dispatch, commit}, page) {
    // commit('setLoadingConversations', true)
    api.catalog.getCollections(page).then(res => {
      commit('setCollections', res.data)
      // commit('setLoadingConversations', false)
    })
  }
}
