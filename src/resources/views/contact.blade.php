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
                    <input type="text" name="last_name" placeholder="例:山田" value="{{old('last_name')}}"/>
                    <input type="text" name="first_name" placeholder="例:太郎" value="{{old('first_name')}}"/>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">性別</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <label><input type="radio" name="gender" value="1"/>男性</label>
                    <label><input type="radio" name="gender" value="2"/>女性</label>
                    <label><input type="radio" name="gender" value="3"/>その他</label>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">メールアドレス</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{old('email')}}"/>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">電話番号</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <input type="tel" name="tell_1" placeholder="例:080" value="{{old('tell_1')}}"/>
                    <p>&minus;</p>
                    <input type="tel" name="tell_2" placeholder="例:1234" value="{{old('tell_2')}}"/>
                    <p>&minus;</p>
                    <input type="tel" name="tell_3" placeholder="例:5678" value="{{old('tell_3')}}"/>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">住所</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}"/>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">建物名</span>
                </div>
                <div class="form__group-input">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{old('building')}}"/>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">お問い合わせの種類</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <select name="category_id">
                        <option value="">選択してください</option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問い合わせ</option>
                        <option value="5">その他</option>
                    </select>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__group-title--name">お問い合わせ内容</span>
                    <span class="form__group-title--mark">※</span>
                </div>
                <div class="form__group-input">
                    <textarea name="datail" cols="30" rows="10" placeholder="お問い合わせ内容をご記載ください" wrap="hard">
                        {{old('datail')}}
                    </textarea>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit">確認画面</button>
            </div>
        </form>
    </div>
</div>