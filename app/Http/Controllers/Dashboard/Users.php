<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Users\Store;
use App\Http\Controllers\Controller;
use DataTables;

class Users extends DashboardController
{
    //
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function  select()
    {
        return [
            'id',
            'name',
            'email'

        ];
    }

    public function index(){

        if(request()->ajax()){
            //$users = User::select('id','name','email')->get();
            //return datatables()->of($users)
            //return Datatables::of($users)
              //  ->addColumn('edit', function($data){
                //    $edit = '<a href="users/'.$data->id.'/edit" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</a>';
                  //  return $edit;
                //})->addColumn('delete',function($data){
                  //  $delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                    //return $delete;
                //})
                //->rawColumns(['edit','delete'])
                //->make(true);
            $users = User::select('id','name','email','admin')->get();
            return Datatables::of($users)
                ->editcolumn('name',function ($data){
                    return \Html::link('dashboard/users/'.$data->id.'/edit',$data->name);
                })
                ->addColumn('admin',function($data){
                    return $data->admin == 1 ? 'Admin' : 'User' ;
                })
                ->addcolumn('edit',function($data){
                    $edit = '<a href="users/'.$data->id.'/edit" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</a>';
                    return $edit;
                })
                ->addcolumn('delete',function($data){
                    //$delete = '<a href="users/'.$data->id.'/delete" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</a>';
                    //return $delete;
                    $delete =  \Form::model($data,['route'=> ['dashboard.users.destroy',$data->id],'method'=>'DELETE']);
                    $delete .= \Form::submit('Delete',['class'=>'btn btn-danger']) ;
                    $delete .= \Form::close();
                    return $delete;
                })
                ->rawColumns(['edit','delete'])
                ->make(true);
        }
        return view('dashboard.users.index');
    }

    //public function getData(){

    //}

    public function store(Store $request)
    {

        $data = $request->all();
        if($request->has('photo')){
            $photo = $request->file('photo');
            $new_name = rand().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('images'),$new_name);
            $data['photo']= $new_name;
        }
        $data['password'] = bcrypt($request->password);

        unset($data['_token'],$data['password_confirmation']);

        User::create($data);
        return redirect()-> route('dashboard.users.index');
    }
}
