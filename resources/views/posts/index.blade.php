@extends('layouts.app')
@section('content')
    <div class="row">
        @forelse($posts as $post)
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Brett B</span>
                    <span class="pull-right">{{$post->created_at->diffForHumans()}}</span>
                </div>
                <div class="panel-body">
                    {{ $post->shortContent }}
                    <a href="/posts/{{$post->id}}">Read More</a>
                </div>
                <div class="panel-footer clearfix" style="background-color:#FFF;">
                    @if($post->user_id == Auth::id())
                        <form action="/posts/{{$post->id}}" method="POST" class="pull-right" style="margin-left:25px">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    @endif
                    <i class="fa fa-heart pull-right"></i>
                </div>
            </div>
        </div>
        @empty
            <div class="col-md-4 col-md-offset-4">
                No posts.
            </div>
        @endforelse
    </div>  
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$posts->links()}}
        </div>
    </div>

@endsection