@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? "{{ __('Show') Libro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Libro.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $libro->title }}
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $libro->author }}
                        </div>
                        <div class="form-group">
                            <strong>Year Of Publication:</strong>
                            {{ $libro->year_of_publication }}
                        </div>
                        <div class="form-group">
                            <strong>Genre:</strong>
                            {{ $libro->genre }}
                        </div>
                        <div class="form-group">
                            <strong>Loans Id:</strong>
                            {{ $libro->loans_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
