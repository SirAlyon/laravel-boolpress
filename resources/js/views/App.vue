<template>
  <section>
    <!-- use router-link component for navigation. -->
    <!-- specify the link by passing the `to` prop. -->
    <!-- `<router-link>` will be rendered as an `<a>` tag by default -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active" v-for="(item, index) in menu_items" :key="index">
             <router-link class="nav-link" :to="{name: item.route_name}">{{item.route_text}}</router-link>
            
          </li>

        </ul>
      </div>
    </nav>
    <router-view></router-view>
  </section>

  
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      menu_items: [
        {
          route_name: "home",
          route_text: "Home",
        },
        {
          route_name: "about",
          route_text: "About",
        },
        {
          route_name: "posts",
          route_text: "Posts",
        },
      ],
    };
  },
};
</script>

