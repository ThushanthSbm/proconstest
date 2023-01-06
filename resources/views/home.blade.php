@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome Procons Test 1!') }}
                </div>

                <div class="navbar navbar-inverse bg-inverse">
         <div> 
               <h1 style="color:blue;margin-left:200px"><i><b>ProConsTest<b></i></h1>      
</div>
</div>
<section class="jumbotron text-center"  style ="background-color:lightblue">
    <div>
         <div class="container">
       
                       <h3 class="jumbotron-heading"><i class="fa fa-cloud"> P T A</i></h3>

             <div>
                 <a href="{{route('companies.index')}}" class="btn btn-info">Companies</a>
                 <a href="{{route('employees.index')}}" class="btn btn-warning">Employees </a>

            </div>
         </div><br><br><br>


         <div class="row">        
              <div class="col-lg-3 col-6">
            <!-- small box -->
                     <div class="small-box bg-info">
                            <div class="inner">
                                  <p>Company</p>
                              </div>
                                   <div class="icon">
                                      <i class="ion ion-bag"></i>
                                    </div>
                                  <a href="{{route('companies.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                        </div>
  <!-- ./col -->
                 <div class="col-lg-3 col-6">
            <!-- small box -->
                     <div class="small-box bg-success">
                           <div class="inner">
                                  <p>Employee</p>
                              </div>
                          <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                           </div>
                             <a href="{{route('employees.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                     </div>

</div>
</section>
            </div>
        </div>
    </div>
</div>
@endsection
