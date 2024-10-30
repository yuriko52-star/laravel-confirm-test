@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        Confirm
    </div>
    <form action="/" class="form" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }} {{ $contact['first_name'] }}"readonly>
                       
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $contact['gender'] }}"readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="text" name="email" value="{{ $contact['email'] }}"readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
                         <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}"><input type="hidden" name="tel3" value=" {{ $contact['tel3'] }}"readonly>
                         <p class="tel_number">{{$contact['tel1']}}{{$contact['tel2']}}{{$contact['tel3']}}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}"readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}"readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $contact['detail']}}"readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="{{ $contact['content'] }}"readonly>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__item">
           <div class="form__button">
            <button class="form__button-submit">送信</button>
           </div>
            <div class="link">
                <a href="" class="link__label">修正</a>
            </div>
        </div>

    </form>

</div>
@endsection