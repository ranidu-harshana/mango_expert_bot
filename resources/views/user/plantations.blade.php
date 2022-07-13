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
									<th>Action</th>
								</tr>
						</thead>
						<tbody>
							@if ($user_details)
								@php $crow = 0; @endphp
								@foreach ($user_details as $plant_id => $user_detail)
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
										<td>
											<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#fertilizerTableModal{{ $crow }}">
												Open
											</button>
											<!-- Modal -->
											<div class="modal fade" id="fertilizerTableModal{{ $crow }}" tabindex="-1" role="dialog" aria-labelledby="fertilizerTableModal{{ $crow }}Label" aria-hidden="true">
												<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="fertilizerTableModal{{ $crow }}Label">
															@if ($user_detail["zone"] == "wet_zone")
																<b>Fertilizer Details Table for Wet Zone</b>
															@elseif($user_detail["zone"] == "dry_zone")
																<b>Fertilizer Details Table for Dry Zone</b>
															@endif
														</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<table class="table table-hover table-dark table-bordered">
															<tr>
																<th>How / when to apply</th>
																<th colspan="3">Type</th>
																<th colspan="3">Amount of fertilizer required</th>
																<th>Action</th>
															</tr>
															
															@if (array_key_exists("zone", $user_detail))
															
																@php
																	$data = [];
																	$database = app('firebase.database');
																	if ($user_detail["zone"] == "wet_zone") {
																		$data = $database->getReference('for_wetzone_table')->orderByKey()->getSnapshot()->getValue();
																	} elseif ($user_detail["zone"] == "dry_zone") {
																		$data = $database->getReference('for_dryzone_table')->orderByKey()->getSnapshot()->getValue();
																	}
																	
																@endphp
																@php $i = 0; @endphp
																
																@foreach ($data as $fertilizer_id => $arr)
																	@if (($i == 2) && $user_detail["zone"] == "wet_zone")
																		<tr>
																			<td colspan="8"></td>
																		</tr>
																		<tr>
																			<th></th>
																			<th colspan="3">Type and amount per gram of tree</th>
																			<th colspan="3">Nutrition per gram plant</th>
																			<th></th>
																		</tr>
																		<tr class="text-center">
																			<th></th>
																			<th>Urea</th>
																			<th>ERP</th>
																			<th>MOP</th>
																			<th>N</th>
																			<th>P<sub>2</sub>O<sub>5</sub></th>
																			<th>K<sub>2</sub>O</th>
																		</tr>
																	@elseif(($i == 2) && $user_detail["zone"] == "dry_zone")
																		<tr>
																			<td colspan="8"></td>
																		</tr>
																		<tr>
																			<th></th>
																			<th colspan="3">Type and amount per gram of tree</th>
																			<th colspan="3">Nutrition per gram plant</th>
																			<th></th>
																		</tr>
																		<tr class="text-center">
																			<th></th>
																			<th>Urea</th>
																			<th>TSP</th>
																			<th>MOP</th>
																			<th>N</th>
																			<th>P<sub>2</sub>O<sub>5</sub></th>
																			<th>K<sub>2</sub>O</th>
																		</tr>
																	@endif

																	@if ($user_detail["zone"] == "wet_zone")
																		@if ($i == 8)
																			<tr class="text-center">
																				<th colspan="8" style="padding: 20px 0 20px 10px">For fruiting trees</th>
																			</tr>
																			
																		@endif
																		<tr>
																			<td>{{ $arr["1How When to apply"] }}</td>
															
																			@if (!is_array($arr["2Type"])) 
																				<td colspan="3">
																					{{ $arr["2Type"] }}
																				</td>
																			@endif
															
																			@if (is_array($arr["2Type"])) 
																				<td class="text-right"> {{ $arr["2Type"]["Urea"] }} </td>
																				<td class="text-right"> {{ $arr["2Type"]["ERP"] }} </td>
																				<td class="text-right"> {{ $arr["2Type"]["MOP"] }} </td>
																			@endif
															
																			@if (!is_array($arr["3Amount of fertilizer required"])) 
																				<td colspan="3">
																					{{ $arr["3Amount of fertilizer required"] }}
																				</td>
																			@endif
															
																			@if (is_array($arr["3Amount of fertilizer required"])) 
																				<td class="text-right"> {{ $arr["3Amount of fertilizer required"]["N"] }} </td>
																				<td class="text-right"> {{ $arr["3Amount of fertilizer required"]["P2O5"] }} </td>
																				<td class="text-right"> {{ $arr["3Amount of fertilizer required"]["K2O"] }} </td>
																			@endif

																			<td>
																				@if (array_key_exists(session("verfied_user_id"), $arr))
																					@if ($arr[session("verfied_user_id")] == $plant_id)
																						<span class="badge badge-success">Done</span>
																					@else
																						<form action="{{ route('user.fertilizer') }}" method="post">
																							@csrf
																							@method("PUT")
																							<input type="hidden" name="plant_id" value="{{ $plant_id }}">
																							<input type="hidden" name="zone" value="{{ $user_detail["zone"] }}">
																							<input type="hidden" name="fertilizer_id" value="{{ $fertilizer_id }}">
																							<button type="submit" class="btn badge badge-warning">Not Done</button>
																						</form>
																					@endif
																				@else
																					<form action="{{ route('user.fertilizer') }}" method="post">
																						@csrf
																						@method("PUT")
																						<input type="hidden" name="plant_id" value="{{ $plant_id }}">
																						<input type="hidden" name="zone" value="{{ $user_detail["zone"] }}">
																						<input type="hidden" name="fertilizer_id" value="{{ $fertilizer_id }}">
																						<button type="submit" class="btn badge badge-warning">Not Done</button>
																					</form>
																				@endif
																			</td>
																		</tr>
																	@elseif($user_detail["zone"] == "dry_zone")
																		@if ($i == 8)
																			<tr class="text-center">
																				<th colspan="8" style="padding: 20px 0 20px 10px">For fruiting trees</th>
																			</tr>
																			
																		@endif
																		<tr>
																			<td>{{ $arr["1How When to apply"] }}</td>
															
																			@if (!is_array($arr["2Type"])) 
																				<td colspan="3">
																					{{ $arr["2Type"] }}
																				</td>
																			@endif
															
																			@if (is_array($arr["2Type"])) 
																				<td class="text-right"> {{ $arr["2Type"]["Urea"] }} </td>
																				<td class="text-right"> {{ $arr["2Type"]["TSP"] }} </td>
																				<td class="text-right"> {{ $arr["2Type"]["MOP"] }} </td>
																			@endif
															
																			@if (!is_array($arr["3Amount of fertilizer required"])) 
																				<td colspan="3">
																					{{ $arr["3Amount of fertilizer required"] }}
																				</td>
																			@endif
															
																			@if (is_array($arr["3Amount of fertilizer required"])) 
																				<td class="text-right"> {{ $arr["3Amount of fertilizer required"]["N"] }} </td>
																				<td class="text-right"> {{ $arr["3Amount of fertilizer required"]["P2O5"] }} </td>
																				<td class="text-right"> {{ $arr["3Amount of fertilizer required"]["K2O"] }} </td>
																			@endif

																			<td>
																				@if (array_key_exists(session("verfied_user_id"), $arr))
																					@if ($arr[session("verfied_user_id")] == $plant_id)
																						<span class="badge badge-success">Done</span>
																					@else
																						<form action="{{ route('user.fertilizer') }}" method="post">
																							@csrf
																							@method("PUT")
																							<input type="hidden" name="plant_id" value="{{ $plant_id }}">
																							<input type="hidden" name="zone" value="{{ $user_detail["zone"] }}">
																							<input type="hidden" name="fertilizer_id" value="{{ $fertilizer_id }}">
																							<button type="submit" class="btn badge badge-warning">Not Done</button>
																						</form>
																					@endif
																				@else
																					<form action="{{ route('user.fertilizer') }}" method="post">
																						@csrf
																						@method("PUT")
																						<input type="hidden" name="plant_id" value="{{ $plant_id }}">
																						<input type="hidden" name="zone" value="{{ $user_detail["zone"] }}">
																						<input type="hidden" name="fertilizer_id" value="{{ $fertilizer_id }}">
																						<button type="submit" class="btn badge badge-warning">Not Done</button>
																					</form>
																				@endif
																			</td>
																		</tr>
																	@endif
																		
																	@php $i++ @endphp
																@endforeach
															@endif
														</table>
													</div>
													
												</div>
												</div>
											</div>
										</td>

									</tr>
									@php $crow++; @endphp
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