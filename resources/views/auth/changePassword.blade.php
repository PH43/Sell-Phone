@extends('content/template/template')
@section('tittle')
    Đổi mật khẩu
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
            <form action="{{ route('changePassword') }}" id="changepassword" method="post">
                @csrf
                <div class="old-password">
                    <span for="">Mật khẩu cũ:</span>
                    <input type="password" id="oldpassword" name="oldpassword">

                </div>
                <div class="old-password">
                    <span for="">Mật khẩu mới:</span>
                    <input type="password" id="password" name="password">

                </div>
                <div class="old-password">
                    <span for="">Nhập lại mật khẩu:</span>
                    <input type="password" id="passwordagain" name="passwordagain">
                </div>
                <div style="width: 100%; height: 80px;text-align: center;clear: both;margin-top:20px;">
                    <input id="submit" style="margin-top: 20px;" class="btn btn-secondary" type="submit"
                        value="Đổi mật khẩu">
                </div>
            </form>

        </div>
    </div>
    <script>
        $(document).ready(function(){
        $('#changepassword').validate({
            rules: {
                oldpassword: {
                    required: true,

                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 24,
                },
                passwordagain: {
                    required: true,
                    equalTo: "#password"
                },
            },
            messages: {
                oldpassword: {
                    required: "Không được để trống",

                },
                password: {
                    required: "Không được để trống",
                    minlength: "Password phải lớn hơn 8 ký tự",
                    maxlength: "Password phải nhỏ hơn 24 ký tự",
                },
                passwordagain: {
                    required: "Không được để trống",
                    equalTo: "Nhập lại password không đúng"
                },
            }

        });
    });
    </script>


    <script>
        $('#submit').click(function(e) {
            e.preventDefault();
            if ($("#changepassword").valid()) {
                var form = document.getElementById('changepassword')
                var data = new FormData(form);
                $.ajax({
                    type: "POST",
                    url: "{{ route('changePassword') }}",
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        if(data == 1){
                          alert('đổi mật khẩu thành công');
                          $('#oldpassword').val('');
                          $('#password').val('');
                          $('#passwordagain').val('');
                        }else{
                          alert('Mật khẩu cũ sai');
                        }
                    }
                })
            }
        });
    </script>


@endsection
