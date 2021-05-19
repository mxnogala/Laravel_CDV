<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Contact Form</h3>
    <form action="ContactController" method="get">
    <label for="firstName">Name:</label>
    <input type="text" name="firstName" id="firstName"> <br><br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email"><br><br>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password"><br><br>
    <label for="number">Number: </label>
    <input type="text" name="number" id="number"><br><br>
    <label for="gender">Gender:</label>
    <div id="gender">
        <label for="male">Male</label>
        <input type="radio" name="male" id="male">
        <label for="female">Female</label>
        <input type="radio" name="female" id="female">
    </div>
    <button type="submit">Zatwierdź</button>

    </form>
</body>
</html>