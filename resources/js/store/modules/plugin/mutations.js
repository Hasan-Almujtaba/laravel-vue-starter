export const SET_PLUGINS = (state, payload) => {
  state.plugins = payload
}

export const SET_PLUGIN = (state, payload) => {
  state.plugin = payload
}

export const UNSET_PLUGIN = (state, payload) => {
  state.plugins = state.plugins.filter(item => {
    return item.id !== payload
  })
}