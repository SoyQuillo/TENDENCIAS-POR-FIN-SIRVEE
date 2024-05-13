@extends('layouts.app')

@section('title','Customer List')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
    <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header bg-secondary" style="font-size: 1.75rem;font-weight: 500; line-height: 1.2; margin-bottom: 0.5rem;">
							@yield('title')
								<a href="{{ route('customers.create') }}" class="btn btn-primary float-right" title="Create"><i class="fas fa-plus nav-icon"></i></a>
						</div>
						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover" style="width:100%">
								<thead class="text-primary">
									<tr>
										<th width="10px">ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Status</th>
										<th width="50px">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($customers as $customer)
									<tr>
										<td>{{ $customer->id }}</td>
                    					<td>{{ $customer->name }}</td>
                    					<td>{{ $customer->email }}</td>
                    					<td>{{ $customer->address }}</td>
                    					<td>{{ $customer->phone }}</td>
										<td>
											<input data-id="{{$customer->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
											data-toggle="toggle" data-on="Active" data-off="Inactive" {{ $customer->status ? 'checked' : '' }}>
										</td>
										<td>
											<a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fas fa-pencil-alt"></i></a>
											<form class="d-inline delete-form" action="{{ route('customers.destroy', $customer->id) }}"  method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
 </div>
@endsection

@push('scripts')
	<script>
		$(document).ready(function(){
			$("#example1").DataTable()
		});
		$(function() {
			$('.toggle-class').change(function() {
				var status = $(this).prop('checked') == true ? 1 : 0;
				var customer_id = $(this).data('id');
				$.ajax({
					type: "GET",
					dataType: "json",
					url: 'changestatuscustomer',
					data: {'status': status, 'customer_id': customer_id},
					success: function(data){
					  console.log(data.success)
					}
				});
			})
		  })
	</script>
	<script>
	$('.delete-form').submit(function(e){
		e.preventDefault();
		Swal.fire({
			title: 'Are you sure?',
			text: "This record will be permanently deleted",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			cancelButtonText: 'Cancel'
		}).then((result) => {
			if (result.isConfirmed) {
				this.submit();
			}
		})
	});
	</script>
	@if(session('eliminar') == 'ok')
		<script>
			Swal.fire(
				'Deleted',
				'The record has been successfully deleted',
				'success'
			)
		</script>
	@endif
	<script type="text/javascript">
		$(function () {
			$("#example1").DataTable({
				"responsive": true, 
				"lengthChange": true, 
				"autoWidth": false,
				//"buttons": ["excel", "pdf", "print", "colvis"],
				"language": 
						{
							"sLengthMenu": "Show _MENU_ entries",
							"sEmptyTable": "No data available in table",
							"sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
							"sInfoEmpty": "Showing 0 to 0 of 0 entries",
							"sSearch": "Search:",
							"sZeroRecords": "No matching records found in table",
							"sInfoFiltered": "(Filtered from _MAX_ total entries)",
							"oPaginate": {
								"sFirst": "First",
								"sPrevious": "Previous",
								"sNext": "Next",
								"sLast": "Last"
							},
							/*"buttons": {
								"print": "Print",
								"colvis": "Column Visibility"
								/*"create": "New",
								"edit": "Change",
								"remove": "Delete",
								"copy": "Copy",
								"csv": "CSV File",
								"excel": "Excel table",
								"pdf": "PDF Document",
								"collection": "Collection",
								"upload": "Select file...."
							}*/
						}
			});//.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		});
	</script>
@endpush
