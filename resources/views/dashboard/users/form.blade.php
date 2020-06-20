<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">@</span>
    </div>
    <!--<input type="text" class="form-control" placeholder="Name" name="name">-->
    {!! Form::text("name",null,['class'=>"form-control", 'placeholder'=>'Name']) !!}

    @if($errors->count() > 0)
            <span>{{$errors->first('name')}}</span>
    @endif

</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    <!--<input type="email" class="form-control" placeholder="Email">-->
    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
    @if($errors->count() > 0)
        <span>{{$errors->first('email')}}</span>
    @endif
</div>

<div class="input-group mb-3">
    <div class="input-group-append">
        <span class="input-group-text"><i class="fas fa-check"></i></span>
    </div>
    <!--<input type="password" name="password" placeholder="Password" class="form-control">-->
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
    @if($errors->count() > 0)
        <span>{{$errors->first('password')}}</span>
    @endif
</div>
<div class="input-group mb-3">
    <div class="input-group-append">
        <span class="input-group-text"><i class="fas fa-check"></i></span>
    </div>
    {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Password_confirmation']) !!}
    <!--<input type="password" name="re_password" placeholder="re-Password" class="form-control">-->

</div>
<div class="form-group">
    <label for="exampleInputFile">Your Photo </label>
    <div class="input-group">
        <div class="custom-file">
            <!--<input type="file" class="custom-file-input" id="exampleInputFile">-->
            {!! Form::file('photo',['class'=>'custom-file-input']) !!}
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
        </div>
    </div>
    @if(isset($row->photo))
    <div><br>
        <img src="{{URL::to('/').'/images/'.$row->photo}}" width="400" height="300"/>
    </div>
    @endif
</div>

<div class="'form-group">
    <label>Type</label>
{!! Form::select('admin',['0'=>'User','1'=>'admin'],null,['class'=>'custom-select']) !!}
</div>
<div class="card-footer">
    <!--<button type="submit" class="btn btn-info">Create</button>-->
    {!! Form::submit('Create',['class'=>'btn btn-info']) !!}
    <button type="submit" class="btn btn-default float-right">Cancel</button>
</div>
