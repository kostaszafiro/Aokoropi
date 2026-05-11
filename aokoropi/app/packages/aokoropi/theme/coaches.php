<@ snippets/header.php @>

<main class="page active" id="coaches-page">
  <section class="section">

    <div class="section-header">
      <span class="section-tag">Προπονητές</span>
      <h2>@{ title }</h2>
      <div class="gold-line"></div>

      <@ if @{ textTeaser } @>
        <p class="section-lead">@{ textTeaser }</p>
      <@ end @>
    </div>

    <div class="coaches-grid">

      <@ newPagelist {
        type: 'children',
        context: @{ url },
        sort: 'date desc'
      } @>

      <@ foreach in pagelist @>

        <article class="coach-card">
          <a href="@{ url }">

            <div class="coach-photo">
              <@ if @{ imageTeaser } @>
                <img src="@{ imageTeaser }" alt="@{ title }">
              <@ else @>
                <div class="coach-photo-placeholder">ΠΡ</div>
              <@ end @>
            </div>

            <div class="coach-info">
              <div class="coach-name">@{ title }</div>

              <@ if @{ coachRole } @>
                <div class="coach-role">@{ coachRole }</div>
              <@ else @>
                <div class="coach-role">Προπονητής</div>
              <@ end @>

              <@ if @{ textTeaser } @>
                <div class="coach-bio">@{ textTeaser }</div>
              <@ end @>
            </div>

          </a>
        </article>

      <@ else @>

        <div class="coach-card coach-empty-card">
          <div class="coach-photo">
            <div class="coach-photo-placeholder">ΠΡ</div>
          </div>

          <div class="coach-info">
            <div class="coach-name">Δεν υπάρχουν ακόμα προπονητές</div>
            <div class="coach-role">Προπονητές</div>
            <div class="coach-bio">
              Δημιούργησε νέο page κάτω από τη σελίδα Προπονητές.
            </div>
          </div>
        </div>

      <@ end @>

      <div class="coach-card coach-add-card">
        <a href="/dashboard">
          <div class="coach-photo">
            <div class="coach-photo-placeholder">+</div>
          </div>

          <div class="coach-info">
            <div class="coach-name">Προσθήκη νέου προπονητή</div>
            <div class="coach-role">Add Page</div>
            <div class="coach-bio">
              Άνοιξε το Dashboard και δημιούργησε νέο page κάτω από τη σελίδα Προπονητές.
            </div>
          </div>
        </a>
      </div>

    </div>

  </section>
</main>

<@ snippets/footer.php @>