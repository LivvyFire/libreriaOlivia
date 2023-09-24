@extends('layouts.app')

@section('template_title')
    {{ $loan->name ?? "{{ __('Show') Loan" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Loan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Loan.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $loan->name }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $loan->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
