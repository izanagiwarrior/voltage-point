@extends('layout.master')

@section('title', 'Top Up')
@section('contents')
<div class="container">
     <div class="row mt-3">
          <div class="col">
               <h4 style="color: #AB6353" class="text-center mb-3">Top Up Voltage Point</h4>
               <div id="accordion">
                    <div class="card mt-5">
                         <div class="card-header p-0" id="headingOne">
                              <h5 class="mb-0">
                                   <button class="btn btn-light btn-block d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div>
                                             <img src="{{asset('img/go-pay.png')}}" alt="go pay" width="80" height="80" class="mr-3">
                                             Go Pay
                                        </div>
                                        <div>
                                             
                                             <b>My Cash : Rp.{{$saldo->saldo}}</b>
                                        </div>

                                   </button>
                              </h5>
                         </div>

                         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-6">
                                             <form action="{{ route('topUp_process')}}" method="post" enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="form-group">
                                                       <label for="exampleInputEmail1">Gopay Number</label>
                                                       <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Gopay Number">
                                                  </div>
                                                  <div class="form-group">
                                                       <label for="exampleInputEmail1">Top up amount</label>
                                                       <input type="number" name="topup" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Amount">
                                                  </div>
                                                  <div class="form-group">
                                                       <input type="hidden" value="Auth::user()->id" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Amount">
                                                  </div>
                                                  <div class="text-center">
                                                       <button type="submit" class="btn btn-success px-3 w-25">OK</button>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

@endsection