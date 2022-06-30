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
              <h1 class="display-4">About Me</h1>
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
    <div class="container content">
      <div class="row">
        <div class="col-3 my-4">
          <img class="img-fluid" src="https://picsum.photos/200/300" alt="" />
        </div>
        <div class="col-9 px-3 my-4 d-flex align-items-center">
          <span>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Praesentium officia voluptatum eius quo, quaerat dolor animi cumque
            aut tenetur iusto in excepturi facere perferendis ipsum quia itaque
            nulla impedit at. Harum maiores quis id, dignissimos tenetur
            voluptate ratione praesentium consectetur ea sequi sunt numquam
            nihil facere aperiam sit mollitia suscipit quaerat porro eligendi
            expedita possimus excepturi quo at. Corrupti enim, at exercitationem
            doloremque placeat perspiciatis maiores obcaecati eius. Nulla, quia.
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-9 px-3 my-4 d-flex align-items-center">
          <span>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Praesentium officia voluptatum eius quo, quaerat dolor animi cumque
            aut tenetur iusto in excepturi facere perferendis ipsum quia itaque
            nulla impedit at. Harum maiores quis id, dignissimos tenetur
            voluptate ratione praesentium consectetur ea sequi sunt numquam
            nihil facere aperiam sit mollitia suscipit quaerat porro eligendi
            expedita possimus excepturi quo at. Corrupti enim, at exercitationem
            doloremque placeat perspiciatis maiores obcaecati eius. Nulla, quia.
          </span>
        </div>
        <div class="col-3 my-4">
          <img class="img-fluid" src="https://picsum.photos/200/300" alt="" />
        </div>
        
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "About",
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