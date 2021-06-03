@extends('layout.master')
@section('title', 'QRCode')
@section('contents')
<div class="container">
    <div class="row py-4">
        <div class="col">
            <h2 class="text-danger">We Love feedback</h2>
            <p class="text-muted">Tell us about your experience using Voltage Point.</p>


            <p class="text-muted text-center mt-5">Rate Us</p>

            <form action="{{ route('feedback_process')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mt-4">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                </div>

                <div class="rate mx-auto">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1</label>
                </div>

                <div class="mt-4">
                    <textarea name="feedback" class="form-control" placeholder="write your feedback here" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success my-3">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection