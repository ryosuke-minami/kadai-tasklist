@if(count($users)>0)
    <ul class="list-unstyled">
        @foreach($users as $user)
        <li class="media">
            <div class="media-left">
                <div>
                    {{$user->name}}
                </div>
                <div>
                    {{--ユーザ詳細ページへのリンク--}}
                    <p>{!! link_to_route('users.show','View task',['user'=>$user->id]) !!}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{$users->link()}}
@endif