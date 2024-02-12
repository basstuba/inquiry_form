@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}"/>
@endsection

@section('link')
<nav class="header__item">
    <a class="header__item-login" href="/login">login</a>
</nav>
@endsection

@section('content')
<div class="main">
    <div class="main__title">
        <h2 class="main__title-logo">Register</h2>
    </div>
    <div class="main__content">
        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__content">
                <ul class="form__item">
                    <li class="form__item-title">お名前</li>
                    <li class="form__item-input">
                        <input type="text" name="name" placeholder="例:山田&emsp;太郎" value="{{old('name')}}"/>
                    </li>
                    <li class="form__item-error">
                    @error('name')
                        {{$message}}
                    @enderror
                    &emsp;
                    </li>
                </ul>
            </div>
            <div class="form__content">
                <ul class="form__item">
                    <li class="form__item-title">メールアドレス</li>
                    <li class="form__item-input">
                        <input type="email" name="email" placeholder="例:test@example.com" value="{{old('email')}}"/>
                    </li>
                    <li class="form__item-error">
                    @error('email')
                        {{$message}}
                    @enderror
                    &emsp;
                    </li>
                </ul>
            </div>
            <div class="form__content">
                <ul class="form__item">
                    <li class="form__item-title">パスワード</li>
                    <li class="form__item-input">
                        <input type="password" name="password" placeholder="例:coachtech1106"/>
                    </li>
                    <li class="form__item-error">
                    @error('password')
                        {{$message}}
                    @enderror
                    &emsp;
                    </li>
                </ul>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection