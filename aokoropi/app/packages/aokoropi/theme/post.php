<@ snippets/header.php @>

<main class="page active" id="news-page">
  <section class="section">

    <article class="post-single">

      <div class="section-header post-header">
        <span class="section-tag">Νέα & Ανακοινώσεις</span>

        <@ if @{ date } @>
          <div class="post-date">@{ date }</div>
        <@ end @>

        <h2>@{ title }</h2>
        <div class="gold-line"></div>

        <@ if @{ textTeaser } @>
          <p class="section-lead">@{ textTeaser }</p>
        <@ end @>
      </div>

      <@ if @{ imageTeaser } @>
        <div class="post-hero-image">
          <img src="@{ imageTeaser }" alt="@{ title }">
        </div>
      <@ end @>

      <div class="post-content">
        @{ +main }
      </div>

      <div class="post-back">
        <a href="/news" class="btn-gold">Πίσω στα Νέα</a>
      </div>

    </article>

  </section>
</main>

<@ snippets/footer.php @>