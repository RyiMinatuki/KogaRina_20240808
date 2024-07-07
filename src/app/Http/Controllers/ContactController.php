<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\ContactController; 
// ↑自分で考えたコード　これはweb.phpに書かなきゃいけないやつ

class ContactController extends Controller
{
    // Route::get('/', [ContactController::class, 'index']);　
    // ↑自分で考えたコード　これはweb.phpに書かなきゃいけないやつ

    public function index()
    {
        return view('index');
    }
    // ↑答えのコード index.blade.php（フォーム入力ページ）を呼び出す

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);

        // // // return $contact;
        // // return view('confirm');
        // // // ↑viewファイルの呼び出し（1）

        // return view('confirm', ['contact' => $contact]);
        // // ↑（1）に追加の記述。viewファイルを呼び出して、viewメソッドの第二引数に連想配列を指定。viewファイル側で連想配列のキーを指定することで、そのキーに対応した値を表示できる。（2）

        return view('confirm', compact('contact'));
        // ↑（2）の記述をcompact関数を使ってシンプルに記述した形

    }

    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
    }
    // ↑わかんなかったので答え見た。confirm.blade.phpのformタグから送信された値を受け取るstoreアクション。
    // store=ストア。保存するという意味。
    
}
