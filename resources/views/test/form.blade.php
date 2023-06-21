<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('task1') }}
            {{ Form::text('task1', $test->task1, ['class' => 'form-control' . ($errors->has('task1') ? ' is-invalid' : ''), 'placeholder' => 'Task1']) }}
            {!! $errors->first('task1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('task2') }}
            {{ Form::text('task2', $test->task2, ['class' => 'form-control' . ($errors->has('task2') ? ' is-invalid' : ''), 'placeholder' => 'Task2']) }}
            {!! $errors->first('task2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('task3') }}
            {{ Form::text('task3', $test->task3, ['class' => 'form-control' . ($errors->has('task3') ? ' is-invalid' : ''), 'placeholder' => 'Task3']) }}
            {!! $errors->first('task3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('task4') }}
            {{ Form::text('task4', $test->task4, ['class' => 'form-control' . ($errors->has('task4') ? ' is-invalid' : ''), 'placeholder' => 'Task4']) }}
            {!! $errors->first('task4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('task5') }}
            {{ Form::text('task5', $test->task5, ['class' => 'form-control' . ($errors->has('task5') ? ' is-invalid' : ''), 'placeholder' => 'Task5']) }}
            {!! $errors->first('task5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('task6') }}
            {{ Form::text('task6', $test->task6, ['class' => 'form-control' . ($errors->has('task6') ? ' is-invalid' : ''), 'placeholder' => 'Task6']) }}
            {!! $errors->first('task6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('task7') }}
            {{ Form::text('task7', $test->task7, ['class' => 'form-control' . ($errors->has('task7') ? ' is-invalid' : ''), 'placeholder' => 'Task7']) }}
            {!! $errors->first('task7', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>