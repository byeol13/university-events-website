document.addEventListener('DOMContentLoaded', function() {
  let currentUrl = window.location.href;

  let links = document.querySelectorAll('.links a');

  for (let i = 0; i < links.length; i++) {
    let link = links[i];
      if (link.href === currentUrl) {
          link.classList.add('current-link');
      }
  }
});