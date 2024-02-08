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
            <table>
                <tr>
                    <th>お名前</th>
                    <td>
                        {{--保留中<input type="text" name="name" value="{{$contact['name']}}" readonly/>--}}
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                        {{--保留中<input type="text" name="gender" value="{{$contact['gender']}}" readonly/>--}}
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        {{--保留中<input type="email" name="email" value="{{$contact['email']}}" readonly/>--}}
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>
                        {{--保留中<input type="tel" name="tell" value="{{$contact['tell']}}" readonly/>--}}
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>
                        {{--保留中<input type="text" name="address" value="{{$contact['address']}}" readonly/>--}}
                    </td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>
                        {{--保留中<input type="text" name="building" value="{{$contact['building']}}" readonly/>--}}
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                        {{--保留中<input type="text" name="category_id" value="{{$contact['category_id']}}" readonly/>--}}
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        {{--保留中<input type="text" name="datail" value="{{$contact['datail']}}" readonly/>--}}
                    </td>
                </tr>
            </table>
            <div class="form__action">
                <div class="form__action-button">
                    <button class="form__action-button--submit" type="submit">送信</button>
                </div>
                <div class="form__action-correction">
                    <a class="form__action-correction--link" href="/">修正</a>
                </div>
            </div>
        </form>
    </div>
</div>