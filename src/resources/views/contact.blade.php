@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}"/>
@endsection

@section('content')
<div class="main">
    <div class="main__title">
        <h2 class="main__title-logo">Contact</h2>
    </div>
    <div class="main__content">
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">お名前</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <input class="form__group-input-name" type="text" name="last_name" placeholder="例:山田" value="{{old('last_name')}}"/>
                    <input class="form__group-input-name" type="text" name="first_name" placeholder="例:太郎" value="{{old('first_name')}}"/>
                </div>
            </div>
            <div class="form__group-error">
                @error('last_name','first_name')
                    {{$message}}
                @enderror
                &emsp;
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">性別</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input-gender">
                    <label><input type="radio" name="gender" value="1"/>男性</label>
                    <label><input type="radio" name="gender" value="2"/>女性</label>
                    <label><input type="radio" name="gender" value="3"/>その他</label>
                </div>
            </div>
            <div class="form__group-error">
                @error('gender')
                    {{$message}}
                @enderror
                &emsp;
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">メールアドレス</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <input class="form__group-input-email" type="email" name="email" placeholder="例:test@example.com" value="{{old('email')}}"/>
                </div>
            </div>
            <div class="form__group-error">
                @error('email')
                    {{$message}}
                @enderror
                &emsp;
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">電話番号</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input-tel">
                    <input class="form__group-input-tell" type="tel" name="tell_1" placeholder="080" value="{{old('tell_1')}}"/>
                    <p>&minus;</p>
                    <input class="form__group-input-tell" type="tel" name="tell_2" placeholder="1234" value="{{old('tell_2')}}"/>
                    <p>&minus;</p>
                    <input class="form__group-input-tell" type="tel" name="tell_3" placeholder="5678" value="{{old('tell_3')}}"/>
                </div>
            </div>
            <div class="form__group-error">
                @error('tell')
                    {{$message}}
                @enderror
                &emsp;
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">住所</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <input class="form__group-input-address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}"/>
                </div>
            </div>
            <div class="form__group-error">
                @error('address')
                    {{$message}}
                @enderror
                &emsp;
            </div>
            <div class="form__group-building">
                <div class="form__group-title">
                    <span class="form__group-title--name">建物名</span>
                </div>
                <div class="form__group-input">
                    <input class="form__group-input-building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{old('building')}}"/>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">お問い合わせの種類</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <select class="form__group-input-kinds" name="category_id">
                        <option value="">選択してください</option>
                        @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form__group-error">
                @error('category_id')
                    {{$message}}
                @enderror
                &emsp;
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">お問い合わせ内容</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <textarea class="form__group-input-text" name="datail" cols="45" rows="5" placeholder="お問い合わせ内容をご記載ください" value="{{old('datail')}}" wrap="hard"></textarea>
                </div>
            </div>
            <div class="form__group-error">
                @error('datail')
                    {{$message}}
                @enderror
                &emsp;
            </div>
            <div class="form__button">
                <button class="form__button-submit">確認画面</button>
            </div>
        </form>
    </div>
</div>
@endsection