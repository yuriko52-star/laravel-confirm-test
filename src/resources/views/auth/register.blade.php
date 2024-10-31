@extends('layouts.app')



@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
<form action="" class="form">
    <div class="form__button">
       <button class="form__button-submit--login"type="submit">login </button>
    </div>
</form>
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        Register
    </div>
    <form action="/register" class="form" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">お名前</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="例:山田　太郎"value="{{ old('name') }}">
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    <div class="form__group">
            <div class="form__group-title">
              <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com"value="{{ old('email') }}">
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
                    <input type="password" name="password" placeholder="例:coachtech1106">
                </div>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="form__button">
            <button class="form__button-submit--register" type="submit">登録</button>
        </div>
    </form>
    
    
    
</div>
@endsection