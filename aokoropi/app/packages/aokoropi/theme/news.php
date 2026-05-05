<@ snippets/header.php @>

<main class="page active" id="news-page">
  <section class="section">
    <div class="section-header">
      <span class="section-tag">Ανακοινώσεις</span>
      <h2>@{ title | def('Νέα') }</h2>
      <div class="gold-line"></div>
      <p class="section-lead">@{ textTeaser }</p>
    </div>

    <div class="prog-tags" style="margin-bottom:2rem;">
      <a class="prog-tag" href="/news">Όλα</a>

      <@ newPagelist {
        type: 'children',
        context: '/news',
        sort: 'date desc'
      } @>

      <@ foreach in filters @>
        <a class="prog-tag" href="?<@ queryStringMerge { filter: @{ :filter } } @>">
          @{ :filter }
        </a>
      <@ end @>
    </div>

    <div class="news-sidebar">
      <@ newPagelist {
        type: 'children',
        context: '/news',
        sort: 'date desc',
        filter: @{ ?filter },
        limit: 12,
        page: @{ ?page | def(1) }
      } @>

      <@ foreach in pagelist @>
        <article class="news-card">
          <a href="@{ url }">
            <div class="news-date">@{ date }</div>
            <h4>@{ title }</h4>
            <p>@{ textTeaser }</p>
          </a>
        </article>
      <@ else @>
        <div class="news-placeholder">Δεν υπάρχουν ακόμα νέα.</div>
      <@ end @>
    </div>

    <@ if @{ :paginationCount } > 1 @>
      <div class="prog-tags" style="margin-top:2rem;">
        <@ for 1 to @{ :paginationCount } @>
          <a class="prog-tag" href="?<@ queryStringMerge { page: @{ :i } } @>">@{ :i }</a>
        <@ end @>
      </div>
    <@ end @>
  </section>
</main>

<@ snippets/footer.php @>
