<template>
  <div class="page">
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-6"></div>
          <div class="col-6">
            <div class="d-flex text-end">
              <div class="title text-white">
                <h1 class="display-4 fw-bold">BoolPress Blog</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid px-3 mt-4">
      <div class="row">
        <div class="col-10">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <div class="col" v-for="post in postsResponse.data" :key="post.id">
              <div class="product card">
                <img :src="'storage/' + post.cover_image" :alt="post.title" />
                <div class="card-body">
                  <h3>{{ post.title }}</h3>
                  <p>{{ formatPostContent(post.content) }}</p>
                  <p>
                    <router-link class="btn btn-primary" :to="{name: 'post', params: {slug: post.slug}}">Read More</router-link>
                  </p>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col">
                      <div class="author" v-if="post.user">
                        <h4>Autor</h4>
                        {{ post.user.name }}
                      </div>
                    </div>
                  </div>
                  <span v-if="post.category">
                    <strong>Category:</strong>
                    {{ post.category.name }}
                  </span>

                  <div class="post_tags" v-if="post.tags.length > 0">
                    <strong>Tags:</strong>
                    <span v-for="(tag, index) in post.tags" :key="index">
                      {{ formatTags(index, tag, post.tags) }}</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="col-12">
            <div class="categories">
              <strong class="fs-4">Categories:</strong>
              <ul class="list-unstyled">
                <li v-for="category in categories" :key="category.id">
                  - {{ category.name }}
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="tags">
              <strong class="fs-4">Tags:</strong>
              <ul class="list-unstyled">
                <li v-for="tag in tags" :key="tag.id"># {{ tag.name }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav aria-label="Page navigation example ">
      <ul class="pagination justify-content-center mt-5">
        <li class="page-item" v-if="postsResponse.current_page > 1">
          <a
            class="page-link"
            href="#"
            @click.prevent="getAllPost(postsResponse.current_page - 1)"
            >Previous</a
          >
        </li>
        <li
          :class="{
            'page-item': true,
            active: page == postsResponse.current_page,
          }"
          v-for="(page, index) in postsResponse.last_page"
          :key="index"
        >
          <a class="page-link" href="#" @click.prevent="getAllPost(page)">{{
            page
          }}</a>
        </li>
        <li
          class="page-item"
          v-if="postsResponse.current_page < postsResponse.last_page"
        >
          <a
            class="page-link"
            href="#"
            @click.prevent="getAllPost(postsResponse.current_page + 1)"
            >Next</a
          >
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Posts",
  components: {},
  mounted() {
    console.log("Mounted Successfully");
    this.getAllPost(1);
    this.getAllCategories();
    this.getAllTags();
  },
  methods: {
    getAllPost(postPage) {
      console.log(postPage);
      axios
        .get("/api/posts", {
          params: {
            page: postPage,
          },
        })
        .then((response) => {
          console.log(response);
          this.posts = response.data.data;
          this.postsResponse = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
    getAllCategories() {
      axios
        .get("/api/categories")
        .then((response) => {
          console.log(response);
          this.categories = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
    getAllTags() {
      axios
        .get("/api/tags")
        .then((response) => {
          console.log(response);
          this.tags = response.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
    formatTags(index, tag, tags) {
      //console.log(tags.length, index);
      if (index == tags.length - 1) {
        return tag.name + ".";
      } else {
        return tag.name + ",";
      }
    },
    formatPostContent(content) {
      if (content && content.length > 200) {
        return content.slice(0, 200) + "...";
      }
    },
  },
  data() {
    return {
      posts: "",
      postsResponse: "",
      categories: "",
      tags: "",
    };
  },
};
</script>

<style scoped lang="scss">
.categories,
.tags {
  padding: 1rem;
  margin-top: 1rem;
  background-color: rgba(211, 211, 211, 0.621);
  border-radius: 0.5rem;
}

.jumbotron {
  background-image: url("https://t4.ftcdn.net/jpg/02/08/93/47/360_F_208934723_tv3JlZKwlOhF1QiQdBruyaetwLRxTQCD.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  padding: 2rem 0;
  min-height: 400px;
  h1 {
    text-align: end;
  }
}
</style>
