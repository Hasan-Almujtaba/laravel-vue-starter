export const getErrors = ({ commit }, payload) => {
  commit('SET_ERRORS', payload)
}

export const removeErrors = ({ commit }) => {
  commit('UNSET_ERRORS')
}