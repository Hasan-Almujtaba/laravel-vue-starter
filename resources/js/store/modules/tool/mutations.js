export const SET_TOOLS = (state, payload) => {
  state.tools = payload
}

export const SET_TOOL = (state, payload) => {
  state.tool = payload
}

export const UNSET_TOOL = (state, payload) => {
  state.tools = state.tools.filter(item => {
    return item.id !== payload
  })
}