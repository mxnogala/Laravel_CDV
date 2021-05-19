<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if ($errors ->any())
<div>
    <ul>
        @foreach ($errors->all() as $error) 
            <!-- <li>{{$error}}</li> -->
        @endforeach
    </ul>
</div>

@endif

<form action="UserController" method="get">
    {{@csrf_field()}}
    <input type="text" name="address" id="">
    @error('address')
    {{$message}}
  @enderror
  <br><br>
    <input type="email" name="email" id="">
    @error('email')
    {{$message}}
  @enderror
    <br><br>
    <input type="submit" value="Zatwierdź">
    </form>


</body>
</html>