export const SET_REFERENCES = (state, payload) => {
  state.references = payload
}

export const SET_REFERENCE = (state, payload) => {
  state.reference = payload
}

export const UNSET_REFERENCE = (state, payload) => {
  state.references = state.references.filter(item => {
    return item.id !== payload
  })
}