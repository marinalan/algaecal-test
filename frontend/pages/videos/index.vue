<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Welcome to Our Video Library</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <b-list-group>
          <b-list-group-item v-for="video in videos" :key="video.video_id">
            <NuxtLink :to="'/videos/'+video.video_id">{{ video.title }}</NuxtLink>
          </b-list-group-item>
        </b-list-group>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  async asyncData({ params, redirect }) {
    const result = await axios.get('http://localhost:8080/videos')
    return {
        videos: result.data.data
    }
  }
}
</script>

<style>
</style>
