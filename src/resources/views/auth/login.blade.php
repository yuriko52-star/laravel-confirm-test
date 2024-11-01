@extends('layouts.app')
@section('button')
 <form action="/register" class="form" method="post">
    @csrf
    <div class="form__button">
        <button class="form__button-submit--register"type="submit">register</button>
    </div>
    
</form>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login_content">
    <div class="login-form__heading">
        login
    </div>
    <form class="form" action="/admin" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="test@example.com"value="{{ old('email') }}">
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password"placeholder="coachtech1106">
                </div>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit--login" type="submit">ログイン</button>
        </div>
    </form>
        

    
</div>
@endsection