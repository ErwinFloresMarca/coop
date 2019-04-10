<!DOCTYPE html>
<html>
<head>
  <title>Lista de personas en Coop</title>
</head>
<body>
  <table width='80%' border='1' align='center'>
    <thead>
      <tr>
        <th>Nro.</th>
        <th>C.I.</th>
        <th>Nombres</th>
        <th>Telefono</th>
        <th>Email</th>
      </tr>
    </thead>

    <tbody>
      <?php $i=1; ?>
      @foreach ($personas as $persona)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$persona->ci}}</td>
        <td>{{$persona->nombres.' '.$persona->paterno.' '.$persona->materno}}</td>
        <td>{{$persona->telefono}}</td>
        <td>{{$persona->telefono}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>
