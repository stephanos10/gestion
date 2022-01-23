<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bon de Commande</title>
  <link rel="stylesheet" href="{{asset('/vendors/stylepdf.css')}}">

</head>

<body>
  <header>
    <h1>Bon de Commande
    </h1>
  </header>
  <section class="flex">
    <dl>
      <dt>BD Num # </dt>
      <dd>ISI_0B{{$id}}</dd>
      <dt>Date d'etablissement</dt>
      <dd>{{$dates}}</dd>
    </dl>
  </section>
  
  <table>
    <thead>
      <tr> 
        <th>CodeBD</th>
        <th>Identifiant Materiel</th>
        <th>Designation</th>
        <th>Nombre</th>
        <th>Prix</th>
      </tr>
    </thead>

    
    <tbody>
    @if(isset($matbon))
       @foreach($matbon as $bd)
      <tr>
        <td>ISI_0B{{$id}}</td>
        <td>M{{$bd['id']}}</td>
        <td>{{$bd['designation']}}</td>
        <td>{{$bd['nombre']}}</td>
        <td>{{$bd['prix']}}</td>
      </tr>

      @endforeach 
                                
   @endif
     
    
    </tbody>
    <tfoot>
      <tr> 
        <td colspan="3">− Materiels du bon de commande −</td>
        <td>&#8202;</td>
        <td>&#8202;</td>
      </tr>
    </tfoot>
  </table>

  <a href="/listebon">Retour a la page</a>
  <form>
<input type="button" value="Imprimer" onClick="window.print()">
</form>
 
</body>
<!-- partial -->
  
</body>
</html>
