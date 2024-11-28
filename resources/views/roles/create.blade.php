@extends('layouts.default')

@section('contenu')

<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Ajouter un Role</h3>
      <form action="{{ route('roles.store') }}" method="POST"> <!-- Changer 'role' en 'POST' ici -->
        @csrf
        <div class="form-group">
          <label for="label">Role</label>
          <input type="text" class="form-control" id="label" name="label" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>
  </div>
</div>
@stop

@section('pied')
<footer>pied de page</footer>
@stop