<template>
  <b-form @submit.stop.prevent="onSubmit">
    <b-form-group
      id="input-group-1"
      label="Email address:"
      label-for="input-1"
    >
      <b-form-input
        id="input-1"
        v-model="form.email"
        type="email"
        required
        placeholder="Enter email"
      ></b-form-input>
    </b-form-group>
    <b-button type="submit" variant="primary">Submit</b-button>
  </b-form>
</template>
<script>
export default {
  data() {
    return {
      form: {
        email: ''
      },
    };
  },
  methods: {
    onSubmit(){
      console.log('A form was submitted');
      this.$router.push("/videos");
    },
  }
}
</script>
