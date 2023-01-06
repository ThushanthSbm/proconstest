@extends('layouts.master')

@section('content')

<div class="container" >
 <div class="card card-primary"style="background-color:lightblue">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-edit"></i> Employee</h3>
                <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
              </div>
              <form method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">
              @csrf
             
              <div class="card-body">
                <div class="form-group">
                <div class="form-group">
                        <label>First Name</label>
                        <input type="text"  class="form-control" placeholder="Enter The First Name"  id="first_name" name="firstname" value ="{{ old('firstname')}}" class="@error('firstname') is-invalid @enderror" >
                        @error('firstname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div></div>




                  <div class="form-group">
                  <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter The Last Name" id="lastname" name="lastname" value ="{{ old('lastname')}}" class="@error('lastname') is-invalid @enderror">
                        @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</div><br>

<div class="form-group">
                  <label>Company</label>
                        <input type="text" class="form-control" placeholder="Enter The company id" id="company_id" name="company_id" value ="{{ old('company_id')}}" class="@error('company_id') is-invalid @enderror">
                        @error('company_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</div><br>

<div class="form-group">
                  <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter The Email" id="email" name="email" value ="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                        @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</div><br>

<div class="form-group">
                  <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Enter The Phone" id="phone" name="Phone" value ="{{ old('Phone')}}" class="@error('Phone') is-invalid @enderror">
                        @error('Phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</div><br>
        
                  <!-- </div> -->
                <div class="card-footer">
                <a href="{{route('employees.index')}}" class="btn btn-secondary btn-lg">Cancel</a>
                  <button type="submit" class="btn btn-primary  btn-lg  " value="save">Submit</button>
                </div>
                </div>
              </form>
              </div> 
            <!-- /.card -->
            </div>
@endsection