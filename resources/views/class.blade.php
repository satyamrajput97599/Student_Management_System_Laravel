<x-head/>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
<style>
 .bg{
    background:#D2D0D2;
    
 }
 .bg1{
    color:black;
 }
 .bg2{
            background:#353944;
        }
       
        form{
            background:white;
            padding:30px;
            color:black;

        }
        .bg3{
         background:#DEDDE0;
      color:black;

           }
           table{
            background:white;
           }
           
           

  </style>
</head>
<body>
<div class="container-fuild bg">
    <div class="row">
    <div class="col-md-2">
        <x-nav/>
</div>
<div class="col-md-4 ">
<h5 class="bg3 p-2">Class Form</h5>
<form method="get">
  <label for="course" >Course</label>
  <select class="form-control p-2" name="c">
            <option value="python" >python</option>
            <option value="java" >java</option>
            <option value="react" >react</option>
            <option value="angular" >angular</option>
            <option value="php" >php</option>
         </select>
            Level
            <input type="text" class="form-control p-2  " name="l">
             Section
            <input type="text" class="form-control p-2 mt-3 " name="s">
         <center> <input class="btn btn-primary mt-5  "  name="submit" value="save" type="submit">
         <input class="btn btn-danger mt-5  "  name="submit" value="cancel" type="submit"></center>
        
        </form>
        </form>

</div>
<div class="col-md-6">
<h5 class="bg3 p-2">Subject list</h5>


<table class="table table-bordered table-striped table-hover ">
<tr>
    <td>ID</td>
   <td>course</td>
    <td>Action</td>
    
</tr>
@foreach($data as $row)
<tr>
    <td>{{$row["id"]}}</td>
    <td>{{$row["course"]}} {{$row["level"]}}-{{$row["section"]}}</td>
    
    <td><a href="/deleteclas?delid={{$row['id']}} " class="btn btn-primary">Delete</a>
    <a href="/editclas?editid={{$row['id']}}" class="btn btn-warning">Edit</a>
</td>
   
</tr>
@endforeach
</table>
   
</div>
</div>
</div>

</body>
