<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Forgot Password · Kalmni Masri</title>
  <!-- Font Awesome 6 (free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/forgot_password.css') }}" />
</head>
<body>

  <div class="container">
    <!-- header -->
    <header>
      <nav class="navbar">
        <a href="{{ url('/') }}" class="logo">
            <i class="fas fa-comment-dots"></i>
            <span>Kalmni Masri</span>
        </a>
      </nav>
    </header>

    <!-- reset password section -->
    <section class="reset-section">
      <div class="reset-card">
        <div class="reset-header">
          <div class="brand-icon"><i class="fas fa-key"></i></div>
          <h2>Reset password</h2>
          <p>We'll send you a link to create a new one</p>
        </div>

        <!-- info text (matches Blade description) -->
        <div class="reset-info">
          <i class="fas fa-info-circle"></i>
          <span>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</span>
        </div>


        <form class="reset-form" method="POST" action="#">
          <!-- CSRF token (demo) -->
          <input type="hidden" name="_token" value="demo_token" />

          <!-- Email -->
          <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="student@kalmnimasri.com" required autofocus />
            <!-- error example (hidden) 
            <div class="input-error"><i class="fas fa-circle-exclamation"></i> We couldn't find this email</div>
            -->
          </div>

          <!-- actions -->
          <div class="form-actions">
            <a href="{{ route('login') }}" class="btn-login-nav" style="padding:12px 22px; font-size:0.95rem; background:transparent; border:2px solid var(--primary-blue); color:var(--primary-blue); text-decoration:none; border-radius:60px; display:inline-flex; align-items:center; gap:8px;">
              <i class="fas fa-arrow-left"></i> Back to Login
            </a>
            <button type="submit" class="btn-reset-submit">
              <i class="fas fa-paper-plane"></i> Send Reset Link
            </button>
          </div>

          <div class="reset-footer-text">
            Remember your password? <a href="{{ route('login') }}">Sign in</a>
          </div>
        </form>
      </div>
    </section>
  </div>

@include('home_footer')