@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Label du rôle : {{ $role->label }}</h5>
                </div>
                <div class="card-body">
                    <h5>ID : {{ $role->id }}</h5>
                    <p><strong>Label : </strong>{{ $role->label }}</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6 text-start">
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Retour</a>
                        </div>
                        <!-- on montre les infos mais avec la route si dessous on peut aller editer ensuite -->
                        <div class="col-sm-6 text-end">
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('pied')
<footer>pied de page</footer>
@stop
