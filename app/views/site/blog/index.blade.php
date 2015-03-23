@extends('site.layouts.default')

{{-- Content --}}
@section('content')
<div class="row">
@foreach ($posts as $post)
		<div class="col-md-3" style="text-align:center; border:1px solid #ddd; border-radius: 4px;">
		<!-- Post Title -->
			<div>
				<h5><strong><a href="{{{ $post->url() }}}">{{ String::title(Str::limit($post->title, 25)) }}</a></strong></h4>
			</div>
		<!-- ./ post title -->

		<!-- Post Content -->
			<a href="{{{ $post->url() }}}" class="thumbnail"><img src="http://placehold.it/250x250" alt=""></a>
		<!-- ./ post content -->

		<!-- Post Footer -->
			<p>
				<span class="glyphicon glyphicon-user"></span> by <span class="muted">{{{ $post->author->username }}}</span>
				| <span class="glyphicon glyphicon-calendar"></span> <!--Sept 16th, 2012-->{{{ $post->date() }}}
				| <span class="glyphicon glyphicon-comment"></span> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}}</a>
			</p>
		<!-- ./ post footer -->
	</div>
@endforeach
</div>
<hr />
{{ $posts->links() }}

@stop
