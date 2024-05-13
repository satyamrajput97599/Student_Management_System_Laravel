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
         background:#DEDDE0;
      color:black;
      
     

           }
           form{
            background:white;
            padding:30px;
            color:black;
            
           
        }
        table{
            background:white;
            
           }
           .bg3{
            padding:6px;
           
           }
  </style>
</head>
<body>
<div class="container-fuild bg">
    <div class="row">
    <div class="col-md-2">
        <x-nav/>
</div>
<div class="col-md-9 mt-5">
<div class="row mt-5 p-2 ">
   <div class="col-md-6 bg2">
      <h4 class="bg2 ">list of Class per Subject</h4>
</div>
<div class="col-md-6 bg3 bg2 ">
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  +New Entry
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title bg2" id="exampleModalLabel">New Entry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form >
      <label for="class" >class</label>
  <select class="form-control p-2" name="c">
            <option value="python 1-A" >python 1-A</option>
            <option value="java 2-B" >java 2-B</option>
            <option value="react 3-c" >react 3-C</option>
           
         </select>
         <label for="faculty" >faculty</label>
  <select class="form-control p-2" name="f">
            <option value="anjali" >anjali</option>
            <option value="amrita" >amrita</option>
            <option value="khushbu" >khushbu</option>
           
         </select>
            
         <label for="subject" >subject</label>
  <select class="form-control p-2" name="s">
            <option value="subject 1" >subject 1</option>
            <option value="subject 2" >subject 2</option>
            <option value="subject 3" >subject 3</option>
           
         </select>
           
            
            

            <center> <input class="btn btn-primary mt-5  "  name="submit" value="save" type="submit">
         <input class="btn btn-danger mt-5  "  name="submit" value="cancel" type="submit"></center>
        </form>
      </div>
     
    </div>
  </div>
</div>
</div>
</div>
<table class="table table-bordered table-striped table-hover ">
<tr>
    <td>#</td>
   <td>class</td>
   <td>subject</td>
   <td>faculty</td>
    <td>action</td>
    
</tr>
@foreach($data as $row)
<tr>
    <td>{{$row["id"]}}</td>
    <td>{{$row["class"]}}</td>
   <td>{{$row["subject"]}}</td>
   <td>{{$row["faculty"]}}</td>
    
    <td><a href="/deleteper?delid={{$row['id']}} " class="btn btn-primary">Delete</a>
    <a href="/editper?editid={{$row['id']}}" class="btn btn-danger">Edit</a>
</td>
   
</tr>
@endforeach
</table>
</div>

</div>
</div>

</body>
