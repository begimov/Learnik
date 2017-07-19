export default {

  setCards (state, cards) {
    state.cards = cards
  },

  setCard (state, id) {
    if (state.cards) {
      const nextCardArrIndex = state.cards.findIndex(function(element, index, array) {
        return element.id === id
      })
      if (nextCardArrIndex !== -1) {
        state.card = state.cards[nextCardArrIndex]
      }
    }
  },

  setNextCard (state) {
    const cards = state.cards
    const card = state.card
    if (cards && card) {
      const cardArrIndex = cards.findIndex(function(element, index, array) {
        return element.id === card.id
      })
      if (cardArrIndex !== -1) {
        (cards[cardArrIndex + 1])
          ? state.card = cards[cardArrIndex + 1]
          : state.card = cards[0]
      }
    }
  }

}
