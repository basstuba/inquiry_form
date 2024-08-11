@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}"/>
@endsection

@section('link')
<nav class="header__item">
    <a class="header__item-register" href="{{ route('register') }}">register</a>
</nav>
@endsection

@section('content')
<div class="main">
    <div class="main__title">
        <h2 class="main__title-logo">Login</h2>
    </div>
    <div class="main__content">
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__content">
                <ul class="form__item">
                    <li class="form__item-title">メールアドレス</li>
                    <li class="form__item-input">
                        <input class="input" type="email" name="email" placeholder="例:test@example.com" value="{{old('email')}}"/>
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
                        <input class="input" type="password" name="password" placeholder="例:coachtech1106"/>
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
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection