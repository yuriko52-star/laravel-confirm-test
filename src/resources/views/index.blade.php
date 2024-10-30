@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" >
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        Contact
    </div>
    <form action="/confirm" class="form" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text--name">
                <input type="text" name="last_name"placeholder="例:山田"value="{{ old('last_name')}}">
                <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}">
                </div>
                <div class="form__error">
                    <!-- あとで -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                  <label>
                    <input type="radio" name="gender" value="男性" checked >男性
                  </label>
                  <label>
                    <input type="radio" name="gender" value="女性">女性
                 </label>
                 <label>
                    <input type="radio" name="gender" value="その他">その他 
                </label>
                </div>
                <div class="form__error">
                    <!-- あとで -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                <input type="email" name="email" placeholder="例:test@example.com"value="{{ old('email') }}" >
                </div>
                <div class="form__error">
                    <!-- あとで -->
                </div>
            </div>
        </div>
         <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text--tel">
                  <input type="tel" name="tel1" placeholder="080"value="" >-
                  <input type="tel" name="tel2" placeholder="1234"value="" >-
                  <input type="tel" name="tel3" placeholder="5678"value="" >
                </div>
                <div class="form__error">
                    <!-- あとで -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                  <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3"value="" >
                </div>
                <div class="form__error">
                    <!-- あとで -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
                
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                <input type="building" name="building" placeholder="例:千駄ヶ谷マンション101"value="" >
                </div>
            </div>
        <div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                <select name="detail">
                    <option value="選択してください">選択してください</option>
                </select>
                </div>
                <div class="form__error">
                    <!-- あとで -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">
                    <!-- あとで -->
                </div>
            </div>
        </div>
        <div class="form__button">
           <button class="form__button-submit" type="submit">確認画面</button> 
        </div>
    </form>
</div>
@endsection