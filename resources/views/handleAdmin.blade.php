@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello! Admin</div>
                <div class="card-body">
					<div class="btn-group btn-group-justified">
						<a href="{{ route('admin.viewClaims','') }}"
						class="badge badge-primary badge-icon" data-popup="tooltip" title="View Claims"
						data-placement="bottom"><b>View Claims</b> <i
						class="icon-database-edit2 ml-1"></i></a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
