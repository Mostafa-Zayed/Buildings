<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    protected  $model;
    protected  $modelName;
    protected  $modelsUpper;
    protected  $modelsLower;
    public  function __construct(Model $model)
    {
        $this->model = $model;
        $this->modelName   = class_basename($model);
        $this->modelsUpper = str_plural($this->modelName);
        $this->modelsLower = strtolower($this->modelsUpper);
    }

    protected  function  select()
    {
        return [];
    }
   /* public function  index()
    {

        $rows = $this->model;
        $selctes = $this->select();
        if(!empty($selctes)){
            $rows = $rows::select($selctes);
        }

        $rows = $rows->get();
        return view('dashboard.users.index',compact('rows'));
    }
*/
    public function create()
    {

        return view('dashboard.users.create');
    }


    public function edit($id)
    {
        $row = $this->model::findOrFail($id);
        return view('dashboard.users.edit',compact('row'));
    }
    public function destroy($id){
        $row = $this->model::findOrFail($id)->delete();
        return redirect()->route('dashboard.users.index');
    }


}
