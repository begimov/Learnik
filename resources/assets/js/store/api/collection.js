export default {
  getCard(collId, cardId) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/collection/${collId}/card/${cardId}`).then(res => {
        resolve(res)
      })
    })
  }
}
