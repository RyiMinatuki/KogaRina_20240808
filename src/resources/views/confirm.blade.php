<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="title">FashionablyLate</h1>
        </header>
        <div class="confirm-box">
            <h2 class="confirm-title">Confirm</h2>
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <table class="confirm-table">
                    <tr>
                        <th>お名前</th>
                        <td>{{ $input['last_name'] }}　{{ $input['first_name'] }}</td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>{{ $input['gender'] }}</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{ $input['email'] }}</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>{{ $input['phone'] }}</td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>{{ $input['address'] }}</td>
                    </tr>
                    <tr>
                        <th>建物名</th>
                        <td>{{ $input['building'] }}</td>
                    </tr>
                    <tr>
                        <th>お問い合わせの種類</th>
                        <td>{{ $category_name }}</td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td>{{ $input['content'] }}</td>
                    </tr>
                </table>
                <div class="button-group">
                    <button type="submit" class="send-button">送信</button>
                    <a href="{{ route('contact.index') }}" class="edit-button">修正</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
