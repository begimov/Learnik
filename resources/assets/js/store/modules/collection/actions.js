import api from '../../api'

export default {
  getCard ({dispatch, commit}, {collId, cardId}) {
    // commit('setLoadingConversations', true)
    api.collection.getCard(collId, cardId).then(res => {
      commit('setCard', res.data)
      // commit('setLoadingConversations', false)
    })
  }
}
