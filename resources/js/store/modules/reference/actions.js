import Reference from '../../../api/Reference'
import router from '../../../router'

export const getReferences = ({ commit }) => {
  Reference.all().then(response => {
    commit('SET_REFERENCES', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const getReference = ({ commit, dispatch }, payload) => {
  Reference.show(payload).then(response => {
    commit('SET_REFERENCE', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const storeReference = ({ commit, dispatch }, payload) => {
  Reference.store(payload).then(response => {
    dispatch('removeErrors', null, { root: true })
    router.push({ name: 'admin-reference' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const updateReference = ({ commit, dispatch }, payload) => {
  Reference.update(payload).then(response => {
    router.push({ name: 'admin-reference' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const deleteReference = ({ commit }, payload) => {
  Reference.delete(payload).then(response => {
    commit('UNSET_REFERENCE', payload)
  }).catch(error => {
    console.log(error)
  });
}
