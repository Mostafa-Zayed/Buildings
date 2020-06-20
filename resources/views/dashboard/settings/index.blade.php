@extends('dashboard.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Website Settings</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                @foreach($rows as $row)
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">{{$row->namesetting}}</label>
                                        <div class="col-sm-10">
                                            @if($row->type == 0)
                                                {!! Form::text($row->namesetting,$row->value,['class'=>'form-control']) !!}
                                                @error($row->namesettign)
                                                    <span class="alert alert-danger">{{$message}}</span>
                                                @enderror
                                            @else
                                                {!! Form::textarea($row->namesetting,$row->value,['class'=>'form-control']) !!}
                                            @endif
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection



