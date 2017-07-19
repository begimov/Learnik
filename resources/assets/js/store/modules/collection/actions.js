import api from '../../api'

export default {
  getCards ({dispatch, commit}, collectionId) {
    // commit('setLoadingConversations', true)
    api.collection.getCards(collectionId).then(res => {
      commit('setCards', res.data)
      commit('setInitialCard', res.data[0].id)
      // commit('setLoadingConversations', false)
    })
  },
  nextCard ({dispatch, commit}) {
    commit('setNextCard')
  },
  previousCard ({dispatch, commit}) {
    commit('setPreviousCard')
  }
}
