@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <h3>Painel do usuário</h3>
            </div>
            <a href="{{ route('admin.index') }}" class="btn btn-outline-secondary btn-sm my-2">
                Relatório
            </a>
        </div>
    </div>
</div>
@endsection
