<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="title">FashionablyLate</h1>
        </header>
        <div class="thanks-box">
            <h2 class="thanks-message">お問い合わせありがとうございました</h2>
            <a href="{{ route('contact.index') }}" class="home-button">HOME</a>
        </div>
        <div class="background-text">Thank you</div>
    </div>
</body>
</html>
