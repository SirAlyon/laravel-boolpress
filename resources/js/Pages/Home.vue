<template>
  <div class="page">
    <div class="bg-light p-5">
      <div class="container">
        <h1 class="display-3">BoolPress Blog</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum,
          aperiam. Saepe quasi deleniti sint magnam incidunt perferendis
          consequatur, cum eius rem, itaque vitae dignissimos qui quia iure
          aliquid minima ullam!
        </p>
      </div>
    </div>

    <hr />

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
        <div class="go_to_blog">
          <router-link :to="{ name: 'posts' }" class="btn btn-primary text-center"
            >Go To My Blog!</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: "Home",
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
