@section('title', 'Reset Password | Kalmni Masri')
@include('home_header')
<link rel="stylesheet" href="{{ asset('css/reset_password.css') }}" />

    <!-- reset password section -->
    <section class="reset-section">
      <div class="reset-card">
        <div class="reset-header">
          <div class="brand-icon"><i class="fas fa-lock-open"></i></div>
          <h2>Set new password</h2>
          <p>Create a strong password for your account</p>
        </div>

        <!-- info text -->
        <div class="reset-info">
          <i class="fas fa-shield-alt"></i>
          <span>Enter your email and choose a new password. Make sure it's at least <strong>8 characters</strong> and includes a mix of letters, numbers, and symbols.</span>
        </div>

        <form class="reset-form" method="POST" action="{{ route('password.store') }}">
            @csrf

          <!-- Password Reset Token (hidden) -->
          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <!-- Email Address -->
          <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email', $request->email) }}"
            required
            
            autocomplete="username"
        />

        @error('email')
            <div class="input-error">
                <i class="fas fa-circle-exclamation"></i> {{ $message }}
            </div>
        @enderror
            <!-- <div class="input-error"><i class="fas fa-circle-exclamation"></i> Email not found</div> -->
          </div>

          <!-- Password -->
          <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i> New Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your new password"
            required
            autofocus
            autocomplete="new-password"
        />

        @error('password')
            <div class="input-error">
                <i class="fas fa-circle-exclamation"></i> {{ $message }}
            </div>
        @enderror
            <!-- <div class="input-error"><i class="fas fa-circle-exclamation"></i> Password must be at least 8 characters</div> -->
          </div>

          <!-- Confirm Password -->
          <div class="form-group">
            <label for="password_confirmation"><i class="fas fa-check-circle"></i> Confirm Password</label>
        <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Confirm your new password"
            required
            autocomplete="new-password"
        />

        @error('password_confirmation')
            <div class="input-error">
                <i class="fas fa-circle-exclamation"></i> {{ $message }}
            </div>
        @enderror
            <!-- <div class="input-error"><i class="fas fa-circle-exclamation"></i> Passwords do not match</div> -->
          </div>

          <!-- actions -->
          <div class="form-actions">
            <a href="{{ route('login') }}" class="btn-login-nav" style="padding:12px 22px; font-size:0.95rem; background:transparent; border:2px solid var(--primary-blue); color:var(--primary-blue); text-decoration:none; border-radius:60px; display:inline-flex; align-items:center; gap:8px;">
              <i class="fas fa-arrow-left"></i> Back to Login
            </a>
            <button type="submit" class="btn-reset-submit">
              <i class="fas fa-key"></i> Reset Password
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