@extends('layouts.user')

@section('content')

<div class="dashboard-content py-2 px-4">
  <div class="userStatus">
      <div class="items">
          <span>Upleaded Image</span>
          <span> {{ \App\Models\Photo::where('user_id', Auth::user()->id )->count() }}</span>
      </div>
  </div>
  <div class="row my-4">
      <div class="col-md-12 text-center ">
          <h4 class="text-capitalize bg-info text-white p-3 border-left d-inline-block mx-auto rounded">
              welcome to {{Auth::user()->name}}
          </h4>
      </div>
  </div>
  <fieldset>
      <legend>TO TRANSFER FUNDS, EITHER:</legend>
      <div class="row">
          <div class="col-md-5">
              <div class="transferFunds shadow-sm">
                  <div class="pointer">
                      1
                  </div>
                  <div class="para pl-2">
                      Send a cheque made payable to 'Lorem ipsum company House,<br>
                      2 The Crest, Lorem, Ipsum
                  </div>
              </div>
          </div>
          <div class="col-md-1 d-flex justify-content-center align-items-center">
              <h4 class="my-3"> OR</h4>
          </div>
          <div class="col-md-5">
              <div class="transferFunds shadow-sm">
                  <div class="pointer">
                      2
                  </div>
                  <div class="para pl-2">
                      Transfer funds to our bank account:
                  </div>
              </div>
              <div class="transferFunds shadow-sm mt-2">

                  <div class="para pl-2">
                      <b>Bank Name</b> <br>
                      
                      Bank Account Number: @if (isset(\App\Models\BankAccountDetail::where('user_id',Auth::user()->id)->where('status','1')->first()->bank_acc_number)) {{\App\Models\BankAccountDetail::where('user_id',Auth::user()->id)->where('status','1')->first()->bank_acc_number}} @endif<br>
                      Bank Account Sort Code: @if (isset(\App\Models\BankAccountDetail::where('user_id',Auth::user()->id)->where('status','1')->first()->bank_acc_sort_code)) {{\App\Models\BankAccountDetail::where('user_id',Auth::user()->id)->where('status','1')->first()->bank_acc_sort_code}} @endif<br>
                  </div>
              </div>

          </div>
      </div>
  </fieldset>
  
</div>


@endsection
