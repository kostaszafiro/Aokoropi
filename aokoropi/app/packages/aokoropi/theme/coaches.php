<@ snippets/header.php @>
<main class="page active" id="coaches-page">
  <section class="section">
    <div class="section-header">
      <span class="section-tag">Προπονητές</span>
      <h2>@{ title }</h2>
      <div class="gold-line"></div>
      <@ if @{ textTeaser } @><p class="section-lead">@{ textTeaser }</p><@ end @>
    </div>
    @{ +main }
  </section>
</main>
<@ snippets/footer.php @>