@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Confirmer la suppression du rôle</h5>
                </div>
                <div class="card-body">
                    <p>Êtes-vous sûr de vouloir supprimer le rôle <strong>{{ $role->label }}</strong> ?</p>
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-sm-6 text-start">
                                <a href="{{ route('roles.index') }}" class="btn btn-secondary">Annuler</a>
                            </div>
                            <div class="col-sm-6 text-end">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
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
