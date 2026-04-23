@extends('layout.master')
@section('title', 'Shop @Garden')
    

@section('konten')
<div class="container mt-3">
  <h2>Buat Akun Baru !</h2>
  
  <form action="/welcome" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label>First Name:</label><br>
        <input type="text" name="first_name"><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="last_name"><br><br>
    </div>
    <p>Gender:</p>
  
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
      <label class="form-check-label" for="radio1">Male</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
      <label class="form-check-label" for="radio2">Female</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" disabled>
      <label class="form-check-label">Other</label>
    </div>
    Nasionality :
    <select class="form-select mt-3">
     <option>Indonesia</option>
     <option>Malaysia</option>
     <option>USA</option>
     <option>UK</option>
   </select>
   Language Spoken
   <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkDefault">
  <label class="form-check-label" for="checkDefault">
    Bahasa Indonesia
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
  <label class="form-check-label" for="checkChecked">
    English
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked>
  <label class="form-check-label" for="checkChecked">
    Others
  </label>
</div>
<div class="container mt-3">

   
    <div class="mb-3 mt-3">
      <label for="comment">Bio</label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  
</div>

  @endsection
