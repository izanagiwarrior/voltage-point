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
                                   <button
                                        class="btn btn-light btn-block d-flex justify-content-between align-items-center"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <div>
                                             <img src="{{asset('img/go-pay.png')}}" alt="go pay" width="80" height="80"
                                                  class="mr-3">
                                             Go Pay
                                        </div>

                                   </button>
                              </h5>
                         </div>

                         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                              data-parent="#accordion">
                              <div class="card-body">
                                   <div class="row">
                                        <!-- <div class="col-6">
                                             <form action="" method="post">
                                                  <div class="form-group">
                                                       <label for="exampleInputEmail1">Gopay Number</label>
                                                       <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter Gopay Number" disabled>
                                                  </div>
                                                  <div class="form-group">
                                                       <label for="exampleInputEmail1">Top up amount</label>
                                                       <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Amount" disabled>
                                                  </div>
                                             </form>
                                        </div> -->
                                        <div class="col-6">
                                             <form action="{{ route('successTopUp')}}" method="get">
                                                  <div class="form-group">
                                                       <label for="exampleInputEmail1">OTP number verification</label>
                                                       <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter Gopay Number">
                                                  </div>
                                                  <div class="text-center">
                                                       <button type="submit"
                                                            class="btn btn-success px-3 w-25">OK</button>
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