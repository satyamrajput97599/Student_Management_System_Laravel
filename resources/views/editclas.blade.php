<x-head/>

<div class="row">
    <div class="col-md-4"></div> 
    <div class="col-md-4 border border-dark mt-5 p-2">
        <form >
        Enter id
            <input type="text" class="form-control" name="id" value="{{$class['id']}}">
            <label for="course" > enter Course</label>
  <select class="form-control p-2" name="c"value="{{$class['course']}}">
            <option value="python" >python</option>
            <option value="java" >java</option>
            <option value="react" >react</option>
            <option value="angular" >angular</option>
            <option value="php" >php</option>
         </select>
         Enter level
            <input type="text" class="form-control" name="l" value="{{$class['level']}}">
            Enter section
            <input type="text" class="form-control" name="s" value="{{$class['section']}}">
          <input class="btn btn-primary mt-2"  name="submit" value="submit" type="submit">

</form>
    </div> 
    <div class="col-md-4"></div> 
</div>