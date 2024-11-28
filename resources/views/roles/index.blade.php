@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <div class="row mb-3">
        <!-- Bouton "Créer" -->
        <div class="col-sm-12 text-end">
            <a href="{{ route('roles.create') }}" class="btn btn-success">Créer un rôle</a>
        </div>
    </div>
    <div class="row">
        @foreach ($roles as $role)
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $role->id }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $role->label }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </div>
                            <div class="col-sm">
                                <a href="{{ route('roles.show', $role->id) }}" class="btn btn-primary btn-sm">Montrer</a>
                            </div>
                            <div class="col-sm">
                                <!-- Formulaire pour supprimer un rôle -->
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@stop

@section('pied')
<footer>pied de page</footer>
@stop
