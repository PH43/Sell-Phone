@extends('admin/layouts/template')
@section('body')
<style>
  .form-check{
    display: inline-block; 
    margin-right: 20px;
  } 
  .info-product div{
     margin-top: 10px;
  }
</style>
<main class="page-content">
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">eCommerce</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
        </ol>
      </nav>
    </div>
    <div class="ms-auto">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
    </div>
  </div>
  <!--end breadcrumb-->

    <div class="row">
       <div class="col-lg-12 mx-auto">
        <div class="card">
          <div class="card-header py-3 bg-transparent"> 
            <div class="d-sm-flex align-items-center">
              <h5 class="mb-2 mb-sm-0">Add New Product</h5>
              <div class="ms-auto">
                <button type="button" class="btn btn-secondary">Save to Draft</button>
                <button type="button" class="btn btn-primary">Publish Now</button>
              </div>
            </div>
           </div>
          <div class="card-body">
             <div class="row g-3">
            
               <div class="col-12 col-lg-12">
                  <div class="card shadow-none bg-light border">
                    <div class="card-body">
                      <h5>Discount</h5>
                      @if (isset($success))
                     <h5 style="color:red;">   {{ $success }}</h5>
                      @endif
                        <div class="row g-3">
                 <form  class="row g-3" action="{{ route('insert-discount') }}" method="post">
                  @csrf
                  <div class="col-12">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="col-12" >
                    <select class="form-select" name="init" aria-label="Default select example">
                        <option value="$" selected>$</option>
                        <option value="%">%</option>
                      </select>
                  </div>
                  <div class="col-12" >
                    <label class="form-label">Value</label>
                    <input type="text" class="form-control" name="value" placeholder="Value">
                  </div>
             
                  <div class="col-4">
                    <label for="start">Start date:</label>

                    <input type="date" id="start_date" name="start_date"
                           value="{{ $day }}"
                           min="{{ $day }}" max="2022-12-31">
                  </div>

                  <div class="col-5">
                    <label for="start">Start date:</label>
                    <input type="date" id="start" name="end_date"
                           value="{{ $day }}"
                           min="{{ $day }}" max="2023-12-31">
                  </div>  
                <div class="col-12" style="clear: both;text-align: center;">
            <div class="col-12">
              <input class="btn btn-dark" type="submit">
            </div>
                </div>
                 </form>

                        </div><!--end row-->
                    </div>
                  </div>  
              </div>

             </div><!--end row-->
           </div>
          </div>
       </div>
    </div><!--end row-->

</main>



@endsection