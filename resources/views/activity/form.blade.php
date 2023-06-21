<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_activities') }}
            {{ Form::text('id_activities', $activity->id_activities, ['class' => 'form-control' . ($errors->has('id_activities') ? ' is-invalid' : ''), 'placeholder' => 'Id Activities']) }}
            {!! $errors->first('id_activities', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $activity->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_test') }}
            {{ Form::text('id_test', $activity->id_test, ['class' => 'form-control' . ($errors->has('id_test') ? ' is-invalid' : ''), 'placeholder' => 'Id Test']) }}
            {!! $errors->first('id_test', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_media') }}
            {{ Form::text('id_media', $activity->id_media, ['class' => 'form-control' . ($errors->has('id_media') ? ' is-invalid' : ''), 'placeholder' => 'Id Media']) }}
            {!! $errors->first('id_media', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_calendar') }}
            {{ Form::text('id_calendar', $activity->id_calendar, ['class' => 'form-control' . ($errors->has('id_calendar') ? ' is-invalid' : ''), 'placeholder' => 'Id Calendar']) }}
            {!! $errors->first('id_calendar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_exercises') }}
            {{ Form::text('id_exercises', $activity->id_exercises, ['class' => 'form-control' . ($errors->has('id_exercises') ? ' is-invalid' : ''), 'placeholder' => 'Id Exercises']) }}
            {!! $errors->first('id_exercises', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>