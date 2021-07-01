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
						    <li class="breadcrumb-item active" aria-current="page">Thông tin đơn đặt hàng</li>
						  </ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Đơn đặt hàng</h3>
					<table class="table">
							<tr>
								<td><b>Số hóa đơn</b></td>
								<td>{{ $DonDatHang[0]->id }}</td>
								<td><b>Ngày hóa đơn</b></td>
								<td>{{ $DonDatHang[0]->ngay_hoa_don }}</td>
							</tr>
							<tr>	
								<td><b>Khách hàng</b></td>
								<td>{{ $DonDatHang[0]->ho_kh }}&nbsp;{{ $DonDatHang[0]->ten_kh }}</td>
								<td><b>Điện thoại</b></td>
								<td>{{ $DonDatHang[0]->dien_thoai }}</td>
								<td><b>Email</b></td>
								<td>{{ $DonDatHang[0]->email }}</td>
							</tr>
							<tr>	
								<td><b>Địa chỉ</b></td>
								<td colspan="5">{{ $DonDatHang[0]->dia_chi }}</td>
							</tr>
					</table>
					<table class="table">
						<thead>
						<tr style="background-color: #02acea"><td>#</td><td>Mã SP</td><td>Tên SP</td><td>Số lượng</td><td>Đơn giá</td><td>Thành tiền</td></tr>
						</thead>
						
						<tbody>
							<?php $i=1?>
							@foreach ($DonDatHang as $dh)
						    <tr>
						      <th scope="row"><?php echo $i; ?></th>
						      <td>{{ $dh->MaSP }}</td>
						      <td>{{ $dh->ten_san_pham }}</td>
						      <td>{{ $dh->so_luong }}</td>
						      <td>{{ number_format($dh->don_gia) }}</td>
						      <td>{{ number_format($dh->so_luong *$dh->don_gia) }}</td>
						    </tr>
						    <?php $i++;?>
						    @endforeach
						</tbody>
						<tfoot>
							<tr style="background-color: #02acea"><td colspan="5">Tổng tiền</td><td>{{ number_format($DonDatHang[0]->tong_tien) }}</td></tr>
							<tr style="background-color: #cacaca"><td colspan="5">Đặt cọc</td><td>{{ number_format($DonDatHang[0]->dat_coc) }}</td></tr>
							<tr style="background-color: #02acea"><td colspan="5">Còn lại</td><td>{{ number_format($DonDatHang[0]->con_lai) }}</td></tr>
						</tfoot>
					</table>
				</div>
				
			</div>
			</div>
	</div>
@endsection
@section('script')
	@parent
 	<script>
    </script>
@endsection