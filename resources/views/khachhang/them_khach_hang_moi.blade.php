@extends('layout_client/masterclient')
@section('title', 'Thông tin giỏ hàng')
@section('content')
<div class="content_container" style="margin-top: 50px">
		<div class="featured_title">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="margin-left: 0px; padding-left: 0px">
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Khách hàng</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Thông tin khách hàng</li>
						  </ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
						@if (session('alert'))
								<div class="alert alert-success">
										{{session('alert')}}
								</div>
						@endif
						<form action="" method="post"  role="form">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-row">
								<div class="col-md-6">
										<label>Họ khách hàng</label>
										<input type="text" name="ho_kh" class="form-control select2" value="{{ old('ho_kh')}}">
										<small id="ho_khHelp" class="form-text text-muted">
												@if ($errors->has('ho_kh'))
													{{ $errors->first('ho_kh')  }}
												@endif
										</small>
								</div>
								<div class="col-md-6">
										<label>Tên KH</label>
										<input type="text" name="ten_kh" class="form-control select2" value="{{ old('ten_kh')}}">
										<small id="ten_khHelp" class="form-text text-muted">
												@if ($errors->has('ten_kh'))
													{{ $errors->first('ten_kh')  }}
												@endif
										</small>
								</div>
						</div>
						<div class="form-group">
							<label>Địa chỉ</label>
							<input type="text" name="dia_chi" class="form-control select2" value="{{ old('dia_chi')}}">
						</div>
					<div class="form-group">
							<label>Điện thoại</label>
							<input type="text" name="dien_thoai" class="form-control select2" value="{{ old('dien_thoai')}}">
						</div>
						<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control select2" value="{{ old('email')}}">
							</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Thêm</button>
						</div>
					</form>
				</div>
				<!-- Sidebar -->
			</div>
			</div>
	</div>
@endsection
@section('script')
	@parent
 	<script>
    </script>
@endsection