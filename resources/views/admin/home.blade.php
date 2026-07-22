@extends('layouts.admin')



@section('content')

<!-- Paste ONLY the dashboard content here -->
<div class="page-heading">
    <h1>Dashboard Overview</h1>
    <p>Monitor platform activity and manage learning resources.</p>
</div>

<div class="dashboard-sections">

    <!-- Hero -->
    <section class="hero">
        <div>
            <div class="hero-eyebrow"><i class="fa-solid fa-shield-halved"></i> Admin Control Center</div>
            <h2>Manage Your Learning Platform <span>Efficiently</span></h2>
            <p>Oversee courses, lessons, quizzes, and student progress from one place — built to keep your grammar curriculum organized and growing.</p>
            <div class="hero-stats-inline">
                <div>
                    {{-- {{ $totalCourses }} --}}
                    <strong>24</strong>
                    <span>Courses Live</span>
                </div>
                <div>
                    {{-- {{ $totalStudents }} --}}
                    <strong>320</strong>
                    <span>Students Enrolled</span>
                </div>
                <div>
                    {{-- {{ $totalQuizzes }} --}}
                    <strong>85</strong>
                    <span>Quizzes Active</span>
                </div>
            </div>
        </div>

        <div class="hero-illustration">
            {{-- If admin-dashboard.png is missing, onerror hides it and reveals the
                 fallback icon panel below instead of showing a broken image. --}}
            <img
                src="{{ asset('images/admin-dashboard.png') }}"
                alt="Admin dashboard illustration"
                onerror="this.remove(); document.getElementById('hero-illustration-fallback').style.display='flex';"
            >
            <div id="hero-illustration-fallback" class="hero-illustration-fallback">
                <i class="fa-solid fa-chalkboard-user"></i>
            </div>

            <div class="hero-badge">
                <i class="fa-solid fa-award"></i>
                <div>
                    <strong>Top Rated Program</strong>
                    <span>Academic Excellence</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Stat cards (3 only) -->
    <section class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon"><i class="fa-solid fa-book"></i></div>
            <div>
                {{-- {{ $totalCourses }} --}}
                <div class="stat-number">24</div>
                <div class="stat-label">Total Courses</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fa-solid fa-user-group"></i></div>
            <div>
                {{-- {{ $totalStudents }} --}}
                <div class="stat-number">320</div>
                <div class="stat-label">Total Students</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fa-solid fa-clipboard-question"></i></div>
            <div>
                {{-- {{ $totalQuizzes }} --}}
                <div class="stat-number">85</div>
                <div class="stat-label">Total Quizzes</div>
            </div>
        </div>
    </section>

</div>

@endsection