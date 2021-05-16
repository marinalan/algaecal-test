<template>
  <b-form @submit.stop.prevent="onSubmit">
    <b-form-group
      id="username"
    >
      <b-form-input
        id="input-1"
        v-model="form.username"
        type="text"
        required
        placeholder="Your username"
        @input.native="checkUsername"
      ></b-form-input>
    </b-form-group>
    <b-form-checkbox
      id="remember-me"
      v-model="form.remember_me"
      name="remember-me"
      value="true"
      unchecked-value="false"
    >
      Remember Me
    </b-form-checkbox>
    <b-alert v-model="showDismissibleAlert" variant="danger" dismissible>
      Sorry, that username is not found
    </b-alert>
    <button type="submit" class="btn-algae green" :disabled="!isValid">Login</button>
  </b-form>
</template>
<script>
export default {
  data() {
    return {
      form: {
        username: '',
        remember_me: false
      },
      showDismissibleAlert: false,
      isValid: false
    };
  },
  methods: {
    checkUsername() {
      this.isValid = this.form.username.length>=3;
    },
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
