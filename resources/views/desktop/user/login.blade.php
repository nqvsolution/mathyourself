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
					@if( session('status') )
						<p>{{ session('status') }}</p>
					@endif
					<form method="post" action="{{ url('/dang-nhap') }}">
							{{ csrf_field() }}
						<div class="input-wrapper">
							<span>Địa Chỉ Email</span></br>
						  	<input type="email" name="email" value="{{ old('email') }}"/>
						</div>
						<div class="input-wrapper">
						  	<span>Mật Khẩu</span></br>
						  	<input type="password" name="password"/>
						</div>
						 <div class="input-wrapper">
						 	<button class="btn2"> Đăng Nhập</button>
						</div>
						<div id="left-right-btn">
						 	<div class="btn2" id="btn2-left">
						 		<i class="fa fa-facebook-f"></i><span>Đăng Nhập Bằng Facebook</span>
						 	</div>
						 </div>
					</form>
				</div>
			</div>

		
@endsection
@section('js-bottom')
<script type="text/javascript" src="{{ asset('js/desktop/user/login.js') }}"></script>
@endsection