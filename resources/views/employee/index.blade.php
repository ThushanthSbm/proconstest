@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
              <div class="row">
              <div class="col-md-6">
                <h3 class="card-title" style="margin-left:100px; font-size:20px;"><b>Employee  Details</b></h3>
                
                </div>
          

          
            <div class="col-md-4">
                <form action="{{ route('employees.index') }}" method="GET" role="search">

                    <div class="input-group"style="margin-left=30px;">
                        
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search company" id="term">
                        <span class="input-group-btn mr-6 mt-0">
                            <button class="btn btn-secondary" type="submit" title="Search employee">
                                <span class="fas fa-search"></span>
                            </button>
                        </span><a href="{{ route('employees.index') }}" class=" mt-0">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        
        
            <div class="col-md-2">
    <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
              </div>
              </div>
              </div>
              </div>
              
              <!-- /.card-header -->
              @if(session('status'))
<div class ="alert alert-success">
   {{session('status')}}
   </div>
@endif
              <div class="card-body table-responsive p-0" style="height: 300px; background-color:#ffcccc">
                <table class="table table-head-fixed table-hover table-striped project">
                  <thead>
                    <tr style="color:brown;">
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Email</th>
                      <th>Company</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Access</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach($employees as $employee)
                  <!-- <tbody> -->
                    <!-- <tr> -->
                      <td>{{$employee->id}}</td>
                      <td>{{$employee->firstname}}</td>
                      <td>{{$employee->lastname}}</td>
                      <td>{{$employee->company_id}}</td>
                      <td>{{$employee->email}}</td>
                      <td>{{$employee->phone}}</td>
                      
                  
                    <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                   
                    <td class="project-actions text-left">
                         
                    <form id="destroy-form" action="{{route('employees.destroy' ,$employee->id)}}" method="POST">
  
  @method('delete')
@csrf
                    
                                    <button type="submit" class ="btn btn-danger btn-sm" onclick="return confirm('Do U Want Remove')"><i class="fas fa-trash">
                              </i>
                              Delete </button>

                      <a class="btn btn-primary btn-sm" href="{{route('employees.show',$employee->id)}}">
                              <i class="fas fa-folder">
                              </i>
                             Show
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('employees.edit',$employee->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          </form>
                              </td>
                              
    
                    </tr>

                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      
                   <div class="modal-footer">
                   <div class="row">
                   
             <div class="row no-print">
                <div class="col-12">
                <span>
                             <url class ="pagination" style="margin-right:450px;"> {{$employees->links()}}</url> 
                             </span>
                  <button type="button"  class="btn btn-primary float-right"><i class="far fa-credit-card"></i> Back
                    Details
                  </button>
                 
                </div>
              </div>
      </div>
 </div>
    
@endsection