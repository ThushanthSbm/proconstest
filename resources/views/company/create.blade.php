@extends('layouts.master')

@section('content')

<div class="container" >
 <div class="card card-primary"style="background-color:lightblue">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-edit"></i> Company</h3>
                <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
              </div>
              <form method="POST" action="{{route('companies.store')}}" enctype="multipart/form-data">
              @csrf
             
                <div class="card-body">
                <div class="form-group">
                <div class="form-group">
                        <label>Name</label>
                        <input type="text"  class="form-control" placeholder="Enter The Name"  id="name" name="name" value ="{{ old('name')}}" class="@error('name') is-invalid @enderror" >
                        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div></div>




                  <div class="form-group">
                  <label>Mail</label>
                        <input type="text" class="form-control" placeholder="Enter The Mail Address" id="mail" name="mail" value ="{{ old('mail')}}" class="@error('mail') is-invalid @enderror">
                        @error('mail')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</div><br>

<div class="form-group">
                    <label for="logo">Choose photo</label>
                    <input type="file" id="logo" name="file" value="">
                    </div>
                    
                    <div class="card-body">
                <div class="form-group">
                <div class="form-group">
                        <label>Website</label>
                        <input type="text"  class="form-control" placeholder="Enter website"  id="website" name="website" value ="{{ old('website')}}" class="@error('website') is-invalid @enderror" >
                        @error('website')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div></div>
        
                  <!-- </div> -->
                <div class="card-footer">
                <a href="{{route('companies.index')}}" class="btn btn-secondary btn-lg">Cancel</a>
                  <button type="submit" class="btn btn-primary  btn-lg  " value="save">Submit</button>
                </div>
                </div>
              </form>
              </div> 
            <!-- /.card -->
            </div>
@endsection