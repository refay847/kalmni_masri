  @section('title', 'Login · Kalmni Masri')

@include('home_header')
  <!-- <title>Login · Kalmni Masri</title>
    -->
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

    <!-- login section -->
    <section class="login-section">
      <div class="login-card">
        <div class="login-header">
          <div class="brand-icon"><i class="fas fa-comment-dots"></i></div>
          <h2>Welcome back</h2>
          <p>Login to your Kalmni Masri account</p>
        </div>



    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
          <input type="hidden" name="_token" value="demo_token" />

          <!-- Email -->
          <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="student@kalmnimasri.com"
                required
                autofocus
                autocomplete="username"
            />

            @error('email')
                <div class="input-error">
                    <i class="fas fa-circle-exclamation"></i>
                    {{ $message }}
                </div>
            @enderror
            <!-- error example (hidden) 
            <div class="input-error"><i class="fas fa-circle-exclamation"></i> Invalid email</div>
            -->
          </div>

          <!-- Password -->
          <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i> Password</label>
          <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
              autocomplete="current-password"
          />

          @error('password')
              <div class="input-error">
                  <i class="fas fa-circle-exclamation"></i>
                  {{ $message }}
              </div>
          @enderror  
          <!-- error example 
            <div class="input-error"><i class="fas fa-circle-exclamation"></i> Wrong password</div>
            -->
          </div>

          <!-- Remember & Forgot -->
          <div class="form-options">
            <label for="remember_me">
          <input
              id="remember_me"
              type="checkbox"
              name="remember"
              {{ old('remember') ? 'checked' : '' }}
          />
              Remember me
            </label>
            <a href="{{ route('password.request') }}" class="forgot-link">Forgot password?</a>
          </div>

          <!-- Submit -->
          <button type="submit" class="btn-login-submit">
            <i class="fas fa-arrow-right-to-bracket"></i> Log in
          </button>

          <div class="login-footer-text">
            Don't have an account? <a href="{{ route('register') }}">Sign up now</a>
          </div>
        </form>
      </div>
    </section>
  </div>
@include('home_footer')