@extends('layout.admin')
@section('title', 'running station')
@section('contents')

<h2 class="text-center my-5" style="color: #AB6353">Feedback</h2>
<div class="container mt-3 p-3 splide" id="card-slider">

    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($feedback as $ts)
            <li class="splide__slide d-flex justify-content-center">
                <div class="card splide__slide" style="width:25rem; margin:0 5px;">
                    <div class="card-body">
                        @foreach($user as $us)
                        @if($ts->user_id == $us->id)
                        <h4 class="text-center" style="color: #AB6353">{{$us->nama_lengkap}}</h4>
                        @endif
                        @endforeach
                        <hr />
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Rating</p>
                            <p>{{$ts->rating}} of 5</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Feedback</p>
                            <p>{{$ts->feedback}}</p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>


@endsection