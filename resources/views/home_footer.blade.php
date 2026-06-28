
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-logo">
          <i class="fas fa-comment-dots"></i>
          <span>Kalmni Masri</span>
        </div>
        <div style="display: flex; flex-wrap: wrap; gap: 18px;">
          <span style="opacity: 0.8;"><i class="fas fa-envelope"></i> hello@kalmnimasri.com</span>
          <span style="opacity: 0.8;"><i class="fas fa-phone-alt"></i> +20 100 123 4567</span>
        </div>
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
        </div>
        <div class="footer-copy">
          &copy; 2026 Kalmni Masri · live 1-on-1 Egyptian colloquial for English speakers
        </div>
      </div>
    </div>
  </footer>

  <!-- JS for interactivity -->
  <script>
    (function() {
      console.log('🗣️ Kalmni Masri · 1-on-1 live Egyptian Arabic');

      // dynamic year
      const footerCopy = document.querySelector('.footer-copy');
      if (footerCopy) {
        const year = new Date().getFullYear();
        footerCopy.textContent = footerCopy.textContent.replace('2026', year);
      }

      // interactive demo on buttons
      const allBtns = document.querySelectorAll('.btn-primary, .btn-secondary, .btn-outline, .btn-free-lecture');
      allBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.preventDefault();
          this.style.transform = 'scale(0.96)';
          setTimeout(() => { this.style.transform = ''; }, 150);
          
          let message = '🎯 Kalmni Masri · 1-on-1 live lecture (demo)';
          if (this.classList.contains('btn-login')) {
            message = '🔐 Login page (demo)';
          } else if (this.classList.contains('btn-register')) {
            message = '📝 Register / Sign up (demo)';
          } else if (this.classList.contains('btn-free-lecture')) {
            message = '🎓 Free lecture preview (demo) · Login or register to watch';
          }
          alert(message);
        });
      });

      // nav links smooth scroll + demo
      document.querySelectorAll('.nav-links a').forEach(link => {
          link.addEventListener('click', function(e) {
              const targetId = this.getAttribute('href');

              // Only handle page sections
              if (targetId.startsWith('#')) {
                  e.preventDefault();

                  const target = document.querySelector(targetId);
                  if (target) {
                      target.scrollIntoView({
                          behavior: 'smooth',
                          block: 'start'
                      });
                  }
              }

              // Otherwise, let the browser follow the link normally
          });
      });

    })();
  </script>

</body>
</html>