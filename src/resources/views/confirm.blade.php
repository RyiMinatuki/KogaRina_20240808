<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Contact Form
      </a>
    </div>
  </header>

  <main>
    <!-- <?php print_r($contact) ?> -->
     <!-- ↑$contactの中身をブラウザに表示するためのコード。
     名前だけ取得したいときは、nameがキーの値を表示すればいいので -->
     <!-- <?php print_r($contact['name']) ?> -->
     <!-- という記述になる。確認が終わったら消す。 --> 


    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>お問い合わせ内容確認</h2>
      </div>

      <form class="form" action="/contacts" method="post" >
        <!-- ↑formタグの method属性とaction属性を設定し、storeアクションを呼び出すルーティングと結びつける -->
        <!-- actionに入れるのはルートパス。localhostの後に続く部分 -->
         @csrf
         <!-- csrf 攻撃という悪意のリクエストを受け付けてしまう脆弱性を防ぐための機能 -->
         <!-- ↑＠ｃｓｒｆ入れるの忘れない！ -->

        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">

                <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                <!-- <input type="text" name="content" value="サンプルテキスト" />を↑に書き換え。
                valueの中を＄contact［’キー名’］にすることで、入力内容確認ページで入力内容が表示されるようになる。
                 $ contactを展開するために、｛｛　｝｝で変数全体を囲むのを忘れないこと。
                 また、確認ページでは内容を編集できないようにするため、inputタグの最後にreadonly属性を記述すること。 -->
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">

                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                <!-- <input type="text" name="content" value="サンプルテキスト" />を↑に書き換え。
                valueの中を＄contact［’キー名’］にすることで、入力内容確認ページで入力内容が表示されるようになる。
                 $ contactを展開するために、｛｛　｝｝で変数全体を囲むのを忘れないこと。
                 また、確認ページでは内容を編集できないようにするため、inputタグの最後にreadonly属性を記述すること。 -->
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">

                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly />
                <!-- <input type="text" name="content" value="サンプルテキスト" />を↑に書き換え。
                valueの中を＄contact［’キー名’］にすることで、入力内容確認ページで入力内容が表示されるようになる。
                 $ contactを展開するために、｛｛　｝｝で変数全体を囲むのを忘れないこと。
                 また、確認ページでは内容を編集できないようにするため、inputタグの最後にreadonly属性を記述すること。 -->
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">

                <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                 <!-- <input type="text" name="content" value="サンプルテキスト" />を↑に書き換え。
                valueの中を＄contact［’キー名’］にすることで、入力内容確認ページで入力内容が表示されるようになる。
                 $ contactを展開するために、｛｛　｝｝で変数全体を囲むのを忘れないこと。
                 また、確認ページでは内容を編集できないようにするため、inputタグの最後にreadonly属性を記述すること。 -->
              </td>
            </tr>
          </table>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>