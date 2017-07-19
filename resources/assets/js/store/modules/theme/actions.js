import api from '../../api'

export default {
  getCollections ({dispatch, commit}, {page, themeId}) {
    // commit('setLoadingConversations', true)
    api.theme.getCollections(page, themeId).then(res => {
      commit('setCollections', res.data)
      // commit('setLoadingConversations', false)
    })
  }
}
