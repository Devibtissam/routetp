@extends('layouts/main')



@section('content')

{{-- <?php print_r($contact);?> --}}
<div class="container mt-5">
     <div class="p-3  bg-secondary text-white">
    <h1 class="fs-3">Contact Details</h1>
   </div>
    <form class="mt-5 mb-5">
        @if (!empty($contact))
            

        @foreach ($contact as $item)
            
       
  <!-- Name input -->
  <div class="form-outline mb-4 row">
    <p class="col">First Name</p>
    <p  class="col">{{$item['name']}}</p>
  </div>

   <!-- Email input -->
  <div class="form-outline mb-4 row">
    <p class=" col">Email address</p>
     <p  class="col">{{$item['email']}}</p>
  </div>

  <!-- Phone input -->
  <div class="mb-4 row">
    <p class=" col">Phone</p>
    <p  class="col">{{$item['phone']}}</p>
  </div>

  <!-- Adresse input -->
  <div class=" mb-4 row">
    <p class=" col">Adresse</p>
    <p  class="col">
        @if (!empty($item['adresse']))
            {{$item['adresse']}}
            @else
            Not Available
        @endif
    </p>
  </div>

  
<div class="mb-4 row">
    <p  class="col">Company</p>
      <p  class="col">{{$item['company']}}</p>
</div>

  <!-- Submit button -->
  <div class="d-flex justify-content-center gap-3">

      <a href="#" type="submit" class="btn btn-danger btn-block mb-4">Edit</a>
      <button type="submit" class="btn btn-primary btn-block mb-4">Delete</button>
      <a href="{{route('index')}}" type="button" class="btn btn-outline-secondary btn-block mb-4">Cancel</a>
  </div>
  @endforeach
   @else
          <p class="text-center fs-2">Contact Not Found</p>  
    @endif
</form>
</div>
    
@endsection