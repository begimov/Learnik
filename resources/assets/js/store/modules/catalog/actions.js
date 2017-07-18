import api from '../../api'

export default {
  getCollections ({dispatch, commit}, page) {
    // commit('setLoadingConversations', true)
    api.catalog.getCollections(1).then(res => {
      console.log(res.data);
      commit('setCollections', res.data)
      // commit('setLoadingConversations', false)
    })
  }
}
