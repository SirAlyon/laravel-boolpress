<template>
  <div class="page">
    <div class="bg-secondary text-white py-2">
      <div class="container">
        <div class="jumbotron">
          <div class="d-flex">
            <div class="avatar">
              <img src="https://picsum.photos/200/300" alt="" />
            </div>
            <div class="title">
              <h1 class="display-4">Oops! Page not found, 404</h1>
              <p class="lead">Sorry the page you requested is not found</p>
            </div>
          </div>

          <hr class="my-4" />
        </div>
      </div>
    </div>
    <div class="container content">
      The page you requested was not found, try to visit these pages:
      <ul class="list-unstyled">
        <li>
          <router-link :to="{ name: 'home' }" class="btn btn-primary my-2"
            >HomePage</router-link
          >
        </li>
        <li>
          <router-link :to="{ name: 'about' }" class="btn btn-primary my-2"
            >About</router-link
          >
        </li>
        <li>
          <router-link :to="{ name: 'posts' }" class="btn btn-primary my-2"
            >Posts</router-link
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "NotFound",
};
</script>


<style scoped lang="scss">
main{
    min-height: 100vh;
}
.page {
  .jumbotron {
    padding: 1.5rem 0;
  }
  .content {
    img {
      border-radius: 50%;
      aspect-ratio: 1 / 1;
      width: 200px;
    }
  }
}

.avatar {
  display: flex;
  align-items: center;
  img {
    border-radius: 50%;
    aspect-ratio: 1 / 1;
    width: 90px;
    margin-right: 1.5rem;
  }
}
</style>