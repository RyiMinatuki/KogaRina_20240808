<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="title">FashionablyLate</h1>
        </header>
        <div class="contact-box">
            <h2 class="contact-title">Contact</h2>
            <form method="POST" action="{{ route('contact.confirm') }}">
                @csrf
                <div class="form-group">
                    <label for="last_name">お名前 <span class="required">※</span></label>
                    <input type="text" id="last_name" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
                    @error('last_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <input type="text" id="first_name" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
                    @error('first_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">性別 <span class="required">※</span></label>
                    <div class="radio-group">
                        <input type="radio" id="male" name="gender" value="男性" checked>
                        <label for="male">男性</label>
                        <input type="radio" id="female" name="gender" value="女性">
                        <label for="female">女性</label>
                        <input type="radio" id="other" name="gender" value="その他">
                        <label for="other">その他</label>
                    </div>
                    @error('gender')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス <span class="required">※</span></label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">電話番号 <span class="required">※</span></label>
                    <input type="text" id="phone" name="phone" placeholder="例: 080-1234-5678" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">住所 <span class="required">※</span></label>
                    <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                    @error('address')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="building">建物名</label>
                    <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
                </div>
                <div class="form-group">
                    <label for="category">お問い合わせの種類 <span class="required">※</span></label>
                    <select id="category" name="category">
                        <option value="">選択してください</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">お問い合わせ内容 <span class="required">※</span></label>
                    <textarea id="content" name="content" placeholder="お問い合わせ内容をご記載ください">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="confirm-button">確認画面</button>
            </form>
        </div>
    </div>
</body>
</html>
