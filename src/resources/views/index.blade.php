<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <h2 class="header">
        <div class="header__inner">
            お問い合わせ
        </div>
    </h2>

<main>
    <div class="contact-form__content">
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label-item">お名前</span>
                    <span class="form__label-required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input-content">
                        <input type="text" name="lastname" />
                        <span class="form__input-lastname">例）山田</span>
                    </div>
                    <div class="form__input-content">
                        <input type="text" name="firstname" />
                        <span class="form__input-lastname">例）太郎</span>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-item">性別</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-mens">
                            <input type="radio" name="gender" />
                            男性
                        </div>
                        <div class="form__input-ladies">
                            <input type="radio" name="gender" />
                            女性
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-item">メールアドレス</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__input-content">
                        <input type="email" name="email">
                        <span class="form__input-ex">例）test@example.com</span>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-item">郵便番号</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__input-content">
                        <span class="postcode">〒</span>
                        <input type="text" name="postcode">
                        <span class="form__input-ex">例）123-4567</span>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-item">住所</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__input-content">
                        <input type="text" name="address">
                        <span class="form__input-ex">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-item">マンション名</span>
                    </div>
                    <div class="form__input-content">
                        <input type="text" name="building_name">
                        <span class="form__input-ex">例）千駄ヶ谷マンション101</span>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-item">ご意見</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__input-content">
                        <textarea name="option"></textarea>
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述-->
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認</button>
            </div>
        </form>
    </div>
</main>
</body>

</html>