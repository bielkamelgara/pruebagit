@extends('layouts.app')

@section('template_title')
    {{ $activity->name ?? "{{ __('Show') Activity" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Activity</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('activities.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Activities:</strong>
                            {{ $activity->id_activities }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $activity->date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Test:</strong>
                            {{ $activity->id_test }}
                        </div>
                        <div class="form-group">
                            <strong>Id Media:</strong>
                            {{ $activity->id_media }}
                        </div>
                        <div class="form-group">
                            <strong>Id Calendar:</strong>
                            {{ $activity->id_calendar }}
                        </div>
                        <div class="form-group">
                            <strong>Id Exercises:</strong>
                            {{ $activity->id_exercises }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
