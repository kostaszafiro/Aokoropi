<@ snippets/header.php @>

<main class="page active" id="programs-page">
  <section class="section">

    <div class="section-header">
      <span class="section-tag">Τμήματα Ακαδημίας</span>
      <h2>@{ title }</h2>
      <div class="gold-line"></div>

      <@ if @{ textTeaser } @>
        <p class="section-lead">@{ textTeaser }</p>
      <@ end @>
    </div>

    <div class="programs-intro">
      <p>
        Η ακαδημία μας υποδέχεται αθλητές με εξειδικευμένα προγράμματα για κάθε αναπτυξιακό στάδιο.
      </p>
    </div>

    <div class="programs-grid">

      <@ newPagelist {
        type: 'children',
        context: @{ url },
        sort: 'programOrder asc'
      } @>

      <@ foreach in pagelist @>

        <article class="prog-card" data-age="@{ programCode }">
          <a class="program-card-link" href="@{ url }">

            <@ if @{ programAge } @>
              <div class="prog-age">@{ programAge }</div>
            <@ end @>

            <h3 class="prog-title">
              @{ title }
            </h3>

            <@ if @{ programCode } @>
              <div class="prog-code">@{ programCode }</div>
            <@ end @>

            <div class="prog-desc">

              <@ if @{ programGoal } @>
                <div class="prog-detail">
                  <span class="prog-detail-label">Στόχος:</span>
                  @{ programGoal }
                </div>
              <@ end @>

              <@ if @{ programFocus } @>
                <div class="prog-detail">
                  <span class="prog-detail-label">Έμφαση:</span>
                  @{ programFocus }
                </div>
              <@ end @>

              <@ if @{ textTeaser } @>
                <div class="prog-detail">
                  @{ textTeaser }
                </div>
              <@ end @>

            </div>

            <@ if @{ programTags } @>
              <div class="prog-tags">
                @{ programTags }
              </div>
            <@ end @>

          </a>
        </article>

      <@ else @>

        <article class="prog-card">
          <div class="prog-age">-</div>
          <h3 class="prog-title">Δεν υπάρχουν ακόμα τμήματα</h3>
          <div class="prog-desc">
            Δημιούργησε νέο page κάτω από τη σελίδα Τμήματα.
          </div>
        </article>

      <@ end @>

      <article class="prog-card program-add-card">
        <a class="program-card-link" href="/dashboard">
          <div class="prog-age">+</div>
          <h3 class="prog-title">Προσθήκη νέου τμήματος</h3>
          <div class="prog-code">Add Page</div>
          <div class="prog-desc">
            Άνοιξε το Dashboard και δημιούργησε νέο page κάτω από τη σελίδα Τμήματα.
          </div>
        </a>
      </article>

    </div>

    <div class="academy-philosophy">
      <div class="philosophy-icon">🔷</div>
      <h3>Φιλοσοφία Ακαδημίας</h3>
      <p>
        Η Ακαδημία του ΑΟ Κορωπίου 1903 λειτουργεί με στόχο τη συνολική ανάπτυξη των παιδιών,
        τόσο ως ποδοσφαιριστές όσο και ως προσωπικότητες.
      </p>
      <div class="philosophy-quote">«Χτίζουμε ανθρώπους, όχι μόνο παίκτες»</div>
    </div>

  </section>
</main>

<@ snippets/footer.php @>