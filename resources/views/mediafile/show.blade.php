@extends('layouts.app')

@section('template_title')
    {{ $mediafile->name ?? "{{ __('Show') Mediafile" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mediafile</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mediafiles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Archive:</strong>
                            {{ $mediafile->archive }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $mediafile->name }}
                        </div>
                        <div class="form-group">
                            <strong>Genre:</strong>
                            {{ $mediafile->genre }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $mediafile->type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
