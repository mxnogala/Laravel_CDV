<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Informacje o użytkowniku</h1>
        <form action="UserController" method="get">
            <input type="text" name="email" id=""><br><br>
           {{@csrf_field()}}
            <input type="password" name="password" id=""><br><br>
            <input type="submit" value="Zatwierdź">
        </form>
    </div>
</body>
</html>