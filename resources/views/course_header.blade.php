<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Package · Kalmni Masri</title>
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/packages.css') }}" />
</head>
<body>

    <div class="container">
        <!-- header with user dropdown -->
        <header>
            <nav class="navbar">
                <a href="#" class="logo">
                    <i class="fas fa-comment-dots"></i>
                    <span>Kalmni Masri</span>
                </a>
                <div class="nav-links">
                    <a href="/packages" class="nav-tab active"><i class="fas fa-box"></i> Packages</a>
                    <a href="#about"class="nav-tab"><i class="fas fa-blog"></i> Blog</a>
                    <a href="#contact" class="nav-tab"><i class="fas fa-video"></i> Free Lecture</a>
                    <div class="nav-actions">

                      <!-- User Dropdown - Updated for mobile -->
                      <div class="user-dropdown" id="userDropdown">
                          <div class="user-badge" id="userBadge">
                              <i class="fas fa-user"></i>
                              <span class="user-name">{{$name}}</span>
                              <i class="fas fa-chevron-down chevron-down" id="chevronIcon"></i>
                          </div>
                          <div class="dropdown-menu" id="dropdownMenu">
                              <a href="/profile">
                                  <i class="fas fa-user-circle"></i> Profile
                              </a>
                              <div class="divider"></div>
                              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  <i class="fas fa-sign-out-alt"></i> Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>

                          </div>
                      </div>
                    </div>
                </div>
            </nav>
        </header>
