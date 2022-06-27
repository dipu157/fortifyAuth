@extends('layouts.master')
@section('content')

<link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
@include('crud.modals.addModal')
@include('crud.modals.editModal')

<div class="page-wrapper">
	<div class="container-fluid p-t-10">
		<div class="flashmessage"></div>
		<div class="row m-b-10">
			<div class="col-12">
				<button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="fa fa-plus"></i>Add New Employee</button>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<div class="card card-outline-info">
					<div class="card-header">
						<h4 class="m-b-0 text-white">Manage Medicine </h4>
					</div>
					<div class="card-body" id="show_all_employees">
						<h1 class="text-center text-secondary my-5">Loading...</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
<footer class="footer"> © Developed By @ Dipu </footer>
</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

	fetchAllEmployees();

	function fetchAllEmployees(){
	$.ajax({
	url: '{{ route('fetchAll') }}',
	method: 'get',
	success: function(res){
	$("#show_all_employees").html(res);
	$("table").DataTable({
	order: [0,'desc']
	});
	}
	});
	}
	// Add Employee Code
	$("#add_employee_form").submit(function(e){
	e.preventDefault();
	const fd = new FormData(this);
	$("#add_employee_btn").text('Adding...');
	$.ajax({
	url: '{{ route('store') }}',
	method: 'post',
	data: fd,
	cache: false,
	processData: false,
	contentType: false,
	success: function(res){
	if(res.status == 200){
	Swal.fire(
	'Added',
	'Employee Added Successfully!',
	'success'
	)
	fetchAllEmployees();
	}
	$("#add_employee_btn").text('Add Employee');
	$("#add_employee_form")[0].reset();
	$("#addEmployeeModal").modal('hide');
	}
	});
	});
	//Edit Icon click for Employee Edit
	$(document).on('click', '.editIcon', function(e){
	e.preventDefault();
	let id = $(this).attr('id');
	$.ajax({
	url: '{{ route('edit') }}',
	method: 'get',
	data: {
	id: id,
	_token: '{{ csrf_token() }}'
	},
	success: function(res){
	$("#fname").val(res.first_name);
	$("#lname").val(res.last_name);
	$("#email").val(res.email);
	$("#phone").val(res.phone);
	$("#post").val(res.post);
	$("#avatar").html(`<img src="storage/images/${res.avatar}" width="100" class="img-fluid img-thumbnail">`);
	$("#emp_id").val(res.id);
	$("#emp_avatar").val(res.avatar);
	}
	});
	});
	// update employee ajax request
	$("#edit_employee_form").submit(function(e) {
	e.preventDefault();
	const fd = new FormData(this);
	$("#edit_employee_btn").text('Updating...');
	$.ajax({
	url: '{{ route('update') }}',
	method: 'post',
	data: fd,
	cache: false,
	contentType: false,
	processData: false,
	dataType: 'json',
	success: function(response) {
	if (response.status == 200) {
	Swal.fire(
	'Updated!',
	'Employee Updated Successfully!',
	'success'
	)
	fetchAllEmployees();
	}
	$("#edit_employee_btn").text('Update Employee');
	$("#edit_employee_form")[0].reset();
	$("#editEmployeeModal").modal('hide');
	}
	});
	});
	// delete employee ajax request
	$(document).on('click', '.deleteIcon', function(e) {
	e.preventDefault();
	let id = $(this).attr('id');
	let csrf = '{{ csrf_token() }}';
	Swal.fire({
	title: 'Are you sure?',
	text: "You won't be able to revert this!",
	icon: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
	if (result.isConfirmed) {
	$.ajax({
	url: '{{ route('delete') }}',
	method: 'delete',
	data: {
	id: id,
	_token: csrf
	},
	success: function(response) {
	console.log(response);
	Swal.fire(
	'Deleted!',
	'Your file has been deleted.',
	'success'
	)
	fetchAllEmployees();
	}
	});
	}
	})
	});
</script>
@endsection