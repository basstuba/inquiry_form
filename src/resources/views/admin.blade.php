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
            <a class="export-button" href="{{route('admin.export')}}">エクスポート</a>
        </div>
        <div class="main__action-pagination">
            {{$contacts->links()}}
        </div>
    </div>
    <div class="search-table">
        <table search-table__main>
            <tr class="search-table__content">
                <th class="search-table__title">お名前</th>
                <th class="search-table__title">性別</th>
                <th class="search-table__title">メールアドレス</th>
                <th class="search-table__title">お問い合わせの種類</th>
                <th class="search-table__title"></th>
            </tr>
            @foreach($contacts as $contact)
            <tr class="search-table__content">
                <td class="search-table__item">
                    {{$contact['last_name']}}&emsp;{{$contact['first_name']}}
                </td>
                <td class="search-table__item">
                    @if($contact['gender'] == '1')
                        {{'男性'}}
                    @elseif($contact['gender'] == '2')
                        {{'女性'}}
                    @else($contact['gender'] == '3')
                        {{'その他'}}
                    @endif
                </td>
                <td class="search-table__item">
                    {{$contact['email']}}
                </td>
                <td class="search-table__item">
                    {{$contact['category']['content']}}
                </td>
                <td class="search-table__item">
                    <div class="modal">
                        @livewire('modal', ['contact' => $contact])
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection