@extends('layouts.app') 

@section('style')
    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        body {
            background: #fff !important;
        }
    </style>
@endsection 

@section('content')
<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg pt-5 pb-5">
    <div class="row w-100">
        <div class="col-md-8 offset-md-2 mt-2">
            <div class="card card-hoverable">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <a href="/overview" class="btn float-right mr-2" style=" max-width: 150px !important; ">
                                <i class="icon-pencil icons"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">DELEGATE DETAILS (NO {{ $profile->id }})</h4>
                    </div>
                    <div class="wrapper">
                        <hr>
                        <p class="mb-3" style="font-weight: 800;color: #ca2f00;"> 
                            <b>Delegate general details are as follows:</b>
                        </p>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>First Name: </b>
                                    <span class="font-weight-normal">{{ $profile->first_name ? $profile->first_name:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Last Name: </b>
                                    <span class="font-weight-normal">{{ $profile->last_name ? $profile->last_name:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Gender: </b>
                                    <span class="font-weight-normal">{{ $profile->gender ? $profile->gender:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Affiliation: </b>
                                    <span class="font-weight-normal">{{ $profile->affiliation ? $profile->affiliation:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Position/Title: </b>
                                    <span class="font-weight-normal">{{ $profile->position ? $profile->position:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Country: </b>
                                    <span class="font-weight-normal">{{ $profile->country ? $profile->country:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Organisation Type: </b>
                                    <span class="font-weight-normal">{{ $profile->organisation_type ? $profile->organisation_type:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Address: </b>
                                    <span class="font-weight-normal">{{ $profile->address ? $profile->address:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Address 2: </b>
                                    <span class="font-weight-normal">{{ $profile->address_2 ? $profile->address_2:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>City: </b>
                                    <span class="font-weight-normal">{{ $profile->city ? $profile->city:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>State: </b>
                                    <span class="font-weight-normal">{{ $profile->state ? $profile->state:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>ZipCode: </b>
                                    <span class="font-weight-normal">{{ $profile->zip_code ? $profile->zip_code:'____' }}</span>
                                </h6>
                            </div>
                        </div>
                        <p class="mb-3" style="font-weight: 800;color: #ca2f00;"> 
                            <b>Contact details are as follows:</b>
                        </p>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Phone: </b>
                                    <span class="font-weight-normal">{{ $profile->phone ? $profile->phone:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Email: </b>
                                    <span class="font-weight-normal">{{ $profile->email ? $profile->email:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Additional Email: </b>
                                    <span class="font-weight-normal">{{ $profile->additional_email ? $profile->additional_email:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Twitter Handle: </b>
                                    <span class="font-weight-normal">{{ $profile->twitter_handle ? $profile->twitter_handle:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        <p class="mb-3" style="font-weight: 800;color: #ca2f00;"> 
                            <b>Event specific details:</b>
                        </p>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Days Attending: </b>
                                    <span class="font-weight-normal">{{ $profile->days_attending ? $profile->days_attending:'____' }}</span>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Event Attending: </b>
                                    <span class="font-weight-normal">{{ $profile->event_attending ? $profile->event_attending:'____' }}</span>
                                </h6>           
                            </div>
                        </div>
                        
                        <hr />
                        
                        <div class="row bg-inverse-info shadow">
                            <div class="col-12">
                                <h4 class="mt-3 ml-3"><b>Recent Activities</b></h4>
                                @if(COUNT($profile->transactions))
                                    <table class="table mt-3 border-top">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Status</th>
                                                <th>Method</th>
                                                <th>Amount</th>
                                                <th>Transaction ID</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($profile->transactions as $transaction)
                                                <tr>
                                                    <td>
                                                        @if( $transaction->success_state == 1 ||
                                                             $transaction->success_state == 2 ||
                                                             $transaction->success_state == 3
                                                        )
                                                            Paying
                                                        @else 
                                                            Viewing Payment Page
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if( $transaction->success_state == 1 )
                                                            SUCCESS
                                                        @elseif( $transaction->success_state == 3 )
                                                            <div style=" border: 1px dotted #000; padding: 25px 15px 5px; ">
                                                                <h3 style="font-size: 16px;" class="mb-2">TRANSFER REQUEST</h3>
                                                                <form action="/delegates/{{ $profile->id }}/paymentApproval" method="POST">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="approve_payment" value="1">
                                                                    <input type="hidden" name="transaction_ID" value="{{ $transaction->id }}"> 
                                                                    <input type="hidden" name="payment_type" value="Bank Transfer"> 
                                                                    <select class="form-control" name="package_type" data-cesta-feira-attribute="">
                                                                        <option value="2064">Students: 2,000 (BWP)</option>
                                                                        <option value="2064">LMIC COUNTRIES: 2,000 (BWP)</option>
                                                                        <option value="6192">All Others: 6,000 (BWP)</option>
                                                                    </select>
                                                                    <button type="submit" class="btn">Approve Payment</button>
                                                                </form>
                                                            </div>
                                                        @elseif( $transaction->success_state == 2 )
                                                            FAIL
                                                        @else 
                                                            ___
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if( $transaction->success_state == 1)
                                                            {{ $transaction->payment_type }}
                                                        @else 
                                                            ___
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if( $transaction->success_state == 1)
                                                            BWP {{ $transaction->amount }}
                                                        @else 
                                                            ___
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if( $transaction->success_state == 1)
                                                            IDW-2018-{{ $transaction->id }}
                                                        @else 
                                                            ___
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $transaction->created_at ? Carbon\Carbon::parse($transaction->created_at)->format('d M Y @ H:i:s A'):'____' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="ml-3 mt-4 mb-0 text-muted text-center"><i class="icon-docs icons"></i> No Activity.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(".clickable-row, .card-clickable").click(function (e) {
                //  Stop executing this action if user clicked inner elements
                //  that should not redirect them. Anything with the class [not-clickable] e.g (Download buttons)
                if (!$(e.target).hasClass('not-clickable')) {
                  //  Otherwise just follow the URL of the element clicked and redirect the user
                  if($(this).data("href") != undefined){
                    window.location = $(this).data("href");
                  }
                }
              });
            });
    </script>

@endsection