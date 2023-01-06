@extends('layouts.master')

@section('content')
<div class="container">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Company Edit</h3>
                <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
              </div>
<form action="{{route('employees.update',$employee->id)}}" method="POST">
@method('put')
@csrf
                <div class="card-body"style="background-color:lightblue">
                <div class="form-group">
                <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control"   id="firstname" name="firstname" value="{{$employee->firstname}}" >
                        </div>


                  <div class="form-group">
                  <label>last Name</label>
                        <input type="text" class="form-control"  id="lastname" name="lastname" value="{{$employee->lastname}}">
                      </div>
                     

                      <div class="form-group">
                  <label>Company</label>
                        <input type="text" class="form-control"  id="company_id" name="company_id" value="{{$employee->company_id}}">
                      </div>
                  
                      <div class="form-group">
                  <label>Email</label>
                        <input type="text" class="form-control"  id="email" name="email" value="{{$employee->email}}">
                      </div>

                      <div class="form-group">
                  <label>Phone</label>
                        <input type="text" class="form-control"  id="phone" name="phone" value="{{$employee->phone}}">
                      </div>

           

                <div class="card-footer">
                  <button type="submit" class="btn btn-success  btn-lg " value="save">Update</button>
                </div>
              </form>
            </div> 
            <!-- /.card -->
            </div>

@endsection