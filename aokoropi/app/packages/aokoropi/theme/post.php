<@ snippets/header.php @>

<main class="page active">
  <section class="section">
    <div class="section-header">
      <span class="section-tag">Νέα</span>
      <h2>@{ title }</h2>
      <div class="gold-line"></div>
      <p class="section-lead">@{ date }</p>
    </div>

    <@ if @{ imageTeaser } @>
      <img
        src="@{ imageTeaser }"
        alt="@{ title | stripTags }"
        style="width:100%;max-height:420px;object-fit:cover;border-radius:12px;margin-bottom:2rem;"
      >
    <@ end @>

    <article class="post-content">
      @{ +main }
    </article>

    <div style="margin-top:3rem;">
      <a class="btn-gold" href="/news">Πίσω στα νέα</a>
    </div>
  </section>
</main>

<@ snippets/footer.php @>
