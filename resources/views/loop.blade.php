<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <th>Marka</th>
    <th>Marka</th>
    <th>Marka</th>
    </tr>
    @for ($i=0; $i < count($car); $i++)
        <tr>
            <td>
            {{$car[$i]['mark']}}
            </td>
            <td>
            {{$car[$i]['model']}}
            </td>
            <td>
            {{$car[$i]['color']}}
            </td>
            </tr>

            @endfor
            </table>

            @foreach($car as $item)
            <div>

            @if ($loop->first)
            <span>
            Pierwszy element tablicy: 
            </span>
            @endif
            @if ($loop->last)
            <span>
            Ostatni element tablicy: 
            </span>
            @endif

            Marka: {{$item['mark']}}, model {{$item['model']}}, kolor: {{$item['color']}}
            </div>

            @endforeach
            
</body>
</html>