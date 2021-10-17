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
               <div class="col-12 col-lg-8">
                  <div class="card shadow-none bg-light border">


                    <div class="card-body">
                      <form class="row g-3"  enctype="multipart/form-data" id="insertform" >
                        {{ csrf_field() }}
                      <div class="col-12">
                     @foreach ($category as $c)
                     <div class="form-check">
                      <input class="form-check-input" type="radio" name="category_id" id="flexRadioDefault1" data-id="{{ $c['id'] }}" value="{{ $c['id'] }}" >
                      <label class="form-check-label" for="flexRadioDefault1">
                        {{$c['name']}}
                      </label>
                    </div>
                     @endforeach
                     
                      </div>

                    <div class="info-product" >
                      <div class="brands col-12">
                     
                      </div>
                        <div class="col-12">
                          <label class="form-label">Name Product</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name Product">
                        </div>
                        <div class="col-4" style="display: inline-block;">
                          <label class="form-label">Price Product</label>
                          <input type="text" class="form-control" id="price" name="price" placeholder="Price Product">
                        </div>
                        <div class="col-4" style="display: inline-block;margin-left: 2rem">
                          <label class="form-label">Quantity Product</label>
                          <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity Product">
                        </div>
                        <div class="col-12">
                          <label class="form-label">Description Product</label>
                          <input type="text" class="form-control" id="description" name="description" placeholder="Description Product">
                        </div>
                  
                        <div class="col-12">
                          <label class="form-label">Images</label>
                          <input class="form-control"  type="file" accept=".png, .jpg ,.jpeg" name="image" id="image">
                        </div>
                        <input type="submit"  id="addproduct" style="margin-top: 20px;">
                    </div>
             
                      </form>
                    </div>



                  </div>
               </div>

               <script>


function isNumeric(value) {
    return /^-?\d+$/.test(value);
}
                $('#addproduct').click(function(e){
                  console.log($('#image').val());
                  e.preventDefault();
                
                  if($('#name').val() == '' 
                 ||  $('#price').val() == '' 
                 || $('#qty').val() == '' 
                  || $('#description').val() == ''
                 || $('#image').val() == ''
                  ){

                    alert("Please don't leave it blank");
                  }if($.isNumeric($('#price').val()) == false || $.isNumeric($('#qty').val())  == false){
                    alert("Enter Invalid");
                  }
                  else{
                    var form = document.getElementById('insertform');
            
                 $.ajax({
                url: "{{ route('admin-insert-product') }}",
                type: 'post',
                    data: new FormData(form),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                     success: function(data){
                        alert('Insert thành công');

                      }
            });
                  }
              
                
                });
                
                </script>
               <div class="col-12 col-lg-4">
                  <div class="card shadow-none bg-light border">
                    <div class="card-body">
                      <h5>Discount</h5>
                   <form action="" method="post">
             @csrf
                    <div class="row g-3">
                      <div class="col-12">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name"  id="brand">
                      </div>
                    
                      <div class="col-12">
                        <h5>Categories</h5>
                        @foreach ($category as $cate )
                        <div class="category-list">
                          <div class="form-check">
                            <input  type="checkbox" value="{{ $cate['id'] }}"  id="category">
                            <label class="form-check-label" for="Jeans">
                          {{ $cate['name'] }}
                            </label>
                          </div>
                        </div>    
                        @endforeach
        
                      </div>

                    </div>
                    <input type="submit" id="insertBrand">
                   </form>
                    </div>
                  </div>  
              </div>

             </div><!--end row-->
           </div>
          </div>
       </div>
    </div><!--end row-->

</main>
<script>
  $('#insertBrand').click(function(e){
    e.preventDefault();
    var categories = Array.from(document.querySelectorAll("#category"))
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value);
    var brand = $("#brand").val();
    var token = $("input[name=_token]").val();
    console.log(token);
   $.ajax({
      type:"post",
      url: " {{route('admin-insert-brand')}} ",
      data:{
        categories:categories,
        brand:brand,
        _token:token,
        
      },
      success: function(data) {
        console.log(data);
      }
   });

   
  });
</script>
<script>
  $('.info-product').hide();
  $('.form-check-input').click(function(){
  var a  =$('input[name="category_id"]:checked').val();
  var url = new URL(window.location.href);
  url.searchParams.set('category', a );
$.ajax({
  type: "get",
  url:url,
  success: function(data){
    $('.info-product').show(500);
    var html = '';    
    html +=  '<select class="form-select" name="brand_id" aria-label="Default select example">' +
                          '<option selected>Open this select menu</option>' 
    $.each(data, function(key, data){
        $.each(data.brands, function(key, data){
  html +=    '<option value="'+ data.id +'"> ' + data.name + ' </option>' 
});

                                }) ;
              html +=      '</select>'
$(".brands").html(html);
  }
})
  });
</script>


@endsection