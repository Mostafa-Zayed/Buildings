
@foreach($rows as $row)
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">{{$row->namesetting}}</label>
                    <div class="col-sm-10">
                      @if($row->type == 0)
                          {!! Form::text($row->namesetting,$row->value,['class'=>'form-control']) !!}
                          @else
                        {!! Form::textarea($row->namesetting,$row->value,['class'=>'form-control']) !!}
                          @endif
                    </div>
                  </div>
                  @endforeach
<!--
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>







    <div class="form-group">
        <label for="inputDescription">Project Description</label>
        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
    </div>
    <div class="form-group">
        <label for="inputStatus">Status</label>
        <select class="form-control custom-select">
            <option selected="" disabled="">Select one</option>
            <option>On Hold</option>
            <option>Canceled</option>
            <option>Success</option>
        </select>
    </div>
    <div class="form-group">
        <label for="inputClientCompany">Client Company</label>
        <input type="text" id="inputClientCompany" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputProjectLeader">Project Leader</label>
        <input type="text" id="inputProjectLeader" class="form-control">
    </div>

-->
