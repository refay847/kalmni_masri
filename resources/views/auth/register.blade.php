  @section('title', 'Register · Kalmni Masri')

@include('home_header')
  <!-- <title>Register · Kalmni Masri</title>
    -->
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />


    <!-- register section -->
    <section class="register-section">
      <div class="register-card">
        <div class="register-header">
          <div class="brand-icon"><i class="fas fa-user-graduate"></i></div>
          <h2>Create your account</h2>
          <p>Join Kalmni Masri and start speaking Egyptian Arabic</p>
        </div>

<form class="register-form" method="POST" action="{{ route('register') }}">
    @csrf
    <!-- Name -->
    <div class="form-group">
        <label for="name"><i class="fas fa-user"></i> Full Name</label>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Ahmed Hassan"
            value="{{ old('name') }}"
            required
            autofocus
        >
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Phone -->
    <div class="form-group">
        <label for="number"><i class="fas fa-phone"></i> Phone Number</label>
        <input
            type="text"
            id="number"
            name="number"
            placeholder="01001234567"
            value="{{ old('number') }}"
            required
        >
        @error('number')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Birth Day + Gender -->
    <div class="form-row">
        <div class="form-group">
            <label for="birth_day"><i class="fas fa-calendar"></i> Birth Day</label>
            <input
                type="date"
                id="birth_day"
                name="birth_day"
                value="{{ old('birth_day') }}"
                required
            >
            @error('birth_day')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="gender"><i class="fas fa-venus-mars"></i> Gender</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
            </select>

            @error('gender')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Nationality -->
    <div class="form-group">
        <label for="nationality"><i class="fas fa-flag"></i> Nationality</label>
        <input
            type="text"
            id="nationality"
            name="nationality"
            placeholder="Egyptian"
            value="{{ old('nationality') }}"
            required
        >
        @error('nationality')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Email -->
    <div class="form-group">
        <label for="email"><i class="fas fa-envelope"></i> Email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="ahmed@example.com"
            value="{{ old('email') }}"
            required
            autocomplete="username"
        >
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
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
            autocomplete="new-password"
        >
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="form-group">
        <label for="password_confirmation">
            <i class="fas fa-check-circle"></i> Confirm Password
        </label>
        <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Confirm your password"
            required
            autocomplete="new-password"
        >
    </div>

    <div class="form-actions">
        <a href="{{ route('login') }}" class="btn-login-nav">
            <i class="fas fa-arrow-left"></i> Back to Login
        </a>

        <button type="submit" class="btn-register-submit">
            <i class="fas fa-user-plus"></i> Register
        </button>
    </div>

    <div class="register-footer-text">
        Already have an account?
        <a href="{{ route('login') }}">Sign in</a>
    </div>
</form>
      </div>
    </section>
  </div>
@include('home_footer')