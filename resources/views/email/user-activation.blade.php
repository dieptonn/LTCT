<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activation Email - Allaravel.com</title>
</head>
<body>
    <p>
        Chào mừng {{ $user->name}} đã đăng kí thành viên tại allaravel.com. Bạn hãy click vào đường link sau đây để hoàn tất việc đăng kí.
    <br>
    <a href="{{$user->activation_link}}">{{ $user->activation_link }}</a>
    </p>
</body>
</html>
