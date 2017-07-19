import api from '../../api'

export default {
  getCards ({dispatch, commit}, collectionId) {
    // commit('setLoadingConversations', true)
    api.collection.getCards(collectionId).then(res => {
      commit('setCards', res.data)
      // commit('setLoadingConversations', false)
    })
  }
}
