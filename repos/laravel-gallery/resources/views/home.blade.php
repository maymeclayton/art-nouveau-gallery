@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modify Exhibits</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a href="exhibits/create">Create an Exhibit</a>
                    <br>
                    <a href="/exhibits/{{ $e->id }}/edit">Delete an Exhibit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
