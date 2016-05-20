@extends('layout')

@section('title')
    Mi Titulo
@stop

@section('table')

 <div class="table-responsive">
  <table class="table table-striped table-hover" >

    <thead> 
      <tr>
        <!--<th>Send</th>-->
        <th>Date</th>
        <th>Domain</th>
        <th>Name</th>
        <th>Status</th>
        <th>Assigned to</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>

	      @if($formRequests)
	        @foreach($formRequests as $req)
			
	          <tr>
	            <!--<td>
                <div class="checkbox big">
                  <input type="checkbox" value="">
                </div>
              </td>-->
	            <td>{{ $req->created_at->format('d M, Y H:i:s') }}</td>
	            <td>{{ $req->domain }}</td>
              <td>{{ $req->names }}</td>
	            <td>Pending</td>
              <td v-model="name_sales">@{{name_sales}}</td>
	            <td><button class="btn btn_popup" id="{{ $req->id }}" data-toggle="modal" data-target="#myModal">Full Information</button></td>
	          </tr>
	        @endforeach
	      @endif
      </tbody>
  </table>
  </div>


@stop

@section('pagination')
	{!! $formRequests->render() !!}
@stop
