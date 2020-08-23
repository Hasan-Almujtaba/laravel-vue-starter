import Api from './Api'

export default {
  login(data) {
    return Api.post('/login', {
      email: data.email,
      password: data.password,
    })
  },

  logout() {
    return Api.get('/logout')
  }
}