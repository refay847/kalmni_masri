
@section('title', 'Packages · Kalmni Masri')

@include('course_header')
    <link rel="stylesheet" href="{{ asset('css/packages.css') }}" />

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

