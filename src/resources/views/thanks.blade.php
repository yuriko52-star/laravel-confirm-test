<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>

<body>
   <div class="thanks__content">
        <form action="/thanks" class="form" method="post">
            @csrf
            <div class="thanks__inner"> 
                thank you
            </div>
            <div class="thanks__text">
                お問い合わせありがとうございます
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">HOME</button>
            </div>
           
        </form>
    </div> 
</body>
</html>