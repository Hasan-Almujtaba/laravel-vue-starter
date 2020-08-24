import Auth from '../../../api/Auth'
import router from '../../../router'

export const login = ({ commit, dispatch }, payload) => {
  Auth.login(payload).then(response => {
    dispatch('removeErrors', null, { root: true })
    commit('SET_TOKEN', response.data.access_token)
    router.push({ name: 'admin-dashboard' })
  }).catch(error => {
    var errorData = {
      status: null,
      data: null
    }
    // check if validation error
    if (error.response.status === 422) {
      errorData.status = 422
      errorData.data = error.response.data.errors
    }

    // check if password incorrect
    if (error.response.status === 401) {
      errorData.status = 401
      errorData.data = error.response.data.message
    }

    // get error
    dispatch('getErrors', errorData, { root: true })
  });
}

export const logout = ({ commit }) => {
  Auth.logout().then(response => {
    commit('REMOVE_TOKEN')
    router.push({ name: 'login' })
  }).catch(error => {
    console.log(error)
  })

} 
