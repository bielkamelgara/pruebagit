@extends('layouts.app')

@section('template_title')
    {{ $calendar->name ?? "{{ __('Show') Calendar" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Calendar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calendars.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Calendar:</strong>
                            {{ $calendar->id_calendar }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $calendar->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
