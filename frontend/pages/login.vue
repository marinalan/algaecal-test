<template>
  <div class="main">
    <b-card 
      title="User Login"
      style="width: 40rem;"
      class="mb-2"
    >
      <LoginForm /> 
    </b-card>
  </div>
</template>

<script>
export default {
}
</script>

<style>
   .main {
     background-color: #00382c;
     margin: 0 auto;
     min-height: calc(100vh - 80px);
     display: flex;
     justify-content: center;
     align-items: center;
     text-align: center;
   }
   .card-title {
     font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont, 
       'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
     color: #007e61;
     font-size: 68px;
   }
</style>
