import Plugin from '../../../api/Plugin'
import router from '../../../router'

export const getPlugins = ({ commit }) => {
  Plugin.all().then(response => {
    commit('SET_PLUGINS', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const getPlugin = ({ commit, dispatch }, payload) => {
  Plugin.show(payload).then(response => {
    commit('SET_PLUGIN', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const storePlugin = ({ commit, dispatch }, payload) => {
  Plugin.store(payload).then(response => {
    dispatch('removeErrors', null, { root: true })
    router.push({ name: 'admin-plugin' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const updatePlugin = ({ commit, dispatch }, payload) => {
  Plugin.update(payload).then(response => {
    router.push({ name: 'admin-plugin' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const deletePlugin = ({ commit }, payload) => {
  Plugin.delete(payload).then(response => {
    commit('UNSET_PLUGIN', payload)
  }).catch(error => {
    console.log(error)
  });
}
