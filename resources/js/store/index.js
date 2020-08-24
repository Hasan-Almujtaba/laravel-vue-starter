import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import SecureLS from 'secure-ls'

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

// secure ls
var ls = new SecureLS({ isCompression: false });
const dataState = createPersistedState({
  storage: {
    getItem: (key) => ls.get(key),
    setItem: (key, value) => ls.set(key, value),
    removeItem: (key) => ls.remove(key),
  },
  paths: ['auth']
})

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
  },
  plugins: [dataState]
})