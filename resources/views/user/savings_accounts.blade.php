@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

  <div class="container">
    <div class="container">
    <h2 class="header">Savings Accounts</h2>
    <br>
  
    <div id="review_card" class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <a href="/cimb_readreview"><img src="https://www.complaintsboard.com/thumb.php?src=cimb-bank.png&wmax=182&hmax=300&quality=100&nocrop=1&bname=119877" class="card-img" alt="Ar Rihla Regular Savings Account"></a>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="/cimb_readreview"><h5 class="card-title">FastSaver-i Account</h5></a>
            <p class="card-text">A Shariah-compliant online savings account that earns you competitive profit rates with no multiple conditions - no credit card spend, salary crediting, monthly fees or investment purchases!</p>
            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
          </div>
        </div>
      </div>
  
      <button class="accordion">Product Details</button>
      <div class="panel">
        <br>
        <h5>Profit (Hibah) Rate:</h5><p> 0.7% (as of 2004)</p>
        <hr>
        <h5>Min Amount to Earn Hibah:</h5><p> Min balance of $50/month</p>
        <hr>
        <h5>Min Deposit Amount:</h5><p> Singaporean: $10, Non- Singaporean: $500</p>
        <hr>
        <h5>Min Avg Daily Balance (to avoid Fall Below Fee):</h5><p> $200</p>
        <hr>
        <h5>Fall Below Fee:</h5><p> $2</p>
      </div>
      
      <button class="accordion">Our Take</button>
      <div class="panel">
        <br>
        <h5>Pros</h5>
        <ul>
          <li>Best general savings account with high interest.</li>
          <li>Stellar customer service.</li>
        </ul>
        <br>
        <h5>Cons</h5>
        <ul>
          <li>Bank branches are located in CBD/Orchard.</li>
        </ul>
      </div>
    </div>
  
    <br>
  
    {{-- <div id="review_card" class="card mb-3" style="max-width: 540px;"> --}}
  <div id="review_card" class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="https://www.faa.org.my/sites/default/files/our-client/logo-maybank_0.jpg" class="card-img" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
         <h5 class="card-title">Ar Rihla Regular Savings Account</h5>
          <p class="card-text">Get a head start in saving up for your pilgrimage to Mecca.</p>
          {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>
    </div>

    <button class="accordion">Product Details</button>
    <div class="panel">
      <br>
      <h5>Profit (Hibah) Rate:</h5><p> 0.7% (as of 2004)</p>
      <hr>
      <h5>Min Amount to Earn Hibah:</h5><p> Min balance of $50/month</p>
      <hr>
      <h5>Min Deposit Amount:</h5><p> Singaporean: $10, Non- Singaporean: $500</p>
      <hr>
      <h5>Min Avg Daily Balance (to avoid Fall Below Fee):</h5><p> $200</p>
      <hr>
      <h5>Fall Below Fee:</h5><p> $2</p>
    </div>
    
    <button class="accordion">Our Take</button>
    <div class="panel">
      <br>
      <h5>Pros</h5>
      <ul>
        <li>Best general savings account with high interest.</li>
        <li>Stellar customer service.</li>
      </ul>
      <br>
      <h5>Cons</h5>
      <ul>
        <li>Bank branches are located in CBD/Orchard.</li>
      </ul>
    </div>
  </div>

  <br>
  
@endsection