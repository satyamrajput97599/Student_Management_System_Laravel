<x-head/>

<div class="row">
    <div class="col-md-4"></div> 
    <div class="col-md-4 border border-dark mt-5 p-2">
        <form >
        Enter id
            <input type="text" class="form-control" name="id" value="{{$student['id']}}">
            Enter name
            <input type="text" class="form-control" name="n" value="{{$student['name']}}">
            <label for="class" >class</label>
  <select class="form-control p-2" name="c" value="{{$student['class']}}">
            <option value="python 1-A" >python 1-A</option>
            <option value="java 2-B" >java 2-B</option>
            <option value="react 3-c" >react 3-C</option>
           
         </select>
        
          <input class="btn btn-primary mt-2"  name="submit" value="submit" type="submit">

</form>
    </div> 
    <div class="col-md-4"></div> 
</div>