export const SET_STYLES = (state, payload) => {
  state.styles = payload
}

export const SET_STYLE = (state, payload) => {
  state.style = payload
}

export const UNSET_STYLE = (state, payload) => {
  state.styles = state.styles.filter(item => {
    return item.id !== payload
  })
}