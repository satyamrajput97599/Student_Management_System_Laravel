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
use App\Models\check;
class first extends Controller
{
     
    public function getlog(Request $req){
        if($req->input('submit')){
            $n=$req->input('n');
            $p=$req->input('p');
          
            $data = login::where('name', $n)
            ->where('password', $p)->get();

            $data=json_decode(json_encode($data),true);
            $x=sizeof($data);
            if ($x > 0)
           
            return redirect("/checkattendence");
            else {
                return view('login',["msg"=>"invalid username or password" ]);
            }
           
           

        }
        else {
            return view('login',["msg"=>""]);
        }
     }
     public function getcourse(Request $req)
    {
        if($req->input('submit'))
        {
            $c=$req->input('c');
            $d=$req->input('d');
          
          $ob=new course();
            $ob->course=$c;
            $ob->description=$d;
          
            
         $ob->save();
                     
        }
        else
        $ob=new course();
        $data=$ob->all();
         return view('course',["data"=>$data]);
        

    }
    
    
    public function getsubject(Request $req)
    {
        if($req->input('submit'))
        {
            $s=$req->input('s');
            $d=$req->input('d');
          
          $ob=new subject();
            $ob->subject=$s;
            $ob->description=$d;
          
            
         $ob->save();
                     
        }
        else
        $ob=new subject();
        $data=$ob->all();
         return view('subject',["data"=>$data]);
        

    }
    public function getclass(Request $req)
    {
        if($req->input('submit'))
        {
            $c=$req->input('c');
            $l=$req->input('l');
            $s=$req->input('s');
          
          $ob=new clas();
          $ob->course=$c;
          $ob->level=$l;
          $ob->section=$s;
          
            
         $ob->save();
                     
        }
        else
        $ob=new clas();
        $data=$ob->all();
         return view('class',["data"=>$data]);
        

    }
  
    
    public function getfaculty(Request $req)
    {
        if($req->input('submit'))
        {
            $id=$req->input('id');
            $n=$req->input('n');
            $e=$req->input('e');
            $c=$req->input('c');
            $a=$req->input('a');
            $ps=rand(9999,1000);
            $s=$req->input('s');
          $ob=new faculty();
            $ob->id=$id;
            $ob->name=$n;
            $ob->email=$e;
            $ob->contact=$c;
            $ob->address=$a;
            $ob->password=$ps;
            $ob->subject=$s;     
         $ob->save();
                    
        }
        $ob=new faculty();
        $data=$ob->all();
        $ob1=new subject();
        $data1=$ob1->all();
         return view('faculty',["data"=>$data,"data1"=>$data1]);
    }
    public function getstudent(Request $req)
    {
        if($req->input('submit'))
        {
            $id=$req->input('id');
            $n=$req->input('n');
            $c=$req->input('c');
            $s=$req->input('s');
          
          $ob=new student();
            $ob->id=$id;
            $ob->name=$n;
            $ob->course=$c;
            $ob->subject=$s; 
           
          
            
         $ob->save();
                       
        }
        $ob=new student();
        $ob1=new subject();
        $data=$ob->all();
        $data1=$ob1->all();
         return view('student',["data"=>$data,"data1"=>$data1]);

    }
    public function getper(Request $req)
    {
        if($req->input('submit'))
        {
            $c=$req->input('c');
            $f=$req->input('f');
            $s=$req->input('s');
            
          
          $ob=new second();
            $ob->class=$c;
            $ob->faculty=$f;
            $ob->subject=$s;
           
          
            
         $ob->save();
                      
        }
        else
        $ob=new second();
        $data=$ob->all();
         return view('classpersubject',["data"=>$data]);

    }
    public function getcheck(Request $req)
    {
         $data2 = [];
    
        if($req->input('submit')) {
            $s = $req->input('s');
            $data2 = student::where('subject', $s)->get();
            json_decode(json_encode($data2), true);
        }
        if($req->input('submit1'))
        {
            $a = $req->input();
            
            foreach($a as $k => $n)
            {
                echo "<br>$k   -     $n";
        
                if($k=="submit1")
                {}
                else
                {
                $d=date('d-m-y');
                $t=date('h:i:s');
                $dt=$d." ".$t;
                $ob=new check();
                $ob->sid=$k;
                $ob->st=$n;
                $ob->dt=$dt;
                $ob->save();
                }
              }
            }
        $ob1 = new subject();
        $data1 = $ob1->all();
    
        return view('checkattendence', ["data2" => $data2, "data1" => $data1]);
    }
    
    public function getrecord(Request $req)
    {
         $data2 = [];
    
        if($req->input('submit')) {
            $s = $req->input('s');
            $data2 = student::where('subject', $s)->get();
            json_decode(json_encode($data2), true);
        }
       
        $ob1 = new subject();
        $data1 = $ob1->all();
        $ob2=new check();
        $data3= $ob2->all();
    
        return view('attendencerecord', ["data2" => $data2, "data1" => $data1,"data3" => $data3]);
    }
    
  
}
