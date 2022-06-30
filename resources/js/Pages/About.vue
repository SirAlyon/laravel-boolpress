<template>
  <div class="page">
    <div class="bg-dark text-white py-2">
      <div class="container">
        <div class="jumbotron">
          <div class="d-flex">
            <div class="avatar">
              <img src="https://picsum.photos/200/300" width="70" alt="" />
            </div>
            <h1 class="display-4">About Me</h1>
          </div>
          <p class="lead">
            This is a simple hero unit, a simple jumbotron-style component for
            calling extra attention to featured content or information.
          </p>
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
      <div class="content py-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
        maxime voluptatibus doloremque ea quibusdam dolores, excepturi quia vero
        tempore, nesciunt consequuntur amet nisi porro alias. Rem facere
        suscipit ex? Ratione ducimus amet ad corporis sed facilis beatae error
        veritatis, accusamus impedit sunt non fuga est in id praesentium ipsum
        eos quo vitae cumque quaerat! Repellendus aperiam quas perferendis
        magnam ipsam fuga aut, molestias a deserunt fugiat suscipit animi
        eveniet voluptate incidunt ullam. Optio, id, magnam ullam minima ad
        perspiciatis tempora fugiat laboriosam voluptatibus nulla,
        exercitationem minus sunt nobis incidunt in nesciunt? Exercitationem
        iusto commodi sint sit dolor. Optio tempora, tempore animi hic
        reprehenderit illum veritatis, omnis aliquam distinctio accusantium
        perferendis, autem nam tenetur quis! Quae exercitationem sed, dolore
        mollitia veritatis omnis aliquam cupiditate, error quis placeat
        aspernatur dolores officiis neque quasi itaque laboriosam soluta nisi
        dolorum sapiente blanditiis molestiae. Iusto aut ex ipsam ut est quo
        necessitatibus recusandae exercitationem atque neque quae consectetur
        deleniti fuga vero quia amet eos, maiores doloremque dolor consequatur
        natus dicta alias nostrum earum? Fuga dolorum architecto repellat!
        Nihil, laudantium ipsam culpa debitis minima laboriosam quasi possimus
        tenetur tempore ex molestiae magni cupiditate officiis praesentium
        cumque. Minima commodi, fugiat quasi placeat consequatur facilis magni
        soluta architecto?
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
.avatar img {
  border-radius: 50%;
  aspect-ratio: 1 / 1;
}
</style>