<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
class Settings extends DashboardController
{
    //
    public  function  __construct(Setting $model)
    {
        //parent::__construct($model);
    }

    public function index()
    {
        $rows = Setting::all();

        return view('dashboard.settings.index',compact('rows'));
    }

    public function store(Store $request)
    {

    }
}
