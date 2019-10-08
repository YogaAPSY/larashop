@extends('layouts.global')
@section('title') Category list @endsection
@section('content')

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-stripped">
			<thead>
				<tr>
					<th><b>Name</b></th>
					<th><b>Slug</b></th>
					<th><b>Image</b></th>
					<th><b>Actions</b></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
				<tr>
					<td>{{$category->name}}</td>
					<td>{{$category->slug}}</td>
					<td>
						@if($category->image)
							<img src="{{asset('storage/' . $category->image)}}" width="48px"/>
						@else
							No image
						@endif
					</td>
					<td>
					[TODO: actions]
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td colSpan="10">
						{{$categories->appends(Request::all())->links()}}
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
@endsection