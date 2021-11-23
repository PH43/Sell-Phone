@extends('content/template/template')
@section('tittle')
    User
@endsection
@section('body')
    <style>
        .form-Change {
            width: 100%;
            height: auto;
            margin: 5% 0%;

            text-align: center;
        }

        .Submit-form {
            border-radius: 5px;
            text-align: left;
            display: inline-block;
            border: 1px solid rgb(102, 102, 102);
            width: 40%;
            min-height: 200px;
        }

        .name-form {
            display: block;
            padding: 10px 10px;
            font-weight: bold;
            background-color: #eeeeee;
            border-bottom: 1px solid rgb(102, 102, 102);
        }

        .old-password input {

            float: right;
            margin-top: 10px;
            margin-right: 5%;
            width: 60%;
            border: 1px solid #dfdfdf;
            height: 34px;
            ;
            border-radius: 5px;


        }

        .old-password {

            margin-left: 5%;
        }

        .old-password span {
            margin-top: 14px;
            float: left;
            font-size: 18px;
            margin-right: 10%;
            font-family: system-ui;
        }

        .old-password label {
            color: red;
            margin-left: 50%;
        }

    </style>
    <div class="form-Change">
        <div class="Submit-form">
            <div class="name-form">Thay đổi mật khẩu</div>
            <form action="" id="updateInfo" method="post">
                @csrf
                <div class="old-password" style="text-align: left">
                    <span for="">Email:</span>
                    <input type="button"  value="{{$user->email}}">

                </div>
                <div class="old-password">
                    <span for="">Họ và tên:</span>
                    <input type="text" value="{{$user->name}}" id="name"  name="name">

                </div>
            

                <div class="old-password">
                    <span for="">Số điện thoại:</span>
                    <input type="text"  value="0{{$user->number_phone}}" id="phone" name="phone">

                </div>
             
             
                <div style="width: 100%; height: 80px;text-align: center;clear: both;margin-top:20px;">
                    <input id="update" style="margin-top: 20px;" class="btn btn-secondary" type="submit"
                        value="Thay đổi">
                </div>
            </form>

        </div>
    </div>
 

    <script>
        // ------------------------------Validation Cart--------------------------------------------------
            $("#updateInfo").validate({
                rules: {
                    "name": {
                        required: true,
                        minlength: 3,
                        maxlength: 24,
                        
                    },
                    "phone": {
                        required: true,
                        minlength: 9,
                        maxlength: 12,
                        number: true,
                    },
               
               

                },
                messages: {
                    "name": {
                        required: "Không được để trống",
                        minlength: "Họ và tên phải lớn hơn 3 ký tự",
                        maxlength: "Họ và tên phải ít hơn 24 ký tự",
                        string: "Tên không hợp lệ",
                    },
                    "phone": {
                        required: "Không được để trống",
                        minlength: "Số điện thoại không hợp lệ",
                        maxlength: "Số điện thoại không hợp lệ",
                        number: "Số điện thoại không hợp lệ",
                    },
                
            

                }

            });
  
    </script>


<script>
    $(document).on('click', '#update',function(e){
        e.preventDefault();
        if($('#updateInfo').valid() ){
            var name = $("#name").val();
        var phone = $("#phone").val();
        var token = $('input[name=_token]').val()
        
        $.ajax({
            type: 'POST',
            url: "{{route('updateAccount')}}",
            data:{
                name:name,
                phone:phone,
                _token:token,
            },
            success: function(data) {
                alert('Thay đổi thành công')
                $('.users').html('<a href="">'+name+'</a>')
          
            }
        });
        }
  
    });
</script>
@endsection
