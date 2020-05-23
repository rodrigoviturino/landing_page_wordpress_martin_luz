<?php get_header(); ?>


<main class="home">

  <section class="introduction">
    <div class="container">
      <?php get_template_part( 'template_parts/home', 'introduction' ); ?>
    </div>
  </section>

  <section class="control-spending">
    <div class="container">
      <?php get_template_part( 'template_parts/home', 'control-spending' ); ?>
    </div>
  </section>

  <section class="organize-refunds">
    <div class="container">
        <?php get_template_part( 'template_parts/home', 'organize-refunds' ); ?>
    </div>
  </section>

  <section class="more-services">
    <div class="container">
      <div class="more-services-block-title">
        <h2>
          A plataforma que ajuda a <strong>reduzir os gastos</strong> do dia a
          dia
        </h2>
        <p>
          Simplifique a gestão das despesas, evitando a perda de tempo com
          comprovantes e planilhas, reduzindo custos e aumentando os
          resultados da sua empresa.
        </p>
      </div>
        <?php get_template_part( 'template_parts/home', 'more-services' ); ?>
    </div>
  </section>

  <section class="customers">
    <div class="container">
        <?php get_template_part( 'template_parts/home', 'customers' ); ?>
    </div>
  </section>

  <section class="payment">
    <div class="container">
      <div class="payment__block-title">
        <h2>Compare e decida agora mesmo</h2>
        <p>
          Substitua o uso do dinheiro em espécie pelo BPP Corp e ganhe
          segurança e praticidade, evitando roubos e perdas, tendo uma
          plataforma única para gerir suas despesas.
        </p>
      </div>
        <?php get_template_part( 'template_parts/home', 'payment' ); ?>
    </div>
  </section>

  <section class="cta">
    <div class="container">
        <?php get_template_part( 'template_parts/home', 'cta' ); ?>
      </div>
    </div>
  </section>

  <section class="blog">
    <div class="container">
      <h2 class="blog-title">Últimos posts</h2>
      <div class="row blog__wrapper">
        <?php get_template_part( 'template/page', 'blog' ); ?>
      </div>
    </div>
  </section>

  <section class="feedback">
    <div class="container">
      <?php get_template_part( 'template_parts/home', 'feedback' ); ?>
    </div>
  </section>

</main>


<?php get_footer(); ?>