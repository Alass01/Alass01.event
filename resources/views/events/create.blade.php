@extends('layout.app')

@section('content')
<!-- <h1>creer un  evenement </h1>
<form action="{{route('events.store')}}" method="POST">
{{csrf_field()}}
<input type="text" name="title" placeholder="enter title here of evenement"> <br>
{{$errors->first('title','<span class="errors"></span>')}}
<textarea name="description" id="" cols="30" rows="10" placeholder="description of evenement"></textarea> <br>
<input type="submit" value="create evenement">
</form> -->

<h1>FORMULAIRE D'INSCRIPTION</h1>
  <form action="{{route('events.store')}" method="POST">
  {{csrf_field()}}
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    {{$errors->first('nom','<span class="errors"></span>')}}
    <br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>
    <label for="telephone">Téléphone :</label>
    <input type="tel" id="telephone" name="telephone" required><br><br>
    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="S'inscrire">
  </form>

@stop

