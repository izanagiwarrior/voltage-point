@extends('layout.master')

@section('title', 'Top Up')
@section('contents')
<div class="container">
     <div class="row mt-3">
          <div class="col text-center">
               <h4 style="color: #AB6353" class="mb-3">Top Up Success!</h4>
               <div id="accordion">

                    <div class="card mt-5">
                         <div class="card-header p-0" id="headingOne">
                              <h5 class="mb-0">
                                   <button
                                        class="btn btn-light btn-block d-flex justify-content-between align-items-center"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <div>
                                             <img src="{{asset('img/go-pay.png')}}" alt="go pay" width="80" height="80"
                                                  class="mr-3">
                                             Go Pay
                                        </div>
                                        <div>
                                             <b>My Cash : Rp. {{number_format($saldo->saldo,2,',','.')}}</b>
                                        </div>
                                   </button>
                              </h5>
                         </div>
                    </div>

                    <a href="{{route('home')}}" class="btn btn-success px-3 mt-3">Home</a>
               </div>
          </div>
     </div>
</div>

@endsection