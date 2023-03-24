@extends('layouts/main')


@section('content')
<div class="container mt-5">
     <div class="p-3  bg-secondary text-white">
    <h1 class="fs-3">Add New Contact</h1>
   </div>
    <form class="mt-5 mb-5">
  <!-- Name input -->
  <div class="form-outline mb-4 row">
    <label class="form-label col" for="Name">First Name</label>
    <input type="text" id="Name" name="Name" class="form-control col" />
  </div>

   <!-- Email input -->
  <div class="form-outline mb-4 row">
    <label class="form-label col" for="email">Email address</label>
    <input type="email" name="Phone" id="email" class="form-control col" />
  </div>

  <!-- Phone input -->
  <div class="form-outline mb-4 row">
    <label class="form-label col" for="Phone">Phone</label>
    <input type="tel" id="Phone" name="Phone" class="form-control col" />
  </div>

  <!-- Adresse input -->
  <div class="form-outline mb-4 row">
    <label class="form-label col" for="Adress" name="Adress">Message</label>
    <textarea class="form-control col" id="Adress" rows="4"></textarea>
  </div>

  
<div class="mb-4 row">
    <label  for="company" class="col">Company</label>
      <select class="select col border-secondary p-1 rounded" id="company">
        <option selected disabled >Select Company</option>
        <option value="1">One</option>
        <option value="2">Two</option>
      </select>
</div>

  <!-- Submit button -->
  <div class="d-flex justify-content-center gap-3">

      <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
      <a href="{{route('index')}}" type="button" class="btn btn-outline-secondary btn-block mb-4">Cancel</a>
  </div>
</form>
</div>
    
@endsection