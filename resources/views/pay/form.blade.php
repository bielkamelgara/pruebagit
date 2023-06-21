<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pay') }}
            {{ Form::text('id_pay', $pay->id_pay, ['class' => 'form-control' . ($errors->has('id_pay') ? ' is-invalid' : ''), 'placeholder' => 'Id Pay']) }}
            {!! $errors->first('id_pay', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paymennt') }}
            {{ Form::text('paymennt', $pay->paymennt, ['class' => 'form-control' . ($errors->has('paymennt') ? ' is-invalid' : ''), 'placeholder' => 'Paymennt']) }}
            {!! $errors->first('paymennt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('credit_card_number') }}
            {{ Form::text('credit_card_number', $pay->credit_card_number, ['class' => 'form-control' . ($errors->has('credit_card_number') ? ' is-invalid' : ''), 'placeholder' => 'Credit Card Number']) }}
            {!! $errors->first('credit_card_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_payment') }}
            {{ Form::text('type_payment', $pay->type_payment, ['class' => 'form-control' . ($errors->has('type_payment') ? ' is-invalid' : ''), 'placeholder' => 'Type Payment']) }}
            {!! $errors->first('type_payment', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>