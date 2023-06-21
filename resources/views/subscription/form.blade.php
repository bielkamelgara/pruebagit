<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_subscription') }}
            {{ Form::text('id_subscription', $subscription->id_subscription, ['class' => 'form-control' . ($errors->has('id_subscription') ? ' is-invalid' : ''), 'placeholder' => 'Id Subscription']) }}
            {!! $errors->first('id_subscription', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duration') }}
            {{ Form::text('duration', $subscription->duration, ['class' => 'form-control' . ($errors->has('duration') ? ' is-invalid' : ''), 'placeholder' => 'Duration']) }}
            {!! $errors->first('duration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $subscription->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $subscription->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pay') }}
            {{ Form::text('id_pay', $subscription->id_pay, ['class' => 'form-control' . ($errors->has('id_pay') ? ' is-invalid' : ''), 'placeholder' => 'Id Pay']) }}
            {!! $errors->first('id_pay', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_activities') }}
            {{ Form::text('id_activities', $subscription->id_activities, ['class' => 'form-control' . ($errors->has('id_activities') ? ' is-invalid' : ''), 'placeholder' => 'Id Activities']) }}
            {!! $errors->first('id_activities', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $subscription->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>