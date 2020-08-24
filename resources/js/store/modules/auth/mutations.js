export const SET_TOKEN = (state, payload) => {
  state.token = payload
}

export const REMOVE_TOKEN = (state) => {
  state.token = null
} 