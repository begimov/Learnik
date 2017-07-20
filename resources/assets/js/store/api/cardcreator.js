export default {
    storeCard({collectionId, body, snippet}) {
        return new Promise((resolve, reject) => {
            axios.post('/webapi/cards', {collectionId, body, snippet}).then(res => {
                resolve(res)
            })
        })
    }
}
