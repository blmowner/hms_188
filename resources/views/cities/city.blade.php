
    <div class='form-group  @if ($errors->has('city_name')) has-error @endif'>
        <label for='city_name' class='col-sm-3 control-label'>Name<span style='color:red;'> *</span></label>
        <div class='col-sm-9'>
            {{ Form::text('city_name', null, ['class'=>'form-control','placeholder'=>'','maxlength'=>'50']) }}
            @if ($errors->has('city_name')) <p class="help-block">{{ $errors->first('city_name') }}</p> @endif
        </div>
    </div>

    <div class='form-group  @if ($errors->has('state_code')) has-error @endif'>
        {{ Form::label('state_code', 'State',['class'=>'col-sm-3 control-label']) }}
        <div class='col-sm-9'>
            {{ Form::select('state_code', $state,null, ['class'=>'form-control','maxlength'=>'20']) }}
            @if ($errors->has('state_code')) <p class="help-block">{{ $errors->first('state_code') }}</p> @endif
        </div>
    </div>

    <div class='form-group'>
        <div class="col-sm-offset-3 col-sm-9">
            <a class="btn btn-default" href="/cities" role="button">Cancel</a>
            {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
        </div>
    </div>
