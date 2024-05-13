<x-head/>

<div class="row">
    <div class="col-md-4"></div> 
    <div class="col-md-4 border border-dark mt-5 p-2">
        <form method="get" enctype="multipart/form-data" >
        Enter id
            <input type="text" class="form-control" name="id" value="{{$subject['id']}}">
              Enter subject
            <input type="text" class="form-control" name="s"  value="{{$subject['subject']}}">
          <input class="btn btn-primary mt-2"  name="submit" value="submit" type="submit">

</form>
    </div> 
    <div class="col-md-4"></div> 
</div>