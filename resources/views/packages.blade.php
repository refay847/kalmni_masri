@include('course_header')
        <!-- packages section -->
        <section class="packages-section" id="packages">
            <div class="packages-header">
                <h2>Choose your learning path</h2>
                <p>Flexible plans designed to get you speaking Egyptian Arabic with confidence</p>
            </div>

            <div class="packages-grid">

                <!-- 1 Month Package -->
                <div class="package-card">
                    <div class="package-icon"><i class="fas fa-calendar-check"></i></div>
                    <h3>Monthly</h3>
                    <div class="duration">1 month · 8 live sessions</div>
                    <div class="price">$120 <small>/ month</small></div>
                    <div class="price-note">Perfect for trying out the course</div>
                    <ul class="features">
                        <li><i class="fas fa-check-circle"></i> 8 x 1-on-1 live sessions</li>
                        <li><i class="fas fa-check-circle"></i> Personalized learning plan</li>
                        <li><i class="fas fa-check-circle"></i> Native Egyptian teachers</li>
                        <li><i class="fas fa-check-circle"></i> Course materials included</li>
                        <li><i class="fas fa-check-circle"></i> Flexible scheduling</li>
                    </ul>
                    <a href="#" class="btn-enroll"><i class="fas fa-rocket"></i> Enroll now</a>
                </div>

                <!-- 3 Months Package (Popular) -->
                <div class="package-card popular">
                    <span class="popular-badge"><i class="fas fa-star"></i> Most popular</span>
                    <div class="package-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Quarterly</h3>
                    <div class="duration">3 months · 24 live sessions</div>
                    <div class="price">$300 <small>/ quarter</small></div>
                    <div class="savings"><i class="fas fa-tag"></i> Save $60</div>
                    <div class="price-note">Best balance of commitment &amp; value</div>
                    <ul class="features">
                        <li><i class="fas fa-check-circle"></i> 24 x 1-on-1 live sessions</li>
                        <li><i class="fas fa-check-circle"></i> Personalized learning plan</li>
                        <li><i class="fas fa-check-circle"></i> Native Egyptian teachers</li>
                        <li><i class="fas fa-check-circle"></i> Course materials included</li>
                        <li><i class="fas fa-check-circle"></i> Flexible scheduling</li>
                        <li><i class="fas fa-check-circle"></i> Progress tracking &amp; feedback</li>
                    </ul>
                    <a href="#" class="btn-enroll popular-btn"><i class="fas fa-rocket"></i> Enroll now</a>
                </div>

                <!-- 6 Months Package (Best Value) -->
                <div class="package-card">
                    <div class="package-icon"><i class="fas fa-crown"></i></div>
                    <h3>Half-Yearly</h3>
                    <div class="duration">6 months · 48 live sessions</div>
                    <div class="price">$540 <small>/ 6 months</small></div>
                    <div class="savings"><i class="fas fa-tag"></i> Save $180</div>
                    <div class="price-note">Best value — commit to fluency</div>
                    <ul class="features">
                        <li><i class="fas fa-check-circle"></i> 48 x 1-on-1 live sessions</li>
                        <li><i class="fas fa-check-circle"></i> Personalized learning plan</li>
                        <li><i class="fas fa-check-circle"></i> Native Egyptian teachers</li>
                        <li><i class="fas fa-check-circle"></i> Course materials included</li>
                        <li><i class="fas fa-check-circle"></i> Flexible scheduling</li>
                        <li><i class="fas fa-check-circle"></i> Progress tracking &amp; feedback</li>
                        <li><i class="fas fa-check-circle"></i> Bonus: cultural immersion sessions</li>
                    </ul>
                    <a href="#" class="btn-enroll best-value"><i class="fas fa-rocket"></i> Enroll now</a>
                </div>

            </div>
        </section>
    </div>
@include('home_footer')

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

            // smooth scroll for nav links
            document.querySelectorAll('.nav-links a[href^="#"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId && targetId.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(targetId);
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    }
                });
            });

            console.log('👤 User dropdown active — click your name to open menu');
        })();
        // ===== ACTIVE TAB FUNCTIONALITY =====
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.nav-tab');
    
    // Function to set active tab
    function setActiveTab(activeTab) {
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });
        activeTab.classList.add('active');
    }
    
    // Click handler for tabs
    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            // Don't prevent default for real navigation
            // Just update the active state
            
            // Remove active from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active to clicked tab
            this.classList.add('active');
            
            // Store in localStorage to persist across page loads
            const tabText = this.textContent.trim();
            localStorage.setItem('activeTab', tabText);
            
            // If it's a hash link, smooth scroll
            const href = this.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
    
    // Restore active tab from localStorage
    const savedTab = localStorage.getItem('activeTab');
    if (savedTab) {
        tabs.forEach(tab => {
            if (tab.textContent.trim() === savedTab) {
                tab.classList.add('active');
            }
        });
    }
    
    // Highlight current page based on URL
    const currentPath = window.location.pathname;
    tabs.forEach(tab => {
        const href = tab.getAttribute('href');
        if (href && !href.startsWith('#') && currentPath.includes(href)) {
            tab.classList.add('active');
        }
    });
});
    </script>