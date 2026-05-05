window.addEventListener('scroll', function() {
  var nav = document.getElementById('mainNav');
  if (!nav) return;

  if (window.scrollY > 20) {
    nav.classList.add('scrolled');
  } else {
    nav.classList.remove('scrolled');
  }
});

function toggleMenu() {
  var menu = document.getElementById('mobileMenu');
  if (menu) menu.classList.toggle('open');
}

document.addEventListener('click', function(e) {
  var menu = document.getElementById('mobileMenu');
  var hamburger = document.getElementById('hamburger');

  if (!menu || !hamburger) return;

  if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
    menu.classList.remove('open');
  }
});
