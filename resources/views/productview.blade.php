@extends('layouts.profile-layout')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<section>
<div id="sidebar"> 
            <div class="white-label">
              <img src="assets/img/logowh.png" alt="">
            </div> 
            <div id="sidebar-nav">   
              <ul> 
                <li><a href="order"><i class="fas fa-shopping-cart"></i> Order</a></li>   
                <li class="active"><a href="productview"><i class="fa fa-th-large"></i> Product</a></li> 
                <li></li>
                <li>
                  {{-- post logout method from route --}}
                  <form action="{{ route('logout.post') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger rounded-pill" style="width:190px; margin-left:30px; margin-top:630px;">Logout</button>
                </li>
              </ul>
            </div>

</section>
<section class="row" style="background-color: #eee; height: 100%;">
  <div class="container py-5 ">
    <div class=" row">
      <div class="profview col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="profileview">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
          </ol>
        </nav>
      </div>
    </div>

<div class="row row-cols-1 row-cols-md-5">
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">JAYA ABADI</h4>
            <!--Text-->
            <p class="card-text">IKAN KAKAP MERAH</p>
            <p class="card-text">Rp.100.000</p> 
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">EDIT</button></a>
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>


        </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">PESISIR RAYA</h4>
            <!--Text-->
            <p class="card-text">IKAN KAKAP MERAH</p>
            <p class="card-text">Rp.100.000</p>
            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">EDIT</button></a>
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>

        </div>

        </div>
        <!-- Card -->
    </div>
    <div class="col mb-4">
        <!-- Card -->
        <div class="card">

        <!--Card image-->


        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">SAMUDERA</h4>
            <!--Text-->
            <p class="card-text">IKAN KAKAP MERAH</p>
            <p class="card-text">Rp.100.000</p>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="{{'toko'}}"><button type="button" class="btn btn-primary" type="submit" name="submit">EDIT</button></a>
            <a href="{{'toko'}}"><button type="button" class="btn btn-danger" type="submit" name="submit">DELETE</button></a>


        </div>

        </div>
        <!-- Card -->
    </div>

</div>

</section>
@endsection
       