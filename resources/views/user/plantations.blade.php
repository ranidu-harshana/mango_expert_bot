@extends('layouts.user_app')
@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Plantations</h1>
		<div class="card shadow mb-4">
            <div class="card-body">
              	<div class="table-responsive">
					<table id="example" class="display" style="width:100%">
						<thead>
								<tr>
										<th>Land Type</th>
										<th>Main City</th>
										<th>Mango Variety</th>
										<th>Month</th>
										<th>Season</th>
										<th>Zone</th>
										<th>Date</th>
								</tr>
						</thead>
						<tbody>
							@if ($user_details)
								@foreach ($user_details as $user_detail)
									<tr>
										<td>
											@if (array_key_exists("land", $user_detail))
												{{ $user_detail["land"] }}	
											@endif
										</td>
										<td>
											@if (array_key_exists("main_city", $user_detail))
												{{ $user_detail["main_city"] }}	
											@endif
										</td>
										<td>
											@if (array_key_exists("mango_variety", $user_detail))
												{{ $user_detail["mango_variety"] }}	
											@endif
										</td>
										<td>
											@if (array_key_exists("month", $user_detail))
												{{ $user_detail["month"] }}	
											@endif
										</td>
										<td>
											@if (array_key_exists("season", $user_detail))
												{{ $user_detail["season"] }}	
											@endif
										</td>
										<td>
											@if (array_key_exists("zone", $user_detail))
												{{ $user_detail["zone"] }}	
											@endif
										</td>
										<td>
											@if (array_key_exists("date", $user_detail))
												{{ $user_detail["date"] }}	
											@endif
										</td>
									</tr>
								@endforeach
							@endif
							
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->

@endsection