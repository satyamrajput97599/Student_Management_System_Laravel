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
         background:white;
      color:black;
      
     

           }
           form{
            background:white;
            padding:30px;
            color:black;
            
           
        }
        .bg11{
            background:white;
            
           }
           .bg3{
            padding:6px;
           
           }
           .bg4{
            background:#F5F5F5;
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
<form method="GET" >
    
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="class">Class per Subjects</label>
        </div>
        <div class="col-auto">
            <select class="form-control" name="s">
                @foreach ($data1 as $item)
                    <option value="{{$item['subject']}}">{{$item['subject']}}</option>
                @endforeach
            </select>
        </div>
       
        <div class="col-auto">
            <button class="btn btn-primary" name="submit" value="submit" type="submit">Search</button>
        </div>
    </div>
        </form>



    <div class="row mt-3">
        <div class="col-md-12">
        <table class="table table-bordered table-striped table-hover bg11">
                <tr>
                    <th>course</th>
                    <th>subject</th>
                    
                </tr>
                
  
                @foreach($data2 as $row)
                    <tr>
                        <td>{{$row['course']}}</td>
                       <td>{{ $row['subject']}}</td>
                        
                       
                    </tr>
                    
                @endforeach
        </table>
        
        <table class="table table-bordered table-striped table-hover ">
<tr>
    <td>ID</td>
   
    <td>attendence</td>
    
</tr>
@foreach($data3 as $row)
<tr>
    <td>{{$row["id"]}}</td>
    
    <td>{{$row["st"]}}</td>
    </tr>
@endforeach


</table>
<center><a href="/delete" class="btn btn-danger">Delete</a> 
<a href="/edit " class="btn btn-primary">edit</a></center>
         
          
        </div>
    </div>
    

          </div>
          </div>
</div>

</body>
