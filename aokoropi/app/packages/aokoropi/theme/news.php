<@ snippets/header.php @>

<main class="page active" id="news-page">
  <section class="section">

    <div class="section-header">
      <span class="section-tag">Νέα & Ανακοινώσεις</span>
      <h2>@{ title }</h2>
      <div class="gold-line"></div>

      <@ if @{ textTeaser } @>
        <p class="section-lead">@{ textTeaser }</p>
      <@ end @>
    </div>

    <div class="news-grid-full">

      <@ newPagelist {
        type: 'children',
        context: @{ url },
        sort: 'date desc'
      } @>

      <@ foreach in pagelist @>

        <article class="news-card">
          <a href="@{ url }">

            <@ if @{ imageTeaser } @>
              <div class="news-card-img">
                <img src="@{ imageTeaser }" alt="@{ title }">
              </div>
            <@ else @>
              <div class="news-card-img news-card-img-placeholder">
                <span>📰</span>
              </div>
            <@ end @>

            <div class="news-card-body">

              <@ if @{ date } @>
                <div class="news-date">@{ date }</div>
              <@ end @>

              <h3>@{ title }</h3>

              <@ if @{ textTeaser } @>
                <p>@{ textTeaser }</p>
              <@ end @>

            </div>

          </a>
        </article>

      <@ else @>

        <div class="news-placeholder">
          Δεν υπάρχουν ακόμα νέα.
        </div>

      <@ end @>

    </div>

  </section>
</main>

<@ snippets/footer.php @>