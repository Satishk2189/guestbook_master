@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
					@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
					@endif
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Description</th>
									<th>Amount</th>
									<th>Status</th>
									<th>Delete</th>
									<th class="text-center" style="width: 10%;"><i class="
										icon-circle-down2"></i></th>
								</tr>
							</thead>
							<tbody>
							  @if(!empty($claims) && $claims->count())
								@foreach ($claims as $claim)
								<tr>
									
									<td>{{ $claim->user_name }}</td>
									<td>
										<span class="badge badge-flat border-grey-800 text-default text-capitalize">
										{{ $claim->description }}
										</span>
									</td>
									<td>
										{{ $claim->description }}amount
									</td>
									<td>@if($claim->status ==0)
										<a class="btn btn-success text-white" href="{{ URL::route('admin.statusUpdate', $claim->id ) }}" id="appr">
										Approve
										<i class="icon-trash ml-1"></i>
										</a>
										@elseif($claim->status ==1)

										<a class="btn btn-danger text-white" href="{{ URL::route('admin.statusUpdate', $claim->id) }}" id="rej">
										Reject
										<i class="icon-trash ml-1"></i>
										</a>
										@else
										
										<span class="badge badge-flat text-default text-capitalize">
										<span class="btn-danger"></span>
										@endif
										</span>
									</td>
									<td class="text-center">
										<a class="btn btn-danger text-white" href="{{ URL::route('admin.deleteClaims', $claim->id) }}" id="deleteClaimsButton">
										DELETE
										<i class="icon-trash ml-1"></i>
										</a>
									</td>
								</tr>
								@endforeach
								@else
								<tr>
									<td colspan="10">There are no Records.</td>
								</tr>
								@endif
							</tbody>
						</table>
						{!! $claims->links() !!}
					</div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
	$(function () {
		 $("#deleteClaimsButton").click(function(){
			if (!confirm("Do you want to delete")){
				return false;
			}
		});
	});    
</script>
@endsection