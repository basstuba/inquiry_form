<div class="modal">
    <button class="admin-modal" wire:click="openModal()" type="button">詳細</button>

    @if($showModal)
    <div class="modal-main">
        <div class="modal-main__content">
            <div class="modal-main__close">
            <button wire:click="closeModal()" type="button" class="modal-main__close-button">&times;</button>
        </div>
        <div class="modal-main__table">
            <table class="modal-content__table">
                <tr class="modal-content__item">
                    <th class="modal-content__title">お名前</th>
                    <td class="modal-content-param">
                        {{$contact['last_name']}}
                        {{$contact['first_name']}}
                    </td>
                </tr>
                <tr class="modal-content__item">
                    <th class="modal-content__title">性別</th>
                    <td class="modal-content-param">
                        @if($contact['gender'] == '1')
                            {{'男性'}}
                        @elseif($contact['gender'] == '2')
                            {{'女性'}}
                        @else($contact['gender'] == '3')
                            {{'その他'}}
                        @endif
                    </td>
                </tr>
                <tr class="modal-content__item">
                    <th class="modal-content__title">メールアドレス</th>
                    <td class="modal-content-param">
                        {{$contact['email']}}
                    </td>
                </tr>
                <tr class="modal-content__item">
                    <th class="modal-content__title">電話番号</th>
                    <td class="modal-content-param">
                        {{$contact['tell']}}
                    </td>
                </tr>
                <tr class="modal-content__item">
                    <th class="modal-content__title">住所</th>
                    <td class="modal-content-param">
                        {{$contact['address']}}
                    </td>
                </tr>
                <tr class="modal-content__item">
                    <th class="modal-content__title">建物名</th>
                    <td class="modal-content-param">
                        {{$contact['building']}}
                    </td>
                </tr>
                <tr class="modal-content__item">
                    <th class="modal-content__title">お問い合わせの種類</th>
                    <td class="modal-content-param">
                        {{$contact['category']['content']}}
                    </td>
                </tr>
                <tr class="modal-content__item">
                    <th class="modal-content__title">お問い合わせ内容</th>
                    <td class="modal-content-param">
                        {{$contact['datail']}}
                    </td>
                </tr>
            </table>
            <div class="modal-main__delete">
                <form class="delete-form" action="/delete" method="post">
                    @method('delete')
                    @csrf
                    <div class="delete-form__button">
                        <input type="hidden" name="id" value="{{$contact['id']}}">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    @endif
</div>
