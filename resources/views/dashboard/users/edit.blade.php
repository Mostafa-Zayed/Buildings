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
                            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="card card-info">

                            <div class="card-header">
                                <h3 class="card-title">Create New User</h3>
                            </div>
                            <div class="card-body">

                            {!! Form::model($row,['route'=> ['dashboard.users.edit',$row->id],'method'=>'PATCH']) !!}

                                {!! Form::close() !!}
                            </div>
                            <!-- /.card-body -->

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
