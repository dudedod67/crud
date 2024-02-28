<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.main');
    }

    public function student(){
        return view('dashboard.student.all', [
            'student' => Student::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    public function kelas(){
        return view('dashboard.grade.all',[
            'kelass' => Kelas::all()
        ]);
    }

    public function showdashboard($student)
    {
      return view('dashboard.student.detail', [
        "title" => "detail-student",
        "student" => Student::find($student)
      ]);
    }
}