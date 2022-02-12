<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(StudentFormRequest $request)
    {
        $data = $request->validated();
        Student::create($data);
        return redirect('/students')->with('message','Student Added Successfully');
    }
}
