@extends('layouts.app')

@section('content')
<div class="register-container">
    <h1 class="register-title">Register</h1>

    <form method="POST" action="{{ route('register') }}" class="register-form">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-input @error('name') error-input @enderror" value="{{ old('name') }}" placeholder="Enter your name">
            @error('name')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-input @error('email') error-input @enderror" value="{{ old('email') }}" placeholder="Enter your email">
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-input @error('password') error-input @enderror" placeholder="Enter your password">
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-input" placeholder="Confirm your password">
        </div>

        <button type="submit" class="register-button">Register</button>
    </form>
</div>

<style>
    /* Registration Page Specific Styles */
    .register-container {
        max-width: 500px;
        margin: 40px auto;
        padding: 30px;
        background: rgba(10, 25, 47, 0.8);
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(0, 212, 255, 0.2);
        border: 1px solid rgba(0, 212, 255, 0.2);
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .register-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 30px;
        color: #00d4ff;
        text-shadow: 0 0 10px rgba(0, 212, 255, 0.7);
        animation: glowPulse 2s infinite alternate;
    }

    @keyframes glowPulse {
        from { text-shadow: 0 0 10px rgba(0, 212, 255, 0.7); }
        to { text-shadow: 0 0 20px rgba(0, 212, 255, 0.9); }
    }

    .register-form {
        display: flex;
        flex-direction: column;
        padding: 0 10px; /* Added padding to prevent collision */
    }

    .form-group {
        margin-bottom: 20px;
        animation: slideUp 0.5s ease-out;
        animation-fill-mode: both;
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Stagger animations for form groups */
    .form-group:nth-child(1) { animation-delay: 0.2s; }
    .form-group:nth-child(2) { animation-delay: 0.3s; }
    .form-group:nth-child(3) { animation-delay: 0.4s; }
    .form-group:nth-child(4) { animation-delay: 0.5s; }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #fff;
        font-size: 1.1rem;
        text-shadow: 0 0 5px rgba(0, 212, 255, 0.3);
    }

    .form-input {
        width: calc(100% - 30px); /* Adjusted width to account for padding */
        padding: 12px 15px; /* Consistent padding on both sides */
        background-color: rgba(10, 25, 47, 0.7);
        border: 1px solid rgba(0, 212, 255, 0.3);
        border-radius: 5px;
        color: white;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #00d4ff;
        box-shadow: 0 0 10px rgba(0, 212, 255, 0.5);
    }

    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .error-input {
        border-color: #ff3860;
        animation: shake 0.5s;
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        20%, 60% { transform: translateX(-5px); }
        40%, 80% { transform: translateX(5px); }
    }

    .error-message {
        color: #ff3860;
        font-size: 0.9rem;
        margin-top: 5px;
        display: block;
        text-shadow: 0 0 5px rgba(255, 56, 96, 0.3);
    }

    .register-button {
        padding: 14px;
        background: linear-gradient(135deg, #0077b6, #00b4d8);
        color: white;
        font-weight: bold;
        font-size: 1.1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        animation: slideUp 0.5s ease-out 0.6s both;
    }

    .register-button:hover {
        background: linear-gradient(135deg, #00b4d8, #00d4ff);
        box-shadow: 0 0 15px rgba(0, 212, 255, 0.5);
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .register-container {
            margin: 20px;
            padding: 20px;
        }
        
        .register-title {
            font-size: 2rem;
        }
        
        .register-form {
            padding: 0 5px; /* Adjusted for smaller screens */
        }
        
        .form-input {
            width: calc(100% - 20px); /* Adjusted for smaller screens */
            padding: 10px 10px;
        }
    }
</style>
@endsection