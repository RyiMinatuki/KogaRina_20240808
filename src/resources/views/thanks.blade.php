<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンクスページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
    <div class="container">
        <div class="thank-you-text">
            <p>お問い合わせありがとうございました</p>
            <a href="{{ url('/') }}" class="home-button">HOME</a>
        </div>
    </div>
</body>
</html>
