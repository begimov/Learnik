export default {
  getCards(collectionId) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/collections/${collectionId}`).then(res => {
        resolve(res)
      })
    })
  }
}
