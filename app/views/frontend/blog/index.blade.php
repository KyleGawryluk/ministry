@extends('frontend/layouts/default')

@section('content')
@foreach ($posts as $post)
<div class="row-fluid">
	<div class="span12" style="color:#fff;">
		<div class="row-fluid">
			<div class="span12">
				<h4><strong><a href="{{ $post->url() }}">{{ $post->title }}</a></strong></h4>
			</div>
		</div>

		<!-- Post Content -->
		<div class="row-fluid">
			<div class="span2">
				<a href="{{ $post->url() }}" class="thumbnail"><img src="{{ $post->thumbnail() }}" alt=""></a>
			</div>
			<div class="span10">
				<p>
					{{ Str::limit($post->content, 200) }}
				</p>
				<p><a class="btn btn-mini" href="{{ $post->url() }}">Read more...</a></p>
			</div>
		</div>

		<!-- Post Footer -->
		<div class="row-fluid">
			<div class="span12">
				<p></p>
				<p>
					<i class="icon-user"></i> by <span class="muted">{{ $post->author->first_name }}</span>
					| <i class="icon-calendar"></i> {{ $post->created_at->diffForHumans() }}
					| <i class="icon-comment"></i> <a href="{{ $post->url() }}#comments">{{ $post->comments()->count() }} Comments</a>
				</p>
			</div>
		</div>
	</div>
</div>

<hr />
@endforeach

{{ $posts->links() }}
@stop
