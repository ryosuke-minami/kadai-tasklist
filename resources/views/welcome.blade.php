@extends('layouts.app')

@section('content')
    @if(Auth::check())
        {{Auth::user()->name}}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welocome to the TaskList</h1>
                {{--ユーザ登録ページへのリンク--}}
                {!! link_to_route('signup.get','Sign up now!',[],['class'=>'btn btn-primary btn-lg']) !!}
            </div>
        </div>
    @endif
@endsection