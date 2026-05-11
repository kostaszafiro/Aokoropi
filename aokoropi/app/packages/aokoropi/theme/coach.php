<@ snippets/header.php @>

<main class="page active" id="coaches-page">
  <section class="section">

    <div class="section-header">
      <span class="section-tag">Προπονητής</span>
      <h2>@{ title }</h2>
      <div class="gold-line"></div>

      <@ if @{ coachRole } @>
        <p class="section-lead">@{ coachRole }</p>
      <@ end @>
    </div>

    <article style="
      background: var(--white);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 16px rgba(10, 36, 99, 0.07);
      max-width: 760px;
      margin: 0 auto;
    ">

      <div style="
        width: 100%;
        height: 460px;
        background: var(--lightgray);
        border-bottom: 3px solid var(--gold);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      ">
        <@ if @{ imageTeaser } @>
          <img
            src="@{ imageTeaser }"
            alt="@{ title }"
            style="
              width: 100%;
              height: 100%;
              object-fit: cover;
              display: block;
            "
          >
        <@ else @>
          <div class="coach-photo-placeholder">ΠΡ</div>
        <@ end @>
      </div>

      <div style="
        padding: 2rem;
        text-align: center;
      ">

        <h1 style="
          font-family: 'Oswald', sans-serif;
          font-size: 2.2rem;
          font-weight: 700;
          color: var(--navy);
          text-transform: uppercase;
          letter-spacing: 1px;
          margin-bottom: 0.5rem;
        ">
          @{ title }
        </h1>

        <@ if @{ coachRole } @>
          <div style="
            font-family: 'Oswald', sans-serif;
            font-size: 13px;
            font-weight: 600;
            color: var(--gold);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 1.2rem;
          ">
            @{ coachRole }
          </div>
        <@ end @>

        <@ if @{ textTeaser } @>
          <p style="
            color: var(--gray);
            font-size: 0.97rem;
            line-height: 1.8;
            max-width: 560px;
            margin: 0 auto 1.5rem;
          ">
            @{ textTeaser }
          </p>
        <@ end @>

        <div style="margin-top: 2rem;">
          <a href="/coaches" class="btn-gold">Πίσω στους Προπονητές</a>
        </div>

      </div>

    </article>

  </section>
</main>

<@ snippets/footer.php @>