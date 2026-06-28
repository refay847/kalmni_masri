<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <title>Kalmni Masri · Live 1-on-1 Egyptian Arabic</title> -->
   <title>@yield('title', 'Kalmni Masri · Live 1-on-1 Egyptian Arabic')</title>
  <!-- Font Awesome 6 (free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
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
        <div class="nav-links">
          <a href="#about">About</a>
          <!-- <a href="/">Courses</a> -->
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
