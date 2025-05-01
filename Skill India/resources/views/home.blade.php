@extends('layouts.app')

@section('content')
<section class="home-section">
    <h1 class="main-title">Welcome to Skill India</h1>
    <p class="subtitle">Empowering your future with skills!</p>

    <h2 class="section-title">Top Categories</h2>
    <div class="categories-container">
        @foreach($categories as $category)
            <div class="category-card">
                {{ $category->name }}
            </div>
        @endforeach
    </div>

    <h2 class="section-title">Featured Courses</h2>
    <div class="courses-grid">
        @foreach($courses as $course)
            <div class="course-card">
                <h3 class="course-title">{{ $course->title }}</h3>
                <p class="course-description">{{ $course->description }}</p>
                <p class="course-price">₹{{ $course->price }}</p>
            </div>
        @endforeach
    </div>
</section>

<style>
    /* Home Page Styles */
    .home-section {
        text-align: center;
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .main-title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 24px;
        color: #00d4ff;
        text-shadow: 0 0 10px rgba(0, 212, 255, 0.7),
                     0 0 20px rgba(0, 212, 255, 0.5);
    }

    .subtitle {
        font-size: 1.5rem;
        margin-bottom: 40px;
        color: white;
    }

    .section-title {
        font-size: 2rem;
        margin-bottom: 24px;
        color: #00d4ff;
        text-shadow: 0 0 8px rgba(0, 212, 255, 0.5);
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 60%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #00d4ff, transparent);
        box-shadow: 0 0 8px #00d4ff;
    }

    /* Categories Styles */
    .categories-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 16px;
        margin-bottom: 40px;
    }

    .category-card {
        background: linear-gradient(135deg, #0077b6, #00b4d8);
        padding: 16px 24px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        color: white;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
    }

    /* Courses Grid Styles */
    .courses-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
        margin-top: 20px;
    }

    .course-card {
        background: rgba(10, 25, 47, 0.8);
        padding: 24px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(0, 212, 255, 0.2);
        transition: all 0.3s ease;
        text-align: left;
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 212, 255, 0.3);
        border-color: rgba(0, 212, 255, 0.4);
    }

    .course-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #00d4ff;
        margin-bottom: 12px;
    }

    .course-description {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 16px;
        line-height: 1.5;
    }

    .course-price {
        font-weight: bold;
        color: white;
        font-size: 1.2rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .main-title {
            font-size: 2.2rem;
        }
        
        .subtitle {
            font-size: 1.2rem;
        }
        
        .section-title {
            font-size: 1.5rem;
        }
        
        .courses-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection