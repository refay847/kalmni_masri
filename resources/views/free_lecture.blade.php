
@section('title', 'Free Lecture · Kalmni Masri')

@include('course_header')
<link rel="stylesheet" href="{{ asset('css/free_lecture.css') }}" />


        <!-- Free Lecture Section -->
        <section class="free-lecture-section">
            <div class="free-lecture-header">
                <div class="badge-free"><i class="fas fa-gift"></i> Free for registered users</div>
                <h1>Watch your <span>free lecture</span></h1>
                <p>Experience our 1-on-1 teaching method and see how fast you can start speaking Egyptian Arabic</p>
            </div>

            <!-- Video Player with Local MP4 -->
            <div class="video-container">
                <div class="video-wrapper">
                    <video controls preload="metadata">
                        <source src="{{ asset('lecture/101.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video-overlay">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div class="video-info">
                    <span class="video-label"><i class="fas fa-graduation-cap"></i> Free Lecture</span>
                    <h2>Introduction to Egyptian Arabic</h2>
                    <p>Learn essential greetings, common phrases, and pronunciation tips in this 30-minute sample session with one of our expert teachers. This is your chance to experience our 1-on-1 teaching methodology firsthand.</p>
                    
                    <div class="video-meta">
                        <span><i class="fas fa-clock"></i> Duration: 30 minutes</span>
                        <span><i class="fas fa-user-graduate"></i> Level: Beginner</span>
                        <span><i class="fas fa-chalkboard-teacher"></i> Teacher: Native Egyptian</span>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <h2>Ready to start your journey?</h2>
                <p>Choose a package that fits your goals and begin speaking Egyptian Arabic with confidence</p>
                <a href="/packages" class="btn-cta"><i class="fas fa-rocket"></i> View packages</a>
            </div>
        </section>
    </div>
@include('home_footer')