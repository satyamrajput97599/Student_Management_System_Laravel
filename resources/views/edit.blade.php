<x-head/>

<div class="row">
    <div class="col-md-4"></div> 
    <div class="col-md-4 border border-dark mt-5 p-2">
        <form method="get" enctype="multipart/form-data" >
        Enter id
            <input type="text" class="form-control" name="id" value="{{$course['id']}}">
              Enter course
            <input type="text" class="form-control" name="c"  value="{{$course['course']}}">
          <input class="btn btn-primary mt-2"  name="submit" value="submit" type="submit">

</form>
    </div> 
    <div class="col-md-4"></div> 
</div>