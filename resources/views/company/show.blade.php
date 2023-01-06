@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" >
            <h1 >Company List</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

     
              <div class="card bg-light d-flex flex-fill" style="width:600px" margin-right:50px>
                <div class="card-header text-muted border-bottom-0" style="background-color:#85a3e0; text-align:center; font-size:20px;"><b>
                Company</b>
                </div>
                <div class="card-body pt-0"style="background-color:#ebf0fa;">
                  <div class="row">
                    <div class="col-7">
                    <h2 class="lead" style="margin-left:40px;"><i class="far fa-id-badge"></i> ID -<b>{{$company->id}}</b></h2><br>
                    <h2 class="lead" style="margin-left:40px;"><i class="fas fa-user-graduate"></i> {{$company->name}} </h2><br>
                    <h2 class="lead" style="margin-left:40px;"><i class="fa fa-venus-mars"></i>Mail : {{$company->mail}}</h2><br>
                        
                        <h2 class="lead" style="margin-left:40px";><i class="fa fa-rss"></i>WebSite : {{$company->website}}</h2><br>
                        
                    </div>
                    <div class="col-2 text-center">
                    <img  src="{{asset('/img/')}}/{{$company->logo}}" alt="Avatar" class="img-circle img-fluid" style="width:100px; height:200px;">
                    </div>
                  </div>
                </div>
                <div class="card-footer"style="background-color:#85a3e0">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary" style="color:lightblue;">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
             

        

</div>
<div class="modal-footer">
<a class="btn btn-primary" href="{{route('companies.index')}}" role="button">Company list</a>
</div>
@endsection