<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="{{URL::asset('public/layout/css/bootstrap.min1.css')}}"> 
	<link rel="stylesheet" href="{{URL::asset('public/yout/css/mystyle.css')}}" >
	<style type="text/css">
		
		input {
			width: 300px;
			height: 20px;
			border-radius: 5px;
		}
		.form-group {
			margin: 20px 0;
		}
		.main {
			text-align: center;
		}
		label {
			display: block;
		}
		textarea {
			width: 300px;
			height: 100px;
			border-radius: 5px;
		}
	</style>
</head>	
<body>
	<div class="col-md-2"></div>
	<div class="col-md-6 main" style="margin-top: 50px;">
		<div class="panel-heading" ><h2>Thêm sản phẩm</h2></div>
		<div class="panel-body">
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tên sản phẩm</label>
					<input type="text" required name="name" class="form-control" placeholder="Tên sản phẩm..."value="" >
				</div>
				<div class="form-group">
					<label>Giá</label>
					<input type="text" required name="price" class="form-control" placeholder="Giá sản phẩm..."value="" >
				</div>
				<div class="form-group">
					<label>Số lượng</label>
					<input type="text" required name="quantity" class="form-control" placeholder="Số lượng..."value="" >
				</div>
				<div class="form-group">
					<label>Miêu tả</label>
					<textarea type="textarea" required name="description" id="description"></textarea>	
				</div>		
				<div class="form-group">
					<label>Hình ảnh</label>
					<input type="file" id="img"  name="img" class="form-control" placeholder="Hình ảnh..."value="">
				</div>
				<div class="form-group">
					<input type="submit" name="sub" class="form-control btn btn-primary"value="Thêm">
				</div>
				<div class="form-group">
					<a href="{{asset('\product')}}"><input type="button" name="sub" class="form-control btn btn-danger" placeholder="" value="Hủy bỏ" ></a>
				</div>
			</form>
		</div>	
	</div>
	<div class="col-md-2"></div>
</div>
</body>
</html>