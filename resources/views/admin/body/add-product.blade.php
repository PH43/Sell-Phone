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
                      <form class="row g-3" >
                        @csrf
                      <div class="col-12">
                     @foreach ($category as $c)
                     <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" data-id="{{ $c['id'] }}" value="{{ $c['id'] }}" >
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
                          <input type="text" class="form-control" name="name" placeholder="Name Product">
                        </div>
                        <div class="col-4" style="display: inline-block;">
                          <label class="form-label">Price Product</label>
                          <input type="text" class="form-control" name="price" placeholder="Price Product">
                        </div>
                        <div class="col-4" style="display: inline-block;margin-left: 2rem">
                          <label class="form-label">Quantity Product</label>
                          <input type="text" class="form-control" name="qty" placeholder="Quantity Product">
                        </div>
                        <div class="col-12">
                          <label class="form-label">Images</label>
                          <input class="form-control" type="file">
                        </div>
                        <input type="submit"  id="addproduct" style="margin-top: 20px;">
                    </div>
             
                      </form>
                    </div>



                  </div>
               </div>
               <script>
                $('#addproduct').click(function(e){
                  e.preventDefault();
                var category = $('input[name=flexRadioDefault]').val();
                var brand = $('.form-select').val();
                var name = $('input[name=name]').val();
                var price = $('input[name=price]').val();
                var qty = $('input[name=qty]').val();
                var _token   = $('input[name="_token"]').val();
                console.log(_token);
                $.ajax({
                  url: "{{ route('admin-add-product') }}",
                  type: "POST",
                  data:{ category_id: category, 
                          brand_id: brand,
                          name : name,
                          price :price,
                          qty :qty,
                          _token:  _token ,
                        
                  
                  },
                  success: function(data){
               console.log(data);
                            alert('Insert thành công');
                          }
                });
                
                });
                
                </script>
               <div class="col-12 col-lg-4">
                  <div class="card shadow-none bg-light border">
                    <div class="card-body">
                        <div class="row g-3">
                          <div class="col-12">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" placeholder="Price">
                          </div>
                          <div class="col-12">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                              <option>Published</option>
                              <option>Draft</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <label class="form-label">Tags</label>
                            <input type="text" class="form-control" placeholder="Tags">
                          </div>
                          <div class="col-12">
                            <div class="d-flex align-items-center gap-2">
                              <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Woman <i class="bi bi-x"></i></a>
                              <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Fashion <i class="bi bi-x"></i></a>
                              <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Furniture <i class="bi bi-x"></i></a>
                            </div>
                          </div>
                          <div class="col-12">
                            <h5>Categories</h5>
                            <div class="category-list">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Jeans">
                                <label class="form-check-label" for="Jeans">
                                  Jeans
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="FormalShirts">
                                <label class="form-check-label" for="FormalShirts">
                                  Formal Shirts
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="WomenShirts">
                                <label class="form-check-label" for="WomenShirts">
                                  Women Shirts
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Electronics">
                                <label class="form-check-label" for="Electronics">
                                  Electronics
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="SportsShoes">
                                <label class="form-check-label" for="SportsShoes">
                                  Sports Shoes
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Mobiles">
                                <label class="form-check-label" for="Mobiles">
                                  Mobiles
                                </label>
                              </div>
                            </div>
                           
                          </div>

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

<script>
  $('.info-product').hide();
  $('.form-check-input').click(function(){
  var a  =$('input[name="flexRadioDefault"]:checked').val();
  var url = new URL(window.location.href);
  url.searchParams.set('category', a );
$.ajax({
  type: "get",
  url:url,
  success: function(data){
    $('.info-product').show(500);
    var html = '';    
    html +=  '<select class="form-select" name="brands" aria-label="Default select example">' +
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