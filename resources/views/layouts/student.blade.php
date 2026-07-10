<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Grammar Learning</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

<div class="wrapper">

    <!-- ================= Sidebar ================= -->

    <aside class="sidebar">

        <div class="logo">
            <h2>Learning English Grammar</h2>
        </div>

        <ul class="menu">

           <li class="{{ request()->is('/mylearning') ? 'active' : '' }}">
                    <a href="/mylearning">My Learning</a>
                </li>

                <li class="{{ request()->is('courses') ? 'active' : '' }}">
                    <a href="/courses">Courses</a>
                </li>

                <li class="{{ request()->is('quizzes') ? 'active' : '' }}">
                    <a href="/quizzes">Quizzes</a>
                </li>

                <li class="{{ request()->is('history') ? 'active' : '' }}">
                    <a href="/learninghistory">Learning History</a>
                </li>

                <li class="{{ request()->is('profile') ? 'active' : '' }}">
                    <a href="/myprofile">My Profile</a>
                </li>

        </ul>

        <div class="bottom-menu">

            <a href="#">
                <i class="fa-regular fa-circle-question"></i>
                <span>Support</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>

        </div>

    </aside>

    <!-- ================= Main ================= -->

    <div class="main">

        <!-- Header -->

        <header class="header">

            <div class="search-box">

                <i class="fa-solid fa-magnifying-glass"></i>

                <input
                    type="text"
                    placeholder="Search resources..."
                >

            </div>

            <div class="header-right">

                <div class="welcome">

                    <h4>Welcome, Hak</h4>

                    <small>Keep Learning to Improve</small>

                </div>

                <a href="#">
                    <i class="fa-regular fa-bell"></i>
                </a>

                <a href="#">
                    <i class="fa-regular fa-circle-question"></i>
                </a>

                <img
                    src="{{ asset('images/profile.png') }}"
                    class="profile"
                    alt="Profile">

            </div>

        </header>

        <!-- Page Content -->

        <main class="content">

            @yield('content')

        </main>

    </div>

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>