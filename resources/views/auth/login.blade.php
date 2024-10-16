<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

        input[type="email"], input[type="password"] {
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

        input[type="email"]:focus, input[type="password"]:focus {
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

        /* Ikon media sosial */
        .social-media {
            margin-top: 20px;
        }

        .social-media i {
            margin: 0 10px;
            font-size: 20px;
            color: white;
            cursor: pointer;
        }

        .social-media i:hover {
            color: #00fffb;
        }

        /* Styling pesan error */
        .alert {
            background-color: #ff4d4d;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <form action="{{ route('proses_login') }}" method="POST">
        @csrf
        <h2>LOGIN</h2>

        <!-- Bagian Notifikasi Error -->
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Email -->
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <!-- Form Password -->
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <!-- Tombol Login -->
        <button type="submit">Login</button>

        <!-- Teks tambahan di bawah tombol login -->
        <p>
            Belum punya akun? <a href="{{ route('register') }}">Silahkan register</a>
        </p>

        <!-- Ikon media sosial (opsional) -->
        <div class="social-media">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-google"></i>
        </div>
    </form>
</body>
</html>
