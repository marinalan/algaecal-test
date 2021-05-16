<template>
  <b-container>
    <b-row align-v="center">
      <b-col>
        <select v-model="filter"  
          @change="pageSlice()"
          placeholder="Video Filter"
          class="video-filter"
        >
          <option value="About">About Us</option>
          <option value="Excercises">Excercises</option>
          <option value="Recipes">Recipes</option>
          <option value="Testimonials">Testimonials</option>
        </select>
      </b-col>
      <b-col sm="8">
        <button 
          class="btn-algae orange" 
          @click="previousSlice"
          v-if="offset >= 6"
        >Previous Videos</button>
      </b-col>
    </b-row>
    <b-row>
      <b-col sm="4" v-for="video in pageSlice()" :key="video.video_id">
        <NuxtLink :to="'/videos/'+video.video_id">
          <VideoSummary :video="video"/>
        </NuxtLink>
      </b-col>
    </b-row>
    <div class="button-container" v-if="offset+6 < videos.length">
      <button class="btn-algae orange" @click="nextSlice">More Videos</button>
    </div>
  </b-container>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      offset: 0,
      videos: [],
      filter: '',
    }
  },
  async asyncData({ params, redirect }) {
    const result = await axios.get(process.env.apiBaseUrl+'/videos')
    return {
        offset: 0,
        videos: result.data.data
    }
  },
  methods: {
    nextSlice() {
      if (this.filter.length > 0){
        this.filter = '';
        this.offset = 0;
      } else {
        this.offset+=6;
      }
    },
    previousSlice(){
      if (this.offset>=6) {
        this.offset -= 6;
      }
    },
    pageSlice() {
      let filtered = this.videos;
      if (this.filter.length > 0) {
        filtered = this.videos.filter(video => {
          return video['category'] == this.filter;
        });
      }
      if (filtered.length > 6) {
        // return slice for page with 6 items
        return filtered.slice(this.offset, this.offset+6);
      } else {
        return filtered;
      }
    }
  }
}
</script>

<style>
</style>
