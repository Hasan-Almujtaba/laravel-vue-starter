export const SET_TOKEN = (state) => {
  state.token = localStorage.getItem('token')
}

export const REMOVE_TOKEN = (state) => {
  state.token = null
} 