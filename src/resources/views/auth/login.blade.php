@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}"/>
@endsection

@section('link')
<nav class="header__item">
    <a class="header__item-register" href="/register">register</a>
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
                        <input type="email" name="email" placeholder="例:test@example.com" value="{{old('email')}}"/>
                    </li>
                    @error('email')
                    <li class="form__item-error">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="form__content">
                <ul class="form__item">
                    <li class="form__item-title">パスワード</li>
                    <li class="form__item-input">
                        <input type="password" name="password" placeholder="例:coachtech1106"/>
                    </li>
                    @error('password')
                    <li class="form__item-error">{{$message}}</li>
                    @enderror
                </ul>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>