@extends('../template')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/desktop/user/login.css') }}">
@endsection
@section('font')
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
@endsection

@section('body-content')
		
			<div id="form-wrapper">
				<div id="form-container">
					<!--display error input message-->
					@if ($errors->any())
    					<div class="alert alert-danger">
        					<ul>
            		@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            		@endforeach
        					</ul>
   						 </div>
					@endif
					<!--end display input message-->
					<form method="post" action="{{ url('/login') }}">
						  {{ csrf_field() }}
						 <div class="input-wrapper">
						 	<span>Họ</span></br>
						  	<input type="text" name="first_name" value="{{ old('first_name') }}" />
						 </div>
						 <div class="input-wrapper">
						 	<span>Tên</span></br>
						  	<input type="text" name="last_name" value="{{ old('last_name') }}"/>
						 </div>
						 <div class="input-wrapper">
						  	<span>Địa Chỉ Email</span></br>
						  	<input type="email" name="email" value="{{ old('email') }}"/>
						 </div>
						 <div class="input-wrapper">
						  	<span>Mật Khẩu</span></br>
						  	<input type="password" name="password"/>
						 </div>
						 <div class="input-wrapper">
						  	<span>Nhập Lại Mật Khẩu</span></br>
						  	<input type="text" name="re_password"/>
						 </div>
						 <div class="input-wrapper">
						 	<button class="btn2"> Đăng Ký</button>
						 </div>
						 <div id="left-right-btn">
						 	<div class="btn2" id="btn2-left">
						 		<i class="fa fa-facebook-f"></i><span>Đăng Ký Bằng Facebook</span>
						 	</div>
						 	<div class="btn2" id="btn2-right">
						 		<span>Đăng Nhập</span><i class="fa fa-angle-right"></i>
						 	</div>
						 </div>
					</form>
				</div>
			</div>

		
@endsection
@section('js-bottom')
<script type="text/javascript" src="{{ asset('js/desktop/user/login.js') }}"></script>
@endsection