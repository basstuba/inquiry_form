@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="main">
    <div class="main__title">
        <h2 class="main__title-logo">Confirm</h2>
    </div>
    <div class="main__content">
        <form class="form" action="/thanks" method="post">
            @csrf
            <table class="form-item__table">
                <tr class="form-item__tr">
                    <th class="form-item__th">お名前</th>
                    <td class="form-item__td">
                        <input class="input-last_name" type="text" name="last_name" value="{{$contact['last_name']}}" readonly/>
                        <input class="input-first_name" type="text" name="first_name" value="{{$contact['first_name']}}" readonly/>
                    </td>
                </tr>
                <tr class="form-item__tr">
                    <th class="form-item__th">性別</th>
                    <td class="form-item__td">
                        <input class="input-gender" type="hidden" name="gender" value="{{$contact['gender']}}"/>
                        @if($contact['gender'] == '1')
                            {{'男性'}}
                        @elseif($contact['gender'] == '2')
                            {{'女性'}}
                        @else($contact['gender'] == '3')
                            {{'その他'}}
                        @endif
                    </td>
                </tr>
                <tr class="form-item__tr">
                    <th class="form-item__th">メールアドレス</th>
                    <td class="form-item__td">
                        <input class="input-email" type="email" name="email" value="{{$contact['email']}}" readonly/>
                    </td>
                </tr>
                <tr class="form-item__tr">
                    <th class="form-item__th">電話番号</th>
                    <td class="form-item__td">
                        <input class="input-tel" type="hidden" name="tell_1" value="{{$contact['tell_1']}}"/>
                        <input class="input-tel" type="hidden" name="tell_2" value="{{$contact['tell_2']}}"/>
                        <input class="input-tel" type="hidden" name="tell_3" value="{{$contact['tell_3']}}"/>
                        {{ $contact['tell_1']}}{{ $contact['tell_2']}}{{ $contact['tell_3']}}
                    </td>
                </tr>
                <tr class="form-item__tr">
                    <th class="form-item__th">住所</th>
                    <td class="form-item__td">
                        <input class="input-address" type="text" name="address" value="{{$contact['address']}}" readonly/>
                    </td>
                </tr>
                <tr class="form-item__tr">
                    <th class="form-item__th">建物名</th>
                    <td class="form-item__td">
                        <input class="input-building" type="text" name="building" value="{{$contact['building']}}" readonly/>
                    </td>
                </tr>
                <tr class="form-item__tr">
                    <th class="form-item__th">お問い合わせの種類</th>
                    <td class="form-item__td">
                        <input class="input-category" type="hidden" name="category_id" value="{{$contact['category_id']}}"/>
                        {{$category['content']}}
                    </td>
                </tr>
                <tr class="form-item__tr">
                    <th class="form-item__th">お問い合わせ内容</th>
                    <td class="form-item__td">
                        <input class="input-datail" type="text" name="datail" value="{{$contact['datail']}}" readonly/>
                    </td>
                </tr>
            </table>
            <div class="form__action">
                <div class="form__action-button">
                    <button class="form__action-button--submit" type="submit">送信</button>
                </div>
                <div class="form__action-correction">
                    <button class="form__action-correction--back" name="back">修正</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection