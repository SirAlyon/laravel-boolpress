<template>
  <section>
    <!-- use router-link component for navigation. -->
    <!-- specify the link by passing the `to` prop. -->
    <!-- `<router-link>` will be rendered as an `<a>` tag by default -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li
              class="nav-item active p-2"
              v-for="(item, index) in menu_items"
              :key="index"
            >
              <router-link class="nav-link" :to="{ name: item.route_name }">{{
                item.route_text
              }}</router-link>
            </li>
          </ul>
        </div>
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

<style scoped lang="scss">
.nav-item:hover {
  background-color: rgb(119, 119, 119);
  color: black;
}
</style>