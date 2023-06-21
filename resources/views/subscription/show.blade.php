@extends('layouts.app')

@section('template_title')
    {{ $subscription->name ?? "{{ __('Show') Subscription" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Subscription</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subscriptions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Subscription:</strong>
                            {{ $subscription->id_subscription }}
                        </div>
                        <div class="form-group">
                            <strong>Duration:</strong>
                            {{ $subscription->duration }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $subscription->price }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $subscription->type }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pay:</strong>
                            {{ $subscription->id_pay }}
                        </div>
                        <div class="form-group">
                            <strong>Id Activities:</strong>
                            {{ $subscription->id_activities }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $subscription->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
