@extends('layouts.app')

@section('template_title')
    {{ $exercise->name ?? "{{ __('Show') Exercise" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Exercise</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('exercises.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Exercises:</strong>
                            {{ $exercise->exercises }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $exercise->type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
