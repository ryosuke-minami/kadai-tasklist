@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welocome to the TaskList</h1>
            {{--ユーザ登録ページへのリンク--}}
            {!! link_to_route('signup.get','Sign up now!',[],['class'=>'btn btn-primary btn-block']) !!}
        </div>
    </div>
@endsection