<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{$name}}</h1>
    <p>Bạn có đơn hàng đang được giao và sẽ nhận đc trong 2 đến 3 ngày {!! Carbon\Carbon::now()->format('d-m-Y') !!}</p>
</body>
</html>