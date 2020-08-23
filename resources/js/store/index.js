import Vue from 'vue'
import Vuex from 'vuex'

// modules
import auth from './modules/auth'
import tool from './modules/tool'
import style from './modules/style'
import plugin from './modules/plugin'
import reference from './modules/reference'

import state from './state'
import * as getters from './getters'
import * as actions from './actions'
import * as mutations from './mutations'

Vue.use(Vuex)

export default new Vuex.Store({
  state,
  getters,
  mutations,
  actions,
  modules: {
    auth,
    tool,
    style,
    plugin,
    reference
  }
})