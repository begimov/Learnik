import api from '../../api'

export default {
  createCard({dispatch, commit}, {body, snippet}) {
        return api.cardcreator.storeCard({body, snippet}).then(res => {
      })
  }
}
