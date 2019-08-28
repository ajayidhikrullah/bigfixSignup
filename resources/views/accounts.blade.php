<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isiro Account</title>
</head>
<body>
    @foreach ($accounts as $account)
        <p>{{$account->name}}</p>
    @endforeach
</body>
</html>