@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
              <div class="row">
              <div class="col-md-6">
                <h3 class="card-title" style="margin-left:100px; font-size:20px;"><b>Company Details</b></h3>
                
                </div>
          

          
            <div class="col-md-4">
                <form action="{{ route('companies.index') }}" method="GET" role="search">

                    <div class="input-group"style="margin-left=30px;">
                        
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search company" id="term">
                        <span class="input-group-btn mr-6 mt-0">
                            <button class="btn btn-secondary" type="submit" title="Search company">
                                <span class="fas fa-search"></span>
                            </button>
                        </span><a href="{{ route('companies.index') }}" class=" mt-0">
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Logo</th>
                      <th>WebSite</th>
                      <th>Access</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach($companies as $company)
                  <!-- <tbody> -->
                    <!-- <tr> -->
                      <td>{{$company->id}}</td>
                      <td>{{$company->name}}</td>
                      <td>{{$company->mail}}</td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img  src="{{asset('/img/')}}/{{$company->profile}}" alt="Avatar" class="img-circle img-fluid" style="width:50px; height:60px;">
                              </li>
                              
                          </ul>
                      </td>
                      
                    <td>  {{$$company->website}}</td>
                    <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                   
                    <td class="project-actions text-left">
                         
                    <form id="destroy-form" action="{{route('companies.destroy' ,$company->id)}}" method="POST">
  
  @method('delete')
@csrf
                    
                                    <button type="submit" class ="btn btn-danger btn-sm" onclick="return confirm('Do U Want Remove')"><i class="fas fa-trash">
                              </i>
                              Delete </button>

                      <a class="btn btn-primary btn-sm" href="{{route('companies.show',$company->id)}}">
                              <i class="fas fa-folder">
                              </i>
                             Show
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('companies.edit',$company->id)}}">
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
                             <url class ="pagination" style="margin-right:450px;"> {{$companies->links()}}</url> 
                             </span>
                  <button type="button"  class="btn btn-primary float-right"><i class="far fa-credit-card"></i> Back
                    Details
                  </button>
                  
                </div>
              </div>
      </div>
 </div>
    
@endsection