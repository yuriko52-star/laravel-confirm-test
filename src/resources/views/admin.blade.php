@exteds('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')
<form action="/logout" class="form" method="post">
    <div class="form__button">
       <button class="form__button-submit--logout"type="submit">logout</button>
    </div>
</form>
@endsection
@section('content')

<div class="admin__content">
    <div class="admin__heading">Admin</div>
        <div class="admin__utilities">
        <form action="/search" class="form__search"method="get">
        @csrf
        <div class="search-form__item">
            <input class="search-fotm__item-input" type="text" name="keyword"placeholder="名前やメールアドレスを入力してください"value="{{old('keyword')}}">
        <select name="gender"  class="search-form__item-select">
            <option value="性別" >性別</option>
            @foreach($contacts as $contact)
            <option value="{{ $contact['gender'] }}" >{{ $contact['gender'] }}</option>
            @endforeach
        </select>
        <select name="content"class="search-form__item-select" name="category_id">
            <option value="" >お問い合わせの種類</option>
            @foreach($categories as $category)
            <option value="{{ $category['id'] }}" >{{ $category['content'] }}</option>
            @endforeach
            
        </select>
        <select name="date" class="select__item">年/月/日</select>
        <div class="form__button">
            <button class="form__button-submit--search">検索</button>
        </div>
        </div>
        </form>   
        
        <form action="/reset" class="form"method="post">
            @csrf
        <div class="form__button">
            <button class="form__button-submit--reset">リセット</button>
        </div>
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
          <td class="admin-table__content">{{ $contact['name'] }}</td>   
          <td class="admin-table__content">{{$contact['gender'] }}</td>
          <td class="admin-table__content">{{ $ccontact['email'] }}</td>
          <td class="admin-table__content">{{$contact['category']['content'] }}</td>
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
