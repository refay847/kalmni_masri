<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kalmni Masri · Live 1-on-1 Egyptian Arabic</title>
  <!-- Font Awesome 6 (free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
</head>
<body>

  <div class="container">
    <!-- header -->
    <header>
      <nav class="navbar">
        <div class="logo">
          <i class="fas fa-comment-dots"></i>
          <span>Kalmni Masri</span>
        </div>
        <div class="nav-links">
          <a href="#about">About</a>
          <a href="#features">Courses</a>
          <a href="#skills">Skills</a>
          <!-- <a href="#free-lecture">Free Lecture</a> -->
          <a href="#contact">Contact</a>
          <div class="nav-actions">
            <a href="{{ route('login') }}" class="btn-login"><i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="{{ route('register') }}" class="btn-register" style="color: white;"><i class="fas fa-user-plus"></i> Register</a>
          </div>
        </div>
      </nav>
    </header>

    <!-- hero -->
    <section class="hero">
      <div class="hero-content">
        <div class="hero-badge">
          <i class="fas fa-video"></i> Live 1-on-1 · Egyptian Arabic
        </div>
        <h1>
          Speak like a <span>local</span> in 1 month
        </h1>
        <p>
          <strong>Live, private lectures</strong> — just you and the teacher. 
          One student per session, maximum focus, fastest progress. 
          Start speaking Egyptian colloquial in 30 days.
        </p>
        <div class="hero-cta">
          <span class="btn-primary"><i class="fas fa-play-circle"></i> Start now</span>
          <span class="btn-secondary"><i class="fas fa-graduation-cap"></i> Free lecture</span>
        </div>
      </div>

      <div class="hero-image">
        <div class="hero-card">
          <h3>🇪🇬 1-on-1 live</h3>
          <div class="highlight"><i class="fas fa-user"></i> 1 student · 1 teacher</div>
          <div class="sub">Personalized attention · rapid results</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div style="margin-top: 12px; background: var(--primary-soft); padding: 8px 16px; border-radius: 40px; display: inline-block; color: var(--primary-blue); font-weight: 600;">
            <i class="fas fa-clock"></i> Speak in 1 month
          </div>
        </div>
        <i class="fas fa-mosque"></i>
      </div>
    </section>

    <!-- features -->
    <section class="features" id="features">
      <h2 class="section-title">Why Kalmni Masri works</h2>
      <p class="section-sub">
        Live, private, and built for real conversation — the fastest way to Egyptian Arabic.
      </p>
      <div class="grid-3">
        <div class="feature-card">
          <i class="fas fa-user-graduate"></i>
          <h4>1 student per lecture</h4>
          <p>Full attention, zero distractions. Every minute is yours.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-chalkboard-teacher"></i>
          <h4>Expert teachers</h4>
          <p>Qualified, native-speaking instructors who love teaching.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-rocket"></i>
          <h4>Speak in 1 month</h4>
          <p>Focused curriculum designed for rapid speaking confidence.</p>
        </div>
      </div>
    </section>

    <!-- skills -->
    <section class="skills" id="skills">
      <h2 class="section-title">Skills you'll build</h2>
      <p class="section-sub">
        A complete approach to Egyptian Arabic — every lecture strengthens all six skills.
      </p>
      <div class="grid-5">
        <div class="feature-card">
          <i class="fas fa-pen-nib"></i>
          <h4>Writing</h4>
          <p>Practice Arabic script and everyday written expression.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-headphones"></i>
          <h4>Listening</h4>
          <p>Train your ear on real Egyptian accents and pace.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-microphone"></i>
          <h4>Speaking</h4>
          <p>Build confidence through live, guided conversation.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-book-open"></i>
          <h4>Reading</h4>
          <p>Strengthen comprehension with texts at your level.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-landmark"></i>
          <h4>Culture</h4>
          <p>Understand the customs and context behind the language.</p>
        </div>
      </div>
    </section>

    <!-- free lecture promo -->
    <section class="free-lecture-promo" id="free-lecture">     
      <div style="margin-top: 18px; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <span class="btn-primary" style="background: var(--primary-light);"><i class="fas fa-calendar-plus"></i> Book a trial</span>
        <span class="btn-secondary" style="border-color: var(--primary-blue); color: var(--primary-blue);"><i class="fas fa-info-circle"></i> Learn more</span>
      </div>
      <br>
      <h3>🎓 Try a free lecture first</h3>
      <p>
        <strong>Login or register</strong> to access a complimentary 30-minute live lecture. 
        Experience our 1-on-1 teaching method, meet your instructor, and see how fast you can start speaking — <strong>completely free</strong>, no payment required.
      </p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <span class="btn-free-lecture"><i class="fas fa-play-circle"></i> Watch free lecture</span>
        <span class="btn-secondary" style="border-color: var(--primary-blue); color: var(--primary-blue); background: white;"><i class="fas fa-sign-in-alt"></i> Login to access</span>
      </div>
      <p style="margin-top: 16px; font-size: 0.95rem; opacity: 0.8;">
        <i class="fas fa-lock-open"></i> Free for registered users · 30-minute session
      </p>
    </section>

    <!-- about + contact grid -->
    <div class="info-grid" id="about">
      <!-- about -->
      <div class="info-card">
        <h3><i class="fas fa-info-circle"></i> About Kalmni Masri</h3>
        <p>
          We teach Egyptian colloquial Arabic through <strong>live, one-on-one</strong> lectures. 
          No crowded classrooms — just you and a dedicated teacher. 
          Our method is designed to get you speaking naturally in the shortest time.
        </p>
        <ul>
          <li><i class="fas fa-check-circle"></i> 100% live, interactive sessions</li>
          <li><i class="fas fa-check-circle"></i> Personalised pace and feedback</li>
          <li><i class="fas fa-check-circle"></i> Focus on everyday conversation</li>
          <li><i class="fas fa-check-circle"></i> Start speaking from day one</li>
        </ul>
      </div>

      <!-- contact -->
      <div class="info-card" id="contact">
        <h3><i class="fas fa-headset"></i> Contact Us</h3>
        <p>Have questions? Reach out — we're happy to help.</p>
        <div class="contact-details">
          <div><i class="fas fa-envelope"></i> hello@kalmnimasri.com</div>
          <div><i class="fas fa-phone-alt"></i> +20 100 123 4567</div>
          <div><i class="fas fa-map-marker-alt"></i> Cairo, Egypt (online worldwide)</div>
          <div><i class="fas fa-clock"></i> Mon–Sat · 9:00 AM – 9:00 PM (Cairo time)</div>
        </div>
        <div style="margin-top: 20px; display: flex; gap: 12px; flex-wrap: wrap;">
          <span class="btn-primary" style="padding: 10px 24px; font-size: 0.95rem;"><i class="fas fa-paper-plane"></i> Send message</span>
          <span class="btn-secondary" style="padding: 10px 24px; font-size: 0.95rem;"><i class="fab fa-whatsapp"></i> WhatsApp</span>
        </div>
      </div>
    </div>

    <!-- final CTA -->
    <div style="text-align: center; padding: 10px 0 30px;">
      <p style="font-size: 1.2rem; color: var(--primary-blue); font-weight: 500;">
        <i class="fas fa-arrow-circle-right" style="color: var(--primary-light);"></i>
        Limited spots — secure your 1-on-1 slot today
      </p>
      <!-- <div style="margin-top: 18px; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <span class="btn-primary" style="background: var(--primary-light);"><i class="fas fa-calendar-plus"></i> Book a trial</span>
        <span class="btn-secondary" style="border-color: var(--primary-blue); color: var(--primary-blue);"><i class="fas fa-info-circle"></i> Learn more</span>
      </div> -->
    </div>

  </div>

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