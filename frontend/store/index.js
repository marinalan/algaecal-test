export const state = () => ({
  loggedIn: false,
  loggedInUser: null,
})

export const mutations = {
  setLoggedIn(state, isLoggedIn) {
    state.loggedIn = isLoggedIn;
  },
  setUser(state, user) {
    state.loggedInUser = user;
  },
}

export const getters = {
  isAuthenticated(state) {
    return state.loggedIn
  },

  loggedInUser(state) {
    return state.loggedInUser
  },
}

export const actions = {
  login({ commit }, { data, cb }) {
    this.$axios.post('http://localhost:8080/authenticate', data)
      .then(response => {
        commit('setLoggedIn', response.data.data ?  true : false);
        commit('setUser', response.data.data );
        cb && cb(response.data.data ? true : false);
      })
      .catch(err => {
        console.log(err);
      })
      .finally(() => {
        //commit('setFetching', false); 
      });
  }, 
  logout({ commit }) {
    commit('setLoggedIn', false);
    commit('setUser', null );
  }
}