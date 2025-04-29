<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill India</title>
    <style>
        :root {
            --deep-ocean: #0a192f;
            --electric-blue: #00d4ff;
            --navy-blue: #1e3a8a;
            --glow-intensity: 0.7;
        }

        @keyframes float {

            0%,aman
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes bubble {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.5;
            }

            100% {
                transform: translateY(-100vh) rotate(720deg);
                opacity: 0;
            }
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--deep-ocean);
            color: #fff;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated Background */
        .ocean-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            background: linear-gradient(to top, rgba(10, 25, 47, 0.1), rgba(0, 0, 0, 0.2));
        }

        .bubble {
            position: absolute;
            bottom: -100px;
            background: rgba(0, 255, 255, 0.8);
            border-radius: 50%;
            filter: blur(5px);
            opacity: 0.7;
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
            animation: bubble 10s linear infinite;
        }

        .bubble:nth-child(1) {
            width: 100px;
            height: 100px;
            left: 10%;
            animation-delay: 0s;
        }

        .bubble:nth-child(2) {
            width: 150px;
            height: 150px;
            left: 25%;
            animation-delay: 2s;
            animation-duration: 20s;
        }

        .bubble:nth-child(3) {
            width: 70px;
            height: 70px;
            left: 50%;
            animation-delay: 4s;
            animation-duration: 12s;
        }

        .bubble:nth-child(4) {
            width: 120px;
            height: 120px;
            left: 70%;
            animation-delay: 1s;
            animation-duration: 18s;
        }

        .bubble:nth-child(5) {
            width: 60px;
            height: 60px;
            left: 85%;
            animation-delay: 3s;
            animation-duration: 15s;
        }

        /* Add Particle Effects */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(0, 212, 255, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            animation: moveParticles 60s linear infinite;
            pointer-events: none;
        }

        @keyframes moveParticles {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100px 100px;
            }
        }

        /* Add Light Ray Effects */
        .light-rays {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.05) 25%, transparent 25%, transparent 50%, rgba(0, 212, 255, 0.05) 50%, rgba(0, 212, 255, 0.05) 75%, transparent 75%, transparent);
            background-size: 80px 80px;
            z-index: -2;
            opacity: 0.4;
            animation: raysMove 20s linear infinite;
        }

        @keyframes raysMove {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100px 100px;
            }
        }

        /* Navbar */
        .navbar {
            background-color: rgba(30, 58, 138, 0.9);
            box-shadow: 0 4px 20px rgba(0, 212, 255, 0.3);
            padding: 16px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(5px);
            border-bottom: 1px solid rgba(0, 212, 255, 0.2);
            position: relative;
            z-index: 100;
        }

        .navbar::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--electric-blue), transparent);
            box-shadow: 0 0 10px var(--electric-blue);
        }

        .navbar .brand-name {
            font-size: 2rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
            text-shadow: 0 0 10px rgba(0, 212, 255, var(--glow-intensity));
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar .brand-name:hover {
            text-shadow: 0 0 20px rgba(0, 212, 255, var(--glow-intensity));
        }

        .brand-logo {
            width: 40px;
            height: 40px;
            filter: drop-shadow(0 0 5px var(--electric-blue));
            animation: float 3s ease-in-out infinite;
        }

        .navbar .nav-links {
            display: flex;
            gap: 24px;
            align-items: center;
        }

        .navbar .nav-link {
            color: white;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            padding: 8px 12px;
        }

        .navbar .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--electric-blue);
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: var(--electric-blue);
            text-shadow: 0 0 10px rgba(0, 212, 255, var(--glow-intensity));
        }

        .navbar .nav-link:hover::after {
            width: 100%;
            box-shadow: 0 0 10px var(--electric-blue);
        }

        .navbar .user-name {
            font-size: 1.1rem;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            background: rgba(0, 212, 255, 0.1);
            border: 1px solid rgba(0, 212, 255, 0.3);
            text-shadow: 0 0 5px rgba(0, 212, 255, 0.5);
        }

        /* Main Content */
        .main-content {
            padding: 40px 5%;
            background: rgba(10, 25, 47, 0.5);
            /* Lowered opacity for more clarity */
            backdrop-filter: blur(10px) saturate(150%);
            -webkit-backdrop-filter: blur(10px) saturate(150%);
            border-radius: 15px;
            margin: 20px auto;
            max-width: 1200px;
            box-shadow: 0 0 40px rgba(0, 212, 255, 0.2);
            border: 1px solid rgba(0, 212, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        /* Hero Section */
        h1 {
            font-size: 3rem;
            text-shadow: 0 0 10px rgba(0, 212, 255, var(--glow-intensity)),
                0 0 20px rgba(0, 212, 255, calc(var(--glow-intensity) - 0.2));
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--electric-blue), transparent);
            box-shadow: 0 0 10px var(--electric-blue);
        }

        h2 {
            font-size: 2rem;
            font-weight: bold;
            color: var(--electric-blue);
            text-shadow: 0 0 5px rgba(0, 212, 255, 0.5);
            margin-bottom: 15px;
        }

        /* Button */
        button,
        .btn {
            padding: 12px 24px;
            border-radius: 5px;
            background: var(--electric-blue);
            border: none;
            color: white;
            font-size: 1rem;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
            transition: all 0.3s ease;
        }

        button:hover,
        .btn:hover {
            background: rgba(0, 212, 255, 0.8);
            transform: scale(1.05);
        }
        .copyright {
            text-align: center;
            font-size: 0.9rem;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>

<body class="custom-body">
    <div class="ocean-bg">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>

    <nav class="navbar">
    <a href="{{ route('home') }}" class="brand-name glow-effect">
        <svg class="brand-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
        </svg>
        Skill India
    </a>

    <div class="nav-links">
        @auth
            <a href="{{ route('courses.index') }}" class="nav-link glow-effect">All Courses</a>

            <a href="{{ route('dashboard') }}" class="nav-link glow-effect">Dashboard</a>

            <span class="user-name">{{ auth()->user()->name }}</span>

            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="nav-link glow-effect" style="background: none; border: none; padding: 0; cursor: pointer;">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="nav-link glow-effect">Login</a>
            <a href="{{ route('register') }}" class="nav-link glow-effect">Register</a>
        @endauth
    </div>
</nav>


    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p class="copyright">&copy; 2025 Your Website. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>