export default {
  getCollections(page, themeId) {
    return new Promise((resolve, reject) => {
      axios.get(`/webapi/themes/${themeId}?page=${page}`).then(res => {
        resolve(res)
      })
    })
  }
}
