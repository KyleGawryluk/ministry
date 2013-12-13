@extends('frontend/layouts/default')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="row-fluid">
			@foreach($pastors as $pastor)
			<div class="span3 thumbnail pastor">
				 <div class="pastor-div text-center">
				 	<img src="{{asset('assets/img/pastors/'.$pastor->image_name)}}" alt="pastor" class="pastor-img">
				 </div>
				<div class=" text-center">
					<h4>{{$pastor->name}} <br>
						<small>{{$pastor->title}}</small>
						<br>
						<small>{{$pastor->church}}</small>
					</h4>
				</div>
			</div>
			<span style="display:none">{{$i++}}</span>
			@if($i %4 == 0)
		</div>
		<br>
		<div class="row-fluid">
			@endif
			@endforeach
			
		</div>
	</div>
</div>
@stop
