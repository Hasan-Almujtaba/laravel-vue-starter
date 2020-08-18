import Style from '../../../api/Style'
import router from '../../../router'

export const getStyles = ({ commit }) => {
  Style.all().then(response => {
    commit('SET_STYLES', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const getStyle = ({ commit, dispatch }, payload) => {
  Style.show(payload).then(response => {
    commit('SET_STYLE', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const storeStyle = ({ commit, dispatch }, payload) => {
  Style.store(payload).then(response => {
    dispatch('removeErrors', null, { root: true })
    router.push({ name: 'admin-style' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const updateStyle = ({ commit, dispatch }, payload) => {
  Style.update(payload).then(response => {
    router.push({ name: 'admin-style' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const deleteStyle = ({ commit }, payload) => {
  Style.delete(payload).then(response => {
    commit('UNSET_STYLE', payload)
  }).catch(error => {
    console.log(error)
  });
}
