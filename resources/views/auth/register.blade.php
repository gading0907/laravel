<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #ff5858, #5a87ff);
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #1c1c1c;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            color: white;
            margin-bottom: 30px;
            font-size: 24px;
        }

        label {
            display: block;
            color: #fff;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background-color: transparent;
            border: 1px solid #00fffb;
            border-radius: 25px;
            color: #fff;
            text-align: center;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border-color: #00ff00;
        }

        button[type="submit"] {
            background-color: transparent;
            border: 2px solid #00ff00;
            padding: 12px;
            width: 100%;
            color: #00ff00;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #00ff00;
            color: #1c1c1c;
        }

        p {
            color: white;
            margin-top: 20px;
            font-size: 14px;
        }

        a {
            color: #00fffb;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2>REGISTER</h2>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>

        <!-- Teks tambahan di bawah tombol -->
        <p>
            Sudah punya akun? <a href="{{ route('login') }}">Login disini</a>
        </p>
    </form>
</body>
</html>
