<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    //
    public function index(){
    
    
 
        //return view('welcome');

       // 1. Using Raw SQL QUeries
        // $users=DB::Select('select * from users');
        // dd($users);
       //2. Using Query builder
        //   $users=DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
        //   dd($users);

        //3. Eloquent ORM
        $students= Student::select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
        //   dd($users);;
        dd($students);

        // foreach($students as $student){
        //     echo "Student Name: ".$student->name." ";
        //     echo "Student Email: ".$student->email."<br>";
        // }


    }
}
