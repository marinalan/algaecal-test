# Web Developer Test

Let's pretend AlgaeCal is creating a simple membership site where customers may view a library of 
exclusive video content.

The site uses Slim framework as a backend and Nuxt, VueJS and BootstrapVue on the Frontend.

* Copying the patterns used to create the Users, create a video library resource on this RESTful
api. The video endpoint should return this JSON:
```json
{
  "statusCode": 200,
  "data": [
    {
      "id": 1,
      "title": "What It’s Like To Work At AlgaeCal",
      "description": "Discover what it’s like to work at AlgaeCal with this quick video!",
      "video_id": "m3ralniniq"
    },
    {
      "id": 2,
      "title": "Esther Mangini Testimonial",
      "category": "Testimonials",
      "description": "Esther’s journey to healthier bones”,
      "video_id": "ybyot0dm7q"
    },
    {
      "id": 3,
      "title": "Teresa Cucurull Testimonial",
      "description": "Teresa’s journey to healthier bones”,
      "video_id": "mhmv73k989"
    },
    {
      "id": 4,
      "title": "Perfect Pilates For Osteoporosis - Legwork",
      "description": "Bone Healthy Exercises!”,
      "video_id": "3n5p02h26w"
    },
    {
      "id": 5,
      "title": "Perfect Pilates For Osteoporosis - Amazing Abs",
      "description": "Bone Healthy Exercises!",
      "video_id": "kkgeu7v2va"
    },
    {
      "id": 6,
      "title": "Lara's Homemade Granola",
      "description": "Bone Healthy Recipes",
      "video_id": "m6amjftj3w"
    },
    {
      "id": 7,
      "title": "Brazil Nut Pesto",
      "description": "Bone Healthy Recipes",
      "video_id": "ajoe5d0jk0"
    }
  ]
}
```
* The `/videos` page should use this data to populate the video list. Each list item should 
link to an individual video playing page, `/videos/{video_id}` that has a single player and
description of the video on it.

* Video thumbnails can be retrieved using the video_id along with the [Wistia video api](https://wistia.com/support/developers/data-api#medias_show)

## Layout
* Nav Bar
* Footer

## Pages
/login
   Blue button to algaecal green
   Login failure messages: no username found; possible validation checks
   Better text styling

/videos
    Layout improvement
    Hover on list items
    Click to go to video page
    Structure video description
    Videos are filterable based on category
    
/videos/{video_id}
    Layout
    
## Components Needed:
LoginForm: 
  the login form itself

VideoSummary: 
  Thumbnail, title, description

VideoPlayer: 
  Take a Wistia Id and create a player for it.

  This project contains both the frontend and the backend. The quickest way to get started is to run the build script from the root of the project:
```./build.sh```

This uses php composer and npm to install the required packages. For the build script to work you will have to have both on your system and in your path. You'll need to run both the slim framework app and the frontend app. So you'll need two terminals for this. From the root, run 
```composer start```

And from the /frontend folder run
```npm run dev```
