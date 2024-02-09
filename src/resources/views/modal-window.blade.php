<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLat</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/modal-window.css')}}"/>
</head>
<body>
    <div class="modal-main">
        <div class="modal-main__close">
            <p>&times;（仮）</p><!--保留中-->
        </div>
        <div class="modal-main__table">
            <table>
                <tr>
                    <th>お名前</th>
                    <td>
                        <input type="text" name="last_name" value="{{$contact['last_name']}}" readonly/>
                        <input type="text" name="first_name" value="{{$contact['first_name']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                        <input type="hidden" name="gender" value="{{$contact['gender']}}" readonly/>
                        @if($contact['gender'] == '1')
                            {{'男性'}}
                        @elseif($contact['gender'] == '2')
                            {{'女性'}}
                        @else($contact['gender'] == '3')
                            {{'その他'}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input type="email" name="email" value="{{$contact['email']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>
                        <input type="tel" name="tell" value="{{$contact['tell']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>
                        <input type="text" name="address" value="{{$contact['address']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>
                        <input type="text" name="building" value="{{$contact['building']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                        <input type="hidden" name="category_id" value="{{$category['id']}}" readonly/>
                        {{category['content']}}
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <input type="text" name="datail" value="{{$contact['datail']}}" readonly/>
                    </td>
                </tr>
            </table>
            <div class="modal-main__delete">
                <form class="delete-form" action="/delete" method="post">
                    @method('delete')
                    @csrf
                    <div class="delete-form__button">
                        <input type="hidden" name="id" value="{{$content['id']}}">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>