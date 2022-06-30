<template>
  <div class="page py-5">
    <div class="container">
      <div class="post">
        <h1 class="display-5">{{ post.title }}</h1>
        <img :src="'/storage/' + post.cover_image" width="500" alt="" />
        <p>{{ post.content }}</p>
      </div>
    </div>
    <div class="infos">
      <div class="category" v-if="post.category">
        <strong>Category:</strong>
        <span>{{ post.category.name }}</span>
      </div>

      <div class="tags">
        <strong>Tags:</strong>
        <span v-for="(tag, index) in post.tags" :key="index">
          <a href="">#{{ formatTags(index, tag, post.tags) }} </a>
        </span>
      </div>
    </div>
  </div>
</template>


<script>
import axios from "axios";
export default {
  name: "Post",
  mounted() {
    console.log(this.$route.params.slug);
    this.getPost();
  },
  data() {
    return {
      post: "",
      loading: true,
    };
  },
  methods: {
    getPost() {
      axios
        .get("/api/posts/" + this.$route.params.slug)
        .then((response) => {
          console.log(response);
          this.post = response.data;
          this.loading = false;
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
  },
};
</script>

<style scoped lang="scss">
.post {
  display: flex;
  flex-flow: column wrap;
  justify-content: center;
  align-items: center;
  position: relative;
}

.infos {
  position: absolute;
  top: 5rem;
  left: 5rem;
}
</style>
