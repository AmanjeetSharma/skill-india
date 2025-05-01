@extends('layouts.app')

@section('content')
<div class="courses-section">
    <h1 class="courses-title">Available Courses</h1>

    <div class="courses-grid">
        @foreach($courses as $course)
        <div class="course-card">
            <div class="course-content">
                <h3 class="course-title">{{ $course->title }}</h3>
                <p class="course-description">{{ $course->description }}</p>
                <p class="course-price">₹{{ $course->price }}</p>

                <!-- Enroll Button -->
                <form action="{{ route('courses.enroll', $course->id) }}" method="POST" class="enroll-form">
                    @csrf
                    <button type="submit" class="enroll-button">
                        <span>Enroll Now</span>
                        <svg class="enroll-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .courses-section {
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .courses-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 40px;
        color: #00d4ff;
        text-shadow: 0 0 10px rgba(0, 212, 255, 0.7);
        text-align: center;
        animation: glowPulse 2s infinite alternate;
    }

    @keyframes glowPulse {
        from {
            text-shadow: 0 0 10px rgba(0, 212, 255, 0.7);
        }

        to {
            text-shadow: 0 0 20px rgba(0, 212, 255, 0.9);
        }
    }

    .courses-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .course-card {
        background-color: #09122C;
        position: relative;
        height: 300px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.3), 0 0 10px 5px rgba(0, 150, 255, 0.3);
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        animation: float 6s ease-in-out infinite;
    }

    


    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .course-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: var(--bg-image);
        background-size: cover;
        background-position: center;
        filter: brightness(0.5);
        transition: all 0.5s ease;
        z-index: -1;
    }

    .course-card:hover::before {
        filter: brightness(0.4);
        transform: scale(1.05);
    }

    .course-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 60%;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        z-index: -1;
    }

    .course-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 25px;
        color: white;
        transform: translateY(0);
        transition: all 0.3s ease;
    }

    .course-card:hover .course-content {
        transform: translateY(-10px);
    }

    .course-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #00d4ff;
        margin-bottom: 12px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    .course-description {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 16px;
        line-height: 1.5;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
    }

    .course-price {
        font-weight: bold;
        color: white;
        font-size: 1.3rem;
        background: rgba(0, 212, 255, 0.3);
        display: inline-block;
        padding: 6px 15px;
        border-radius: 20px;
        border: 1px solid rgba(0, 212, 255, 0.5);
        box-shadow: 0 0 10px rgba(0, 212, 255, 0.2);
    }

    /* Enroll Button Styling */
    .enroll-button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px 20px;
        background-color: #00d4ff;
        color: white;
        border: none;
        border-radius: 30px;
        font-size: 1.2rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 212, 255, 0.2);
    }

    .enroll-button:hover {
        background-color: #00b3cc;
    }

    .enroll-icon {
        margin-left: 10px;
        width: 24px;
        height: 24px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .courses-title {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .courses-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .course-card {
            height: 250px;
        }
    }
</style>