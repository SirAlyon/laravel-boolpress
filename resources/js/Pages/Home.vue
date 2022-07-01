<template>
  <div class="page">
    <JumbotronComponent />
    <div class="recent_articles">
      <div class="container">
        <div class="row">
          <div class="col" v-for="post in posts" :key="post.id">
            <div class="card">
              <img
                class="img-fluid"
                :src="'/storage/' + post.cover_image"
                :alt="post.name"
              />
              <div class="card-body">
                <p>
                  {{ post.content.slice(0, 200) + "..." }}
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="go_to_blog d-flex justify-content-center">
          <router-link :to="{ name: 'posts' }" class="btn btn-primary mt-4"
            >Go To My Blog!</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import JumbotronComponent from "../components/JumbotronComponent.vue"


export default {
  name: "Home",
  components: {JumbotronComponent},
  data() {
    return {
      posts: "",
    };
  },
  mounted() {
    axios
      .get("/api/posts")
      .then((response) => {
        console.log(response.data.data);
        const posts = response.data.data;
        this.posts = posts.slice(0, 4);
      })
      .catch((e) => {
        console.error(e);
      });
  },
  methods: {},
};
</script>
