export default {
  getCollections(page) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/catalog?page=${page}`).then(res => {
        resolve(res)
      })
    })
  }
}
