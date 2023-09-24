<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $libro->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('author') }}
            {{ Form::text('author', $libro->author, ['class' => 'form-control' . ($errors->has('author') ? ' is-invalid' : ''), 'placeholder' => 'Author']) }}
            {!! $errors->first('author', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('year_of_publication') }}
            {{ Form::text('year_of_publication', $libro->year_of_publication, ['class' => 'form-control' . ($errors->has('year_of_publication') ? ' is-invalid' : ''), 'placeholder' => 'Year Of Publication']) }}
            {!! $errors->first('year_of_publication', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genre') }}
            {{ Form::text('genre', $libro->genre, ['class' => 'form-control' . ($errors->has('genre') ? ' is-invalid' : ''), 'placeholder' => 'Genre']) }}
            {!! $errors->first('genre', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('loans_id') }}
            {{ Form::select('loans_id', $loans , $libro->loans_id, ['class' => 'form-control' . ($errors->has('loans_id') ? ' is-invalid' : ''), 'placeholder' => 'Loans Id']) }}
            {!! $errors->first('loans_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>