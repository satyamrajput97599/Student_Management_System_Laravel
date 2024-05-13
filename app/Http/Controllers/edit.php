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


class edit extends Controller
{
    public function getedit(Request $req)
    {
        if($req->input('submit'))
        {
           $id = $req->input('id');
            $course=$req->input('c');
           
            $user = course::firstOrNew(array('id' => $id));
            $user->course = $course;
            $user->save();
            return redirect("/course");            
}
        else{
           $id=$req->input('editid');
           $course = course::find($id);
           
         // print_r(json_decode(json_encode($course), true));
           return view("edit",['course'=>$course]);

        }
  
  echo "Edit is submited";     
    }
    public function editsubject(Request $req)
    {
        if($req->input('submit'))
        {
           $id = $req->input('id');
            $subject=$req->input('s');
           
            $user = subject::firstOrNew(array('id' => $id));
            $user->subject = $subject;
            $user->save();
            return redirect("/subject");            
}
        else{
           $id=$req->input('editid');
           $subject = subject::find($id);
           
         // print_r(json_decode(json_encode($course), true));
           return view("editsub",['subject'=>$subject]);

        }
  
  echo "Edit is submited";     
    }
  /*  public function editclass(Request $req)
    {
        if($req->input('submit'))
        {
            $id=$req->input('editid');
           $ob = clas::find($id);
          
         $ob= json_decode(json_encode($ob), true);
           return view("editclas",['data'=>$ob]);
                
}
        else{
            $id =$req->input("id");
            $course=$req->input("c");
            $level=$req->input("l");
            $section=$req->input("s");
           
             clas::find($id);
             
             $data->course=$course;
             $data->level=$level;
             $data->section=$section;
             
             $data->save();
           
            return redirect("/class");       
         

        }
  
      
    }*/
    public function editclass(Request $req)
    {
        if($req->input('submit'))
        {
           $id = $req->input('id');
            $course=$req->input('c');
            $level=$req->input('l');
            $section=$req->input('s');
           
            $user = clas::firstOrNew(array('id' => $id));
           
            $user->course = $course;
            $user->level = $level;
            $user->section = $section;
            
            $user->save();
            return redirect("/class");            
}
        else{
           $id=$req->input('editid');
           $class = clas::find($id);
           
         // print_r(json_decode(json_encode($course), true));
           return view("editclas",['class'=>$class]);

        }
  
     
    }
    public function editfaculty(Request $req)
    {
        if($req->input('submit'))
        {
           $id = $req->input('id');
            $name=$req->input('n');
            $email=$req->input('e');
            $contact=$req->input('c');
            $address=$req->input('a');
           
            $user = faculty::firstOrNew(array('id' => $id));
            $user->name = $name;
            $user->email = $email;
            $user->contact = $contact;
            $user->address = $address;
            $user->save();
            return redirect("/faculty");            
}
        else{
           $id=$req->input('editid');
           $faculty = faculty::find($id);
           
         // print_r(json_decode(json_encode($course), true));
           return view("editfac",['faculty'=>$faculty]);

        }
  
     
    }
    public function editstudent(Request $req)
    {
        if($req->input('submit'))
        {
           $id = $req->input('id');
            $name=$req->input('n');
            $course=$req->input('c');
           
            $user = student::firstOrNew(array('id' => $id));
            $user->name = $name;
            $user->course = $course;
            
            $user->save();
            return redirect("/student");            
}
        else{
           $id=$req->input('editid');
           $student = student::find($id);
           
         // print_r(json_decode(json_encode($course), true));
           return view("editstud",['student'=>$student]);

        }
  
     
    }
    public function editpers(Request $req)
    {
        if($req->input('submit'))
        {
           $id = $req->input('id');
            $class=$req->input('c');
            $faculty=$req->input('f');
            $subject=$req->input('s');
           
            $user = second::firstOrNew(array('id' => $id));
            $user->class = $class;
            $user->faculty = $faculty;
            $user->subject = $subject;
            
            $user->save();
            return redirect("/classpersubject");            
}
        else{
           $id=$req->input('editid');
           $second = second::find($id);
           
         // print_r(json_decode(json_encode($course), true));
           return view("editper",['data'=>$second]);

        }
  
     
    }
    
}
