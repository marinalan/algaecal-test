<template>
  <div>
    <h1>Video page</h1>
    <p>Path: {{ $route.path }}</p>
    <p>{{ video.title }}</p>
    <p>{{ video.description }}</p>
    <p>{{ video.video_id }}</p>
    <p>{{ video.category }}</p>
  </div>
</template>
<script>
import axios from 'axios';

export default {
  async asyncData({ params, redirect }) {
    const result = await axios.get('http://localhost:8080/videos/'+params.video_id)
    return {
        video: result.data.data
    }
  }
}
</script>
