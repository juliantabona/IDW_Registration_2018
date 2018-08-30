@extends('layouts.app') 

@section('style')
    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

@endsection 

@section('content')
<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg pt-5 pb-5">
    <div class="row w-100">
        <div class="col-lg-10 mt mx-auto p-0">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow">
                    <div class="col-12 col-md-12 col-lg-12 grid-margin stretch-card">
                        <div class="card card-hoverable pt-4" style="min-height: 700px;">
                            <div class="card-body bg-inverse-info shadow">
                                <i class="float-left icon-loop icons icon-sm ml-3"></i>
                                <form action="/overview" method="GET">
                                    <div class="d-flex table-responsive">
                                        <input type="text" class="form-control" placeholder="Search delegate first name, last name or id..." style="height: 35px;margin-top: 10px;" name="search">
                                        <div class="btn-group ml-auto mr-2 border-0">
                                            <button type="submit" class="btn">Search</button>
                                        </div>
                                    </div>
                                </form>
                                @if( COUNT($users) )
                                    <h3 class="card-title float-left mb-0 ml-2" style="font-size: 28px;margin-top: 15px;">Registered Delegates</h3>
                                    <div class="table-responsive table-hover">
                                        <table class="table mt-3 border-top">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                    <th>Date</th>
                                                    <th>Payment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                    <tr class='clickable-row' data-href="{{ route('delegate-show', [$user->id]) }}">
                                                        <td>{{ $user->id ? $user->id:'____' }}</td>
                                                        <td>{{ $user->first_name ? $user->first_name:'____' }} {{ $user->last_name ? $user->last_name:'____' }}</td>
                                                        <td>{{ $user->email ? $user->email:'____' }}</td>
                                                        <td>{{ $user->phone ? $user->phone:'____' }}</td>
                                                        <td>{{ $user->country ? $user->country:'____' }}</td>
                                                        <td>{{ $user->city ? $user->city:'____' }}</td>
                                                        <td>{{ $user->created_at ? Carbon\Carbon::parse($user->created_at)->format('d M Y'):'____' }}</td>
                                                            @if( $user->transactions->where('success_state', 1)->count() != 0 )
                                                                <td class="bg-success">PAID
                                                            @elseif( $user->transactions->where('success_state', 3)->count() != 0)
                                                                <td class="bg-warning">TRANSFER REQUEST
                                                            @elseif( $user->transactions->where('success_state', 2)->count() != 0)
                                                                <td class="bg-danger">FAILED PAYMENT
                                                            @else 
                                                                <td>N/A
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                                            <p class="mb-3 ml-3 mb-sm-0"><strong>{{ $users->total() }}</strong>{{ $users->total() == 1 ? ' result': '  results' }} found</p>
                                        <nav>
                                            {{ $users->links() }}
                                        </nav>
                                    </div>
                                @else
                                    <div class="col-4 offset-4" style=" background: #f1f1f1; padding: 20px; ">
                                        <h2 style="font-size: 28px;margin-top: 30px;text-align: center;">No Delegates Found</h2>
                                        <a href="/overview" class="btn btn-primary ml-2 mt-5">
                                            View List
                                        </a>
                                    </div>
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