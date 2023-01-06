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
<form action="{{route('companies.update',$company->id)}}" method="POST">
@method('put')
@csrf
                <div class="card-body"style="background-color:lightblue">
                <div class="form-group">
                <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control"   id="name" name="name" value="{{$company->name}}" >
                        </div>


                  <div class="form-group">
                  <label>Mail</label>
                        <input type="text" class="form-control"  id="mail" name="mail" value="{{$company->mail}}">
                      </div>
                     

                      <div class="form-group">
                  <label>Website</label>
                        <input type="text" class="form-control"  id="website" name="website" value="{{$company->website}}">
                      </div>
                  


           

                <div class="card-footer">
                  <button type="submit" class="btn btn-success  btn-lg " value="save">Update</button>
                </div>
              </form>
            </div> 
            <!-- /.card -->
            </div>

@endsection