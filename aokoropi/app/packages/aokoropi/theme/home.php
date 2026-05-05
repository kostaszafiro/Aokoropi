<@ snippets/header.php @>

<main class="page active" id="home-page">
  <section class="hero">
    <div class="hero-pattern"></div>
    <div class="hero-glow"></div>

    <div class="hero-content">
      <div class="hero-logos">
        <img class="hero-logo-main" src="/packages/aokoropi/theme/img/logo.png" alt="ΑΟ Κορωπί">
        <div class="hero-divider"></div>
        <img class="hero-logo-kids" src="/packages/aokoropi/theme/img/kids-logo.png" alt="AO Koropi Kids">
      </div>

      <div class="hero-badge">Football Academy</div>
      <h1>ΑΟ <span class="gold">ΚΟΡΩΠΙ</span></h1>
      <div class="hero-tagline">Academy · Development · Character</div>

      <div class="hero-stats">
        <div class="hero-stat">
          <span class="stat-num">1903</span>
          <span class="stat-label">Est.</span>
        </div>
        <div class="hero-stat">
          <span class="stat-num">6+</span>
          <span class="stat-label">Τμήματα</span>
        </div>
        <div class="hero-stat">
          <span class="stat-num">100%</span>
          <span class="stat-label">Πάθος</span>
        </div>
      </div>

      <div class="hero-btns">
        <a class="btn-gold" href="/programs">Δες τα τμήματα</a>
        <a class="btn-outline-white" href="/contact">Επικοινωνία</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="section-header">
      <span class="section-tag">Καλώς ήρθατε</span>
      <h2>@{ title }</h2>
      <div class="gold-line"></div>
      <p class="section-lead">@{ textTeaser }</p>
    </div>

    @{ +main }
  </section>

  <section class="section">
    <div class="section-header">
      <span class="section-tag">Τελευταία νέα</span>
      <h2>Νέα της ακαδημίας</h2>
      <div class="gold-line"></div>
      <p class="section-lead">Ανακοινώσεις, ενημερώσεις και νέα από την ακαδημία του ΑΟ Κορωπί.</p>
    </div>

    <div class="news-sidebar">
      <@ newPagelist {
        type: 'children',
        context: '/news',
        sort: 'date desc',
        limit: 5
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
  </section>
</main>

<@ snippets/footer.php @>
