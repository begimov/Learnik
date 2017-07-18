import api from '../../api'

export default {
  getCard ({dispatch, commit}, id) {
    // commit('setLoadingConversations', true)
    api.collection.getCard(1).then(res => {
      commit('setCard', res.data)
      // commit('setLoadingConversations', false)
    })
  }
}
