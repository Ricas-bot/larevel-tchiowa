<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nome: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Assunto: {{ $data['subject'] }}</p>
    <p>Messagem: {{ $data['message'] }}</p>
</body>
</html>