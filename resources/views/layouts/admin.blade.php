<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

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

           <li class="{{ request()->is('home') ? 'active' : '' }}">
                    <a href="/home">Home</a>
                </li>

                <li class="{{ request()->is('ad-courses') ? 'active' : '' }}">
                    <a href="/ad-courses">Courses</a>
                </li>

                <li class="{{ request()->is('ad-quizzes') ? 'active' : '' }}">
                    <a href="/ad-quizzes">Quizzes</a>
                </li>

                <li class="{{ request()->is('students') ? 'active' : '' }}">
                    <a href="/students">Students</a>
                </li>

                {{-- <li class="{{ request()->is('profile') ? 'active' : '' }}">
                    <a href="/ad-myprofile">My Profile</a>
                </li> --}}

        </ul>

        <div class="bottom-menu">

            <a href="#">
                <i class="fa-regular fa-circle-question"></i>
                <span>Support</span>
            </a>

            <form method="POST" action="{{ route('logout') }}" style="display:contents;">
                @csrf
                <button type="submit" style="all:unset;cursor:pointer;display:contents;">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </button>
            </form>

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

                    <h4>Welcome, {{ auth()->user()->full_name }}</h4>

                    <small>Keep Learning to Improve</small>

                </div>

                <a href="#">
                    <i class="fa-regular fa-bell"></i>
                </a>

                <a href="#">
                    <i class="fa-regular fa-circle-question"></i>
                </a>

               
                <a href="/ad-myprofile">
                     <img
                    src="{{ asset('images/profile.png') }}"
                    class="profile"
                    alt="Profile">
                </a>

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