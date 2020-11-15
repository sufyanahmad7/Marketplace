@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

{{-- <h1>Content<h1> --}}
    
        <div class="container">
            <div class="container">
                <div>
                    <div id="savings_accounts" class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="/savings_accounts"><img id="savings_accounts_image" src="{{ url('/images/savings_account.png') }}" class="card-img" alt="Click here to compare Shariah-compliant savings accounts."></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/savings_accounts"><h5 class="card-title">Savings Accounts</h5></a>
                                <p class="card-text">Save with a peace of mind with Shariah-compliant savings account.</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


	
@endsection
