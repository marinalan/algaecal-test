<template>
  <b-container>
    <b-row>
      <b-col>
        <NuxtLink to="/videos" class="algaecal-link">Back</NuxtLink>
      </b-col>
    </b-row>
    <b-row>
      <div class="algaecal-container">
        <div class="page-title">
          <h3 class="video-title">Video Player</h3>
          <b-badge pill variant="info">{{ video.category }}</b-badge>
        </div>
        <VideoPlayer :video_id="video.video_id"/>
        <h4 class="video-title">{{ video.title }}</h4>
        <p class="video-description">{{ video.description }}</p> 
      </div>
    </b-row>
  </b-container>
</template>
<script>
import axios from 'axios';

export default {
  async asyncData({ params, redirect }) {
    const result = await axios.get(process.env.apiBaseUrl+'/videos/'+params.video_id)
    return {
        video: result.data.data
    }
  }
}
</script>
