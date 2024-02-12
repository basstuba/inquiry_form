@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}"/>
@endsection

@section('link')
<nav class="header__item">
    <form class="header__item-form" action="/logout" method="post">
        @csrf
        <button class="header__item-form--button" type="submit">logout</button>
    </form>
</nav>
@endsection

@section('content')
<div class="main">
    <div class="main__title">
        <h2 class="main__title-logo">Admin</h2>
    </div>
    <div class="search">
        <form class="search-form" action="/admin/search" method="get">
            @csrf
            <div class="search-form__input">
                <input class="search-form__input-text" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{old('keyword')}}">
            </div>
            <div class="search-form__select">
                <select class="search-form__select-gender" name="gender">
                    <option value="">性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </div>
            <div class="search-form__select">
                <select class="search-form__select-kinds" name="category_id">
                    <option value="">お問い合わせの種類</option>
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="search-form__select">
                <input class="search-form__select-date" type="date" name="updated_at" value="{{old('updated_at')}}">
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
            <div class="search-form__reset">
                <button class="search-form__button-reset" type="reset">リセット</button>
            </div>
        </form>
    </div>
    <div class="main__action">
        <div class="export">
            <p>エクスポート（仮）</p><!--保留中-->
        </div>
        <div class="main__action-pagination">
            {{$contacts->links()}}
        </div>
    </div>
    <div class="search-table">
        <table>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
            @foreach($contacts as $contact)
            <tr>
                <td>
                    {{$contact['last_name']}}&emsp;{{$contact['first_name']}}
                </td>
                <td>
                    @if($contact['gender'] == '1')
                        {{'男性'}}
                    @elseif($contact['gender'] == '2')
                        {{'女性'}}
                    @else($contact['gender'] == '3')
                        {{'その他'}}
                    @endif
                </td>
                <td>
                    {{$contact['email']}}
                </td>
                <td>
                    {{$contact['category']['content']}}
                </td>
                <td>
                    <div class="modal">
                        <p>詳細（仮）</p><!--モーダルウィンドウ完成まで保留中-->
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection