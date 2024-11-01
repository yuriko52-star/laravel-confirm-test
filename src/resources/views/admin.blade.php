@exteds('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')
<form action="" class="form">
    <div class="form__button">
       <button class="form__button-submit--logout"type="submit">logout</button>
    </div>
</form>
@endsection
@section('content')
<div class="admin__content">
    <div class="admin__utilities">
        <p>名前やメールアドレスを入力してください</p>
        <select name="gender"  class="">
            <option value="性別" class="">性別</option>
            <option value="男性" class="">男性</option>
            <option value="女性" class="">女性</option>
            <option value="その他" class="">その他</option>
        </select>
        <select name="detail" id="" class="select">
            <option value="お問い合わせの種類" class="">お問い合わせの種類</option>
            <option value="商品のお届けについて" class="">商品のお届けについて</option>
            <option value="商品の交換について" class="">商品の交換について</option>
            <option value="商品トラブル" class="">商品トラブル</option>
            <option value="ショップへのお問い合わせ" class="">ショップへのお問い合わせ</option>
            <option value="その他" class="">その他</option>
        </select>
        <select name="date" id="" class="date">年/月/日</select>
        <form action="" class="form__button">
            <button class="form__button-submit--search">検索</button>
            <button class="form__button-submit--reset">リセット</button>
        </form>
    </div>
    <div class="export">
        <form action="" class="form__button">
            <button class="form__button-submit--export">エクスポート</button>
        </form>
        <div class="link">
            <!-- あとで -->
        </div>
    </div>
    <div class="admin__table">
        <table class="admin-table__inner">

        
        <tr class="admin-table__row">
            <th class="admin-table__title">お名前
            </th>
            <th class="admin-table__title">性別</th>
            <th class="admin-table__title">メールアドレス</th>
            <th class="admin-table__title">お問い合わせの種類</th>
        </tr>
        <tr class="admin-table__row">
          <td class="admin-table__content"></td>   
          <td class="admin-table__content"></td>
          <td class="admin-table__content"></td>
          <td class="admin-table__content"></td>
          <form action=""class="form">
            <div class="form__button">
            <button class="form__button-submit--detail"type="submit">詳細</button>
            </div>
          </form>
        </tr>
      </table>
    </div>

</div>
@endsection
