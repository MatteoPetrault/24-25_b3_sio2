@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Modifier le rôle</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT') 
                        <!-- methode pour maj -->
                        <div class="form-group">
                            <label for="label">Nom du rôle</label>
                            <input type="text" class="form-control" id="label" name="label" value="{{ old('label', $role->label) }}" required>
                        <!--  la signification du olr veut dire recuperer les infos depuis la session en gros abonnée pour le permier -->
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6 text-start">
                                <a href="{{ route('roles.index') }}" class="btn btn-secondary">Annuler</a>
                            </div>
                            <div class="col-sm-6 text-end">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('pied')
<footer>pied de page</footer>
@stop
