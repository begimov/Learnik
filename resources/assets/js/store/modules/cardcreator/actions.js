import api from '../../api'

export default {
  createCard({dispatch, commit}, {collectionId, body, snippet}) {
        return api.cardcreator.storeCard({collectionId, body, snippet}).then(res => {
      })
  }
}
