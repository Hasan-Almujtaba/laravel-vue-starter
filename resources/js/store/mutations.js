export const SET_ERRORS = (state, payload) => {
  state.errors = payload
}

export const UNSET_ERRORS = (state) => {
  state.errors = []
}