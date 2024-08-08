<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>FashionablyLate</h1>
            <a href="{{ route('login') }}" class="login-btn">login</a>
        </header>
        <main>
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">お名前</label>
                    <input type="text" id="name" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例: coachtech1106">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="register-btn">登録</button>
            </form>
        </main>
    </div>
</body>
</html>
