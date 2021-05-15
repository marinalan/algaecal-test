<template>
  <b-form @submit.stop.prevent="onSubmit">
    <b-form-group
      id="input-group-1"
      label="Username:"
      label-for="input-1"
    >
      <b-form-input
        id="input-1"
        v-model="form.username"
        type="text"
        required
        placeholder="Your username"
      ></b-form-input>
    </b-form-group>
    <b-alert v-model="showDismissibleAlert" variant="danger" dismissible>
      Sorry, that username is not found
    </b-alert>
    <b-button type="submit" variant="primary">Submit</b-button>
  </b-form>
</template>
<script>
export default {
  data() {
    return {
      form: {
        username: ''
      },
      showDismissibleAlert: false
    };
  },
  methods: {
    onAuthenticationResult(loggedIn) {
      this.form.username = '';
      if (loggedIn) {
        this.$router.push("/videos");
      } else {
        this.showDismissibleAlert = true;
      }
    },
    onSubmit(){
      console.log('A form was submitted');
      let payload = {
        username: this.form.username
      };
      this.$store.dispatch('login', { data: payload, cb: this.onAuthenticationResult});
    },
  }}
</script>
