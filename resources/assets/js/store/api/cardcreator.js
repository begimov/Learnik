export default {
    storeCard({body, snippet}) {
        return new Promise((resolve, reject) => {
            axios.post('/webapi/cards', {body, snippet}).then(res => {
                resolve(res)
            })
        })
    }
}
