function toggleMenu() {
  var menu = document.getElementById("mobileMenu");

  if (menu) {
    menu.classList.toggle("open");
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var nav = document.getElementById("mainNav");
  var menu = document.getElementById("mobileMenu");
  var hamburger = document.getElementById("hamburger");

  function detectAdminMode() {
    if (
      document.querySelector("am-inpage-dock") ||
      document.querySelector("am-inpage-edit")
    ) {
      document.body.classList.add("is-admin");
    }
  }

  detectAdminMode();
  setTimeout(detectAdminMode, 500);
  setTimeout(detectAdminMode, 1500);

  window.addEventListener("scroll", function () {
    if (!nav) {
      return;
    }

    if (window.scrollY > 20) {
      nav.classList.add("scrolled");
    } else {
      nav.classList.remove("scrolled");
    }
  });

  document.addEventListener("click", function (event) {
    if (!menu || !hamburger) {
      return;
    }

    if (!menu.contains(event.target) && !hamburger.contains(event.target)) {
      menu.classList.remove("open");
    }
  });
});
