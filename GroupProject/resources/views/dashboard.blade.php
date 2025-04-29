@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="courses-title">Your Enrolled Courses</h2>

    @if($enrolledCourses->isEmpty())
        <p class="no-courses-message">You have not enrolled in any courses yet.</p>
    @else
        <div class="courses-grid">
            @foreach($enrolledCourses as $course)
                <div class="course-card">
                    <div class="course-content">
                        <h3 class="course-title">{{ $course->title }}</h3>
                        <p class="course-description">{{ $course->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

<style>
    .container {
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
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
        from { text-shadow: 0 0 10px rgba(0, 212, 255, 0.7); }
        to { text-shadow: 0 0 20px rgba(0, 212, 255, 0.9); }
    }

    .no-courses-message {
        text-align: center;
        font-size: 1.2rem;
        color: #666;
    }

    .courses-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .course-card {
        position: relative;
        height: 200px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.3);
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
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
