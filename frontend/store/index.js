export const state = () => ({
  loggedIn: false,
  loggedInUser: null,
  fetching: false,
  videos: []
})

export const mutations = {
  setLoggedIn(state, isLoggedIn) {
    state.loggedIn = isLoggedIn;
  },
  setUser(state, user) {
    state.loggedInUser = user;
  },
  setFetching(state, isFetching) {
    state.fetching = isFetching;
  },
  setVideos(state, videos) {
    state.videos. videos
  }
}

export const getters = {
  isAuthenticated(state) {
    return state.loggedIn
  },

  loggedInUser(state) {
    return state.loggedInUser
  },

  isFetching(state) {
    return state.fetching
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
  }
}