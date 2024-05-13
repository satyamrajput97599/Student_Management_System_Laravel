<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\course;
use App\Models\subject;
use App\Models\clas;
use App\Models\faculty;
use App\Models\student;
use App\Models\second;


class delete extends Controller
{
    public function delete(Request $req) 
    {
    $id=$req->input('delid');
     course::find($id)->delete();
     return redirect("/course");
               
  }
  public function deletesubject(Request $req) 
    {
    $id=$req->input('delid');
     subject::find($id)->delete();
     return redirect("/subject");
               
  }
  public function deleteclass(Request $req) 
    {
    $id=$req->input('delid');
     clas::find($id)->delete();
     return redirect("/class");
               
  }
  public function deletefaculty(Request $req) 
    {
    $id=$req->input('delid');
     faculty::find($id)->delete();
     return redirect("/faculty");
               
  }
  public function deletestudent(Request $req) 
    {
    $id=$req->input('delid');
     student::find($id)->delete();
     return redirect("/student");
               
  }
  public function deletepers(Request $req) 
  {
  $id=$req->input('delid');
   second::find($id)->delete();
   return redirect("/classpersubject");
             
}
}
