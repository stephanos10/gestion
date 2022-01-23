<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Detail approvisionnement</title>
  <link rel="stylesheet" href="{{asset('/vendors/stylepdf.css')}}">

</head>

<body>
  <header>
    <h1>Approvisionnement
    </h1>
  </header>
  <section class="flex">
    <dl>
      <dt>Appro Num # </dt>
      <dd>Appro{{$id}}</dd>
      <dt>Date d'etablissement</dt>
      <dd>{{$dates}}</dd>
    </dl>
  </section>
  
  <table>
    <thead>
      <tr> 
        <th>Code</th>
        <th>Model</th>
        <th>Marque</th>
        <th>Designation</th>
        <th>Prix</th>
      </tr>
    </thead>

    
    <tbody>
    @if(isset($matbon))
       @foreach($matbon as $bd)
      <tr>
        <td>Appro{{$id}}</td>
        <td>{{$bd['model']}}</td>
        <td>{{$bd['marque']}}</td>
        <td>{{$bd['designation']}}</td>
        <td>{{$bd['prix']}}</td>
      </tr>

      @endforeach 
                                
   @endif
     
    
    </tbody>
    <tfoot>
      <tr> 
        <td colspan="3">− Materiels de l'approvisionnement −</td>
        <td>&#8202;</td>
        <td>&#8202;</td>
      </tr>
    </tfoot>
  </table>

  <a href="/approliste">Retour a la page</a>
  <form>
<input type="button" value="Imprimer" onClick="window.print()">
</form>
 
</body>
<!-- partial -->
  
</body>
</html>
