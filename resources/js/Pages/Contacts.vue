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
              <h1 class="display-4">Contact Me</h1>
              <p class="lead">
                This is a simple hero unit, a simple jumbotron-style component
                for calling extra attention to featured content or information.
              </p>
            </div>
          </div>

          <hr class="my-4" />
          <p>
            It uses utility classes for typography and spacing to space content
            out within the larger container.
          </p>
          <p class="lead">
            <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }"
              >Read my blog</router-link
            >
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="content w-50">
        <vue-form method="POST" action="/contact-form">
          <!--           <input :value="csrfToken" name="_token">

          <input
            v-if="['GET', 'POST'].indexOf(method.toUpperCase()) === -1"
            :value="method"
            name="_method"> -->

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text h-100" id="basic-addon1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-person-fill "
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                  />
                </svg>
              </span>
            </div>
            <input
              type="text"
              class="form-control"
              placeholder="Type your full name"
              name="full_name"
              id="full_name"
              aria-label="Username"
              aria-describedby="basic-addon1"
            />
          </div>

          <div class="input-group mb-3">
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              placeholder="Type here you email"
              aria-label="Recipient's username"
              aria-describedby="basic-addon2"
            />
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2"
                >@example.com</span
              >
            </div>
          </div>

          <div class="form-floating">
            <textarea
              class="form-control"
              name="message"
              id="floatingTextarea2"
              style="height: 100px"
            ></textarea>
            <label for="floatingTextarea2">Comments</label>
          </div>

          <button type="submit" class="btn btn-primary my-3">SEND</button>
        </vue-form>
      </div>
    </div>
  </div>
</template>

<script>
import VueForm from "../components/VueForm.vue";
export default {
  name: "Contacts",
  components: { VueForm },
};
</script>


<style scoped lang="scss">
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