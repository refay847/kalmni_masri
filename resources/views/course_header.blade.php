<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- make the title dynamic -->
    <title>@yield('title')</title>
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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
                    <a href="/packages" class="nav-tab {{ request()->is('packages*') ? 'active' : '' }}">
                        <i class="fas fa-box"></i> Packages
                    </a>
                    <a href="/blog" class="nav-tab {{ request()->is('blog*') ? 'active' : '' }}">
                        <i class="fas fa-blog"></i> Blog
                    </a>
                    <a href="/free_lecture" class="nav-tab {{ request()->is('free_lecture*') ? 'active' : '' }}">
                        <i class="fas fa-video"></i> Free Lecture
                    </a>
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

<script>
        (function() {
            // Dynamic year
            const footerCopy = document.querySelector('.footer-copy');
            if (footerCopy) {
                const year = new Date().getFullYear();
                footerCopy.textContent = footerCopy.textContent.replace('2026', year);
            }

            // ===== USER DROPDOWN =====
            const dropdown = document.getElementById('userDropdown');
            const badge = document.getElementById('userBadge');
            const menu = document.getElementById('dropdownMenu');
            const chevron = document.getElementById('chevronIcon');

            // Toggle dropdown on badge click
            badge.addEventListener('click', function(e) {
                e.stopPropagation();
                menu.classList.toggle('active');
                chevron.classList.toggle('open');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    menu.classList.remove('active');
                    chevron.classList.remove('open');
                }
            });

            // Close dropdown on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    menu.classList.remove('active');
                    chevron.classList.remove('open');
                }
            });

            // smooth scroll for in-page anchor links only (e.g. href="#section")
            document.querySelectorAll('.nav-links a[href^="#"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId && targetId.length > 1) {
                        const target = document.querySelector(targetId);
                        if (target) {
                            e.preventDefault();
                            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    }
                });
            });

            console.log('👤 User dropdown active — click your name to open menu');
        })();
    </script>
</body>
</html>