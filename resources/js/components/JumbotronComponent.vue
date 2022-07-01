<template>
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
</template>

<script>

export default({
    name: 'JumbotronComponent'
})
</script>



<style lang="scss" scoped>
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