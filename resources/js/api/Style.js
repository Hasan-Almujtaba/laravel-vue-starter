import Api from './Api'

const END_POINT = '/styles'

export default {
  all() {
    return Api.get(END_POINT)
  },

  show(id) {
    return Api.get(`${END_POINT}/${id}`)
  },

  store(data) {
    return Api.post(END_POINT, {
      title: data.title,
      content: data.content,
    })
  },

  update(data) {
    return Api.put(`${END_POINT}/${data.id}`, {
      title: data.title,
      content: data.content,
    })
  },

  delete(id) {
    return Api.delete(`${END_POINT}/${id}`)
  }
}