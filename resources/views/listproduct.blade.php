	<html>
	<head>
		<link rel="stylesheet" href="{{URL::asset('layout/css/bootstrap.min1.css')}}"> 
		<link rel="stylesheet" href="{{URL::asset('layout/css/mystyle.css')}}" >
	</head>

	<style type="text/css">
		
		head{
			background:#663300;
		}
		a {
			color:white;
		}
		p{
			color: white;
		}
		.navbar-nav li a:hover  {
			background-color: transparent;
			color: blue;
		}
		.dropdown-menu li a:hover  {
			background-color: transparent;
			color: black;
		}
		.dropdown-menu li a  {
			background-color: transparent;
			color: white;
		}   


		.text h4 {
			color: #FFFFFF;
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.text a {
			border-bottom: 1px dotted transparent;
			color: #FFDD00;
			font-weight: bold;
		}
		.text a:hover {
			border-color: #FFDD00;
		}
		.panel-body{
			text-align: center;

		}
		.panel-heading{
			text-align: left;
		}
		.btnAdd {
			background-color:blue;
			color: white;
			padding: 10px 20px;
			margin-top:10px;
			display: inline-block;
			border-radius: 10px;
		}
		a {
			text-decoration: none;
		}
		.btnAdd:hover {
			background-color: red;
		}
		th {
			align-content: center;
		}
		table {
			width: 100%;
		}
	</style>
	<body>
		<div class="col-md-10 main" style="margin-top: 50px;">
			<div class="panel-heading" ><h1>List Product</h1></div>
			<div class="btnAdd"><a href="{{asset('product\add')}}">Thêm sản phẩm</a></div>	
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên sản phẩm</th>  
						<th>Giá</th>  
						<th>Hình ảnh</th> 
						<th>Mô tả</th>
						<th>Số lượng</th> 
						<th>Sửa</th>  
						<th>Xóa</th> 
					</tr>
				</thead>
				<tbody> 
					@foreach($productlist as $product)
					<tr>
						
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{number_format($product->price,0,',','.')}}VNĐ</td>
						<td><img height="100px"src="{{'images/'.$product->image}}"></td>
						<td>{{$product->description}}</td>
						<td>{{$product->quanlity}}</td>
						<td><a href=""><button type="button" class="btn btn-warning" onclick="return confirm('Bạn có muốn sửa ?');"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
						</svg></button></a></td>
						<td><a href=""><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa ?');"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
							<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
						</svg></span></button></a></td>		
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</body>
	</html>
