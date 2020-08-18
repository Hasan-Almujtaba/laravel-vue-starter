import Tool from '../../../api/Tool'
import router from '../../../router'

export const getTools = ({ commit }) => {
  Tool.all().then(response => {
    commit('SET_TOOLS', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const getTool = ({ commit, dispatch }, payload) => {
  Tool.show(payload).then(response => {
    commit('SET_TOOL', response.data)
  }).catch(error => {
    console.log(error)
  });
}

export const storeTool = ({ commit, dispatch }, payload) => {
  Tool.store(payload).then(response => {
    dispatch('removeErrors', null, { root: true })
    router.push({ name: 'admin-tool' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const updateTool = ({ commit, dispatch }, payload) => {
  Tool.update(payload).then(response => {
    router.push({ name: 'admin-tool' })
  }).catch(error => {
    // check if validation error
    if (error.response.status === 422) {
      dispatch('getErrors', error.response.data.errors, { root: true })
    }
  })
}

export const deleteTool = ({ commit }, payload) => {
  Tool.delete(payload).then(response => {
    commit('UNSET_TOOL', payload)
  }).catch(error => {
    console.log(error)
  });
}
