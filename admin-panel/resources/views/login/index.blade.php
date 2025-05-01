<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- You can include Tailwind or Bootstrap here if you want -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        .login-container input {
            width: 100%;
            margin-bottom: 1rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 0.5rem;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container button:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 style="text-align:center; margin-bottom:1rem;">Login</h2>

        @if(session('error'))
            <div style="color: red; margin-bottom: 1rem;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
