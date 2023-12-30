const toggle = document.getElementById('menu-toggle');
toggle.addEventListener('click', () => {
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
})
