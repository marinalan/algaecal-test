<template>
  <div class="video-thumbnail">
    <div class="thumbnail">
    </div>
    <h4 class="video-title">{{ video.title }}</h4>
    <p class="video-description">{{ video.description }}</p> 
  </div>
</template>
<script>
export default {
  props: {
    video: Object
  }
  // data() {
  //   
  // },
  // methods() {

  // }
}
</script>
<style scoped>
  a:hover {
    text-decoration: none;
  }
</style>
