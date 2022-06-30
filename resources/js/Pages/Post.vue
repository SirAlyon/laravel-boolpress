<template>
<div>
    <div class="title">
        <h1>{{ post.title }}</h1>
    </div>
</div>
</template>


<script>
export default {
  name: "Post",
  mounted() {
    console.log(this.$route.params.slug);
    this.getPost(this.$route.params.slug)
  },
  data(){
    return {
        post: ''
    }
  },
  methods: {
    getPost(slug) {
    
      axios
        .get("/api/post/" + slug)
        .then((response) => {
          console.log(response);
          this.post = response.data.data;
        })
        .catch((e) => {
          console.error(e);
        });
    },
  },
};
</script>
