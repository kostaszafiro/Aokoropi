<@ snippets/header.php @>

<main class="page active" id="programs-page">
  <section class="section">

    <article class="program-simple-page">

      <div class="section-header">
        <span class="section-tag">Τμήμα Ακαδημίας</span>

        <h2>@{ title }</h2>

        <div class="gold-line"></div>

        <@ if @{ textTeaser } @>
          <p class="section-lead">@{ textTeaser }</p>
        <@ end @>
      </div>

      <div class="program-simple-card">

        <@ if @{ programAge } @>
          <div class="program-simple-age">@{ programAge }</div>
        <@ end @>

        <h1 class="program-simple-title">@{ title }</h1>

        <@ if @{ programCode } @>
          <div class="program-simple-code">@{ programCode }</div>
        <@ end @>

        <@ if @{ programGoal } @>
          <div class="program-simple-section">
            <span>Στόχος</span>
            <p>@{ programGoal }</p>
          </div>
        <@ end @>

        <@ if @{ programFocus } @>
          <div class="program-simple-section">
            <span>Έμφαση</span>
            <p>@{ programFocus }</p>
          </div>
        <@ end @>

        <@ if @{ +main } @>
          <div class="program-simple-content">
            @{ +main }
          </div>
        <@ end @>

        <div class="program-simple-back">
          <a href="/programs" class="btn-gold">Πίσω στα Τμήματα</a>
        </div>

      </div>

    </article>

  </section>
</main>

<@ snippets/footer.php @>