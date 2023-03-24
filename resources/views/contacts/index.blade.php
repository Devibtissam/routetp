@extends('layouts/main')

@section('content')   


<div class="mt-5 container contacts-wrapper">
   <div class="p-3 d-flex flex-row justify-content-between align-items-center bg-secondary text-white">
    <h1 class="fs-3">All contacts</h1>
    <a href="{{route('create')}}" class="btn btn-success d-flex align-items-baseline gap-2">
        <i class="bi bi-plus-circle-fill"></i>
        Add new</a>
   </div>
   <div class="p-3 d-flex flex-row justify-content-between align-items-center gap-3 contacts-filter">
    <div class="dropdown border rounded">
        <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
             All Companies
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
    </div>
    <div class="input-group">
        <form class="form-outline d-flex align-items-center">
            <input type="search" id="form1" class="form-control" value="search..." />
            <button class="btn border">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </form>
  
    </div>
   </div>


   {{-- contacts table --}}
   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    
 @if (!empty($data))

@foreach ($data as $contact)
<tr>
       <td>{{$contact['id']}}</td> 
       <td>{{$contact['name']}}</td> 
       <td>{{$contact['phone']}}</td> 
       <td>{{$contact['email']}}</td> 
       <td>{{$contact['company']}}</td> 
       <td class="d-flex justify-content-start align-items-center gap-1">
          <a href="{{route('show', $contact['id'])}}" class="text-decoration-none" ><i class="bi bi-eye d-flex align-items-center p-2 rounded-circle border text-primary border-primary fs-6"></i></a>
          <a href="#"  class="text-decoration-none" ><i class="bi bi-box-arrow-up-right d-flex align-items-center p-2 rounded-circle border text-secondary border-secondary fs-6"></i></a>
          <a href="#" class="text-decoration-none" ><i class="bi bi-x d-flex align-items-center p-2 rounded-circle border text-danger border-danger fs-6"></i></a>
          </td>
    @endforeach
    </tr>
  
@else
    <tr>
      <td colspan="6" class="text-center">No contact Found </td>
    </tr>
@endif

  </tbody>
</table>
</div>
@endsection