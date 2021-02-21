<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <div>
        <p>{{ $email->name }} dari alamat email {{ $email->email }} mengirimi anda email dengan pesan sebagai berikut :</p>
        <p>" {{ $email->text }} "</p>
    </div>
</body>
</html>
