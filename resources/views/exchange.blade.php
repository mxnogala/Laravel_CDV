<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kursy walut</title>
</head>
<body>
  <h3>
      Dane z nbp api: <br> 
  </h3>
  <h4>http://api.nbp.pl/api/exchangerates/tables/C</h4>
    <table style="border: 1px black solid;">
      <tr>
        <th>Waluta</th>
        <th>Skup</th>
        <th>Sprzedaż</th>
      </tr>
      @foreach ($rate[0]['rates'] as $r)
      @if ($r['code'] == 'EUR')
      <tr>
        <td>{{$r['currency']}}</td>
        <td>{{$r['bid']}}</td>
        <td>{{$r['ask']}}</td>
      </tr>
      @endif
      @if ($r['code'] == 'CHF')
      <tr>
        <td>{{$r['currency']}}</td>
        <td>{{$r['bid']}}</td>
        <td>{{$r['ask']}}</td>
      </tr>
      @endif
      @if ($r['code'] == 'USD')
      <tr>
        <td>{{$r['currency']}}</td>
        <td>{{$r['bid']}}</td>
        <td>{{$r['ask']}}</td>
      </tr>
      @endif
      @endforeach
  </table>
</body>
</html>