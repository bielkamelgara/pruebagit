@extends('layouts.app')

@section('template_title')
    {{ $pay->name ?? "{{ __('Show') Pay" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pay</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pays.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pay:</strong>
                            {{ $pay->id_pay }}
                        </div>
                        <div class="form-group">
                            <strong>Paymennt:</strong>
                            {{ $pay->paymennt }}
                        </div>
                        <div class="form-group">
                            <strong>Credit Card Number:</strong>
                            {{ $pay->credit_card_number }}
                        </div>
                        <div class="form-group">
                            <strong>Type Payment:</strong>
                            {{ $pay->type_payment }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
