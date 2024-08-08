<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面 - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <header class="admin-header">
            <h1>FashionablyLate Admin</h1>
            <a href="/logout" class="logout-button">logout</a>
        </header>

        <form method="GET" action="{{ route('admin.index') }}" class="search-container">
            <input type="text" name="name" placeholder="名前やメールアドレスを入力してください" class="search-input" value="{{ request('name') }}">
            <select name="gender" class="search-select">
                <option value="">性別</option>
                <option value="1" @if(request('gender') == 1) selected @endif>男性</option>
                <option value="2" @if(request('gender') == 2) selected @endif>女性</option>
                <option value="3" @if(request('gender') == 3) selected @endif>その他</option>
            </select>
            <select name="category" class="search-select">
                <option value="">お問い合わせの種類</option>
                <!-- カテゴリのオプションを追加 -->
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            <input type="date" name="date" class="search-date" value="{{ request('date') }}">
            <button type="submit" class="search-button">検索</button>
            <a href="{{ route('admin.index') }}" class="reset-button">リセット</a>
        </form>

        <a href="{{ route('admin.export', request()->query()) }}" class="export-button">エクスポート</a>

        <table class="contacts-table">
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->gender }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->category }}</td>
                    <td>
                        <button class="detail-button" onclick="showModal({{ $contact->id }})">詳細</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination-container">
            {{ $contacts->links() }}
        </div>
    </div>

    <!-- モーダルウィンドウ -->
    @foreach($contacts as $contact)
    <div class="modal" id="detail-modal-{{ $contact->id }}">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal({{ $contact->id }})">&times;</span>
            <p><strong>お名前:</strong> {{ $contact->name }}</p>
            <p><strong>性別:</strong> {{ $contact->gender }}</p>
            <p><strong>メールアドレス:</strong> {{ $contact->email }}</p>
            <p><strong>電話番号:</strong> {{ $contact->phone }}</p>
            <p><strong>住所:</strong> {{ $contact->address }}</p>
            <p><strong>建物名:</strong> {{ $contact->building }}</p>
            <p><strong>お問い合わせの種類:</strong> {{ $contact->category }}</p>
            <p><strong>お問い合わせ内容:</strong> {{ $contact->content }}</p>
            <form method="POST" action="{{ route('admin.destroy', $contact->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">削除</button>
            </form>
        </div>
    </div>
    @endforeach

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
