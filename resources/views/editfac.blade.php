<x-head/>

<div class="row">
    <div class="col-md-4"></div> 
    <div class="col-md-4 border border-dark mt-5 p-2">
        <form >
        id
            <input type="text" class="form-control p-2 mt-1 " name="id" value="{{$faculty['id']}}">
            name
            <input type="text" class="form-control p-2 mt-1 " name="n" value="{{$faculty['name']}}">
            email
            <input type="text" class="form-control p-2 mt-1 " name="e" value="{{$faculty['email']}}">
            contact
            <input type="text" class="form-control p-2 mt-1 " name="c" value="{{$faculty['contact']}}">
            address
            <input type="text" class="form-control p-2 mt-1 " name="a" value="{{$faculty['address']}}">
            
          <input class="btn btn-primary mt-2"  name="submit" value="submit" type="submit">

</form>
    </div> 
    <div class="col-md-4"></div> 
</div>