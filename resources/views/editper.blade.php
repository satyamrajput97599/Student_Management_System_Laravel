<x-head/>

<div class="row">
    <div class="col-md-4"></div> 
    <div class="col-md-4 border border-dark mt-5 p-2">
        <form >
        Enter id
            <input type="text" class="form-control" name="id" value="{{$data['id']}}">
           
            <label for="class" >class</label>
  <select class="form-control p-2" name="c" value="{{$data['class']}}">
            <option value="python 1-A" >python 1-A</option>
            <option value="java 2-B" >java 2-B</option>
            <option value="react 3-c" >react 3-C</option>
           
         </select>
         <label for="faculty" >faculty</label>
  <select class="form-control p-2" name="f" value="{{$data['faculty']}}">
            <option value="anjali" >anjali</option>
            <option value="amrita" >amrita</option>
            <option value="khushbu" >khushbu</option>
           
         </select>
         <label for="subject" >subject</label>
  <select class="form-control p-2" name="s" value="{{$data['subject']}}">
            <option value="subject 1" >subject 1</option>
            <option value="subject 2" >subject 2</option>
            <option value="subject 3" >subject 3</option>
           
         </select>
           
            
        
          <input class="btn btn-primary mt-2"  name="submit" value="submit" type="submit">

</form>
    </div> 
    <div class="col-md-4"></div> 
</div>