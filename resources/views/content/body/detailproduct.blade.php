@extends('content/template/template')
@section('body')
    <style>
        body {
            background-color: white;
        }

        .body {
            margin-top: 50px;
            width: 96%;
            margin-left: 2%;
            height: auto;
            background-color: white;
         
        }

        .body div {
            float: left;
        }

        .display-product {

            border: 1px solid #b3b3b3;
            width: 45%;
            text-align: center;
            
        }

        .display-product img {

            width: 90%;
            object-fit: cover;
            
        }

        .detail-product {
            width: 50%;
            margin-left: 5%;
            height: auto;
            margin-top: 40px;

        }

        .detail-product span {
            padding: 8px 0px;
        }

        .categories-product {
            color: #2c2c2c;
            display: block;


        }

        .categories-product span {
            display: block;
        }

        .name-product {
            font-size: 28px;
            display: block;
        }

        .avaluate i {
            color: yellow;
        }

        .avaluate {
            color: darkgray;
        }

        .price-product {
            display: block;
            font-size: 22px;
        }

        .card-product {
            margin-top: 20px;
        }

        .card-product a {
            text-decoration: none;
            color: black;
        }

        .card-add {
            color: white;
            background-color: #2c2c2c;
            padding-left: 20px;
            padding-right: 20px;
        }

        .card-quantity a {

            margin: 0px;
            font-size: 20px;
            padding: 10px 18px;
            border: 1px solid #686868;



        }


        .card-product div {
            float: left;
            margin-right: 10px;
        }

        .card-infoDetail {

            margin-top: 50px;
        }

        .card-infoDetail span {

            line-height: 20px;
        }

        .card-infoDetail h5 {
            line-height: 60px;
        }

        .Share {
            margin-top: 40px;
            width: 90%;
        }

        .Share span {
            display: block;


            padding: 20px 10px;
            border: 1px solid rgb(100, 100, 100);
        }

        .Share span i {
            padding: 0px 10px;
        }

        .relatedProduct {
            width: 96%;
            clear: both;
            height: auto;
        margin-left: 2%;
            background-color:white;
            padding-bottom: 30px;
            border-radius: 10px;
            border: 1px solid #eeeeee
;
           
       
        }

        .showdetails-product {
            width: calc(20% - 20px);
            margin-left: 15px;
            height: auto;
            position: relative;
            display: inline-block;
            text-align: center;
        }

        .showdetails-product img {
            width: 100%;
        }

        .show-product {


            border: 1px solid rgb(204, 204, 204);
        }

        .show-product:hover .acctionWith-product {
            opacity: 1;
        }

        .acctionWith-product {

            width: 100%;
            transition: all 0.7s;
            opacity: 0;
            position: absolute;
            transform: translateY(-50px);


        }

        .acctionWith-product i {
            margin-left: 5px;
            padding: 13px 13px;
            background-color: #bdab98;

        }

        .acctionWith-product i:hover {
            background-color: #c27b43;
        }

        .info-product span {
            text-align: left;
            margin-top: 5px;
            display: block;
        }

        .relatedProduct h5 {
            text-align: center;
            font-size: 26px;
            padding: 30px;
            font-weight: 700;
            color: rgb(245, 16, 16);
        }
        .comment {
                clear: both;
                margin-top: 100px;
                width: 96%;
                margin-left: 2%;
                background-color:white;
                height: auto;
                padding: 20px 20px;
            border-radius: 10px;
            border: 1px solid #eeeeee;
            }

            .info-comment {
                width: 100%;

            }

            .info-comment h5 {
                float: left;
            }

    
     .enter-comment{
         margin-top: 40px;
         clear: both;
         width: 100%;
     }
     .enter-comment form{
         float: right;
         width: 95%;
         margin-top: 5px;
      
     }
    .enter-comment input[type="text"]{
        height: 50px;
        width: 90%;
        margin-left: 1%;
        border-radius: 10px;
     }
     .enter-comment input[type="submit"]{
         height: 50px;;
         width: 60px;
         border: 0px;
         background-color: orange;
         border-radius: 5px;
     }
     .enter-comment img{
        width: 60px;height: 60px;
        border-radius: 100%;
}
.show-comment{
        width: 100%;
        height: auto;
        clear: both;
        margin-top: 50px;
    }
    .get-comment {
        width: 100%;
        padding-bottom: 30px;
    }
    .get-comment img{
        float: left;
    }
    .user-comment{
  width: 65%;

        margin-left: 20px;
    }
    .user-comment h5{
  margin-right: 20px;
 
    }
    .user-comment span{
        opacity: 0.7;
    }
    .user-comment label{
        margin-top: 10px;
        display: block;
        width: 100%;

    }
   
    .impact-comment{
width: 100%;

text-align: right;
    }
    .impact-comment a{
        margin-right: 60px;
        font-size: 16px;
        text-decoration: none;
        color: #999999;
    }
    .mid {
        padding: 50px 0px;
        width: 100%;
        height: #f8f9fa;
    }
    </style>
    <div class="body">
        <div class="display-product">
            <img src="{{ asset('../public/images/product.png') }}" alt="">
        </div>
        <div class="detail-product">
            <span class="categories-product">Rượu / </span>
            <span class="name-product">Jack Daniel's Old</span>
            <span class="avaluate"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                    class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <span> 1 bài
                    đánh giá</span></span>
            <span class="price-product">
                $ 18,99
            </span>

            <div class="card-product">
                <div class="card-quantity"><a href="">-</a><a href="">1</a><a href="">+</a>

                    <a href="" style="color:white;   padding-left: 100px;
        padding-right: 100px;" class="card-add">ADD TO CART</a>
                    <a href="" class="card-heart"><i class="far fa-heart"></i></a>
                </div>

                <div class="card-infoDetail">
                    <span>Availability: In Stock</span>
                    <div class="card-info">
                        <h5>Details</h5>
                        <span>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen.
                        </span>
                    </div>
                </div>

                <div class="Share">
                    <span>Share on <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i
                            class="fab fa-instagram"></i></span>
                </div>


            </div>
        </div>

<div style="width: 100%; height:40px;border-bottom: 1px solid #eeeeee;">

</div>
    
    </div>

    <div style="background-color: #f8f9fa; clear: both;" class="mid">
        
        <div class="relatedProduct">
            <h5>Related Products!</h5>
            <div class="showdetails-product">
                <div class="show-product">
                    <img src="{{ asset('../public/images/product.png') }}" alt="">

                    <div class="acctionWith-product">
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-search-plus"></i>
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                .
                <div class="info-product">
                    <span> Dry Vineyard Sauvignon
                    </span>
                    <span> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                    <span>$ 500</span>
                </div>
            </div>

            <div class="showdetails-product">
                <div class="show-product">
                    <img src="{{ asset('../public/images/product.png') }}" alt="">

                    <div class="acctionWith-product">
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-search-plus"></i>
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                .
                <div class="info-product">
                    <span> Dry Vineyard Sauvignon
                    </span>
                    <span> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                    <span>$ 500</span>
                </div>
            </div>

            <div class="showdetails-product">
                <div class="show-product">
                    <img src="{{ asset('../public/images/product.png') }}" alt="">

                    <div class="acctionWith-product">
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-search-plus"></i>
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                .
                <div class="info-product">
                    <span> Dry Vineyard Sauvignon
                    </span>
                    <span> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                    <span>$ 500</span>
                </div>
            </div>

            <div class="showdetails-product">
                <div class="show-product">
                    <img src="{{ asset('../public/images/product.png') }}" alt="">

                    <div class="acctionWith-product">
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-search-plus"></i>
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                .
                <div class="info-product">
                    <span> Dry Vineyard Sauvignon
                    </span>
                    <span> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                    <span>$ 500</span>
                </div>
            </div>

            <div class="showdetails-product">
                <div class="show-product">
                    <img src="{{ asset('../public/images/product.png') }}" alt="">

                    <div class="acctionWith-product">
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-search-plus"></i>
                        <i class="far fa-heart"></i>
                    </div>
                </div>
                .
                <div class="info-product">
                    <span> Dry Vineyard Sauvignon
                    </span>
                    <span> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                    <span>$ 500</span>
                </div>
            </div>

        </div>
      
        <div class="comment">
          
            <div class="info-comment">

                <h5>136 Bình luận</h5>
                <div class="select-comment" style="float: right">
                    <select  class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            <div class="enter-comment">
<img src="{{ asset('../public/images/avatar-profile.png') }}" alt="">
<form action="">
    <input type="text">
    <input type="submit">
</form>

<div class="show-comment">

<div class="get-comment">
    <hr>
<img src="{{ asset('../public/images/avatar-profile.png') }}" alt="">
<div class="user-comment">
<h5 >Bill Gates</h5> 
<span><i class="fas fa-clock"></i> 5 ngày trước</span> <span><i></i></span>
<label>Cầu chương a!!</label>
</div>
<div class="impact-comment" style="float:right">
    <a href=""><i class="fas fa-thumbs-up"></i> 0</a>
    <a  href=""><i class="fas fa-reply"></i> Trả lời</a>
    <a  href=""><i class="fas fa-flag"></i> Báo xấu</a>
    </div>
</div>
<div class="get-comment">
    <hr>
<img src="{{ asset('../public/images/avatar-profile.png') }}" alt="">
<div class="user-comment">
<h5 >Bill Gates</h5> 
<span><i class="fas fa-clock"></i> 5 ngày trước</span> <span><i></i></span>
<label>See What You Can Do With Text Messaging
    More than 95% of text messages are read within five minutes of receipt. 
    EZ Texting makes it simple to communicate with your contacts via SMS messages.
    
    Increase Sales
    Increase Sales
    If you’re not promoting your business via text you’re leaving money on the table! With a 98% open rate, texting is one the best ways to let your customers know that it’s time to visit your business.
    
    Increase Attendance
    Increase Attendance
    Texting makes it easy to alert customers about upcoming appointments and events. It takes forever to call everyone on your list, and emails don't get opened. Automated text reminders increases attendance and reduces no-shows.
    
    Stay Top of Mind
    Stay Top of Mind
    Texting doesn't end when your customers make a purchase. Follow up with product information or customer service assistance. Your customers will be grateful, and your company will stay top-of-mind.
    
    Send Notifications
    Send Notifications
    Reach thousands of contacts at once with mass alerts and notifications. Texting is the easiest way to get the word out quickly.</label>
</div>
<div class="impact-comment" style="float:right">
    <a href=""><i class="fas fa-thumbs-up"></i> 0</a>
    <a  href=""><i class="fas fa-reply"></i> Trả lời</a>
    <a  href=""><i class="fas fa-flag"></i> Báo xấu</a>
    </div>
</div>

</div>

            </div>
            </div>
        </div>
    </div>

@endsection
