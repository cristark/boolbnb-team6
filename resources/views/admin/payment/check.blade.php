@extends('layouts.app')

@section('content')
<div id="check">

    <div class="container result">

    <div class="row d-flex justify-content-center">

        <div class="card col-8 pt-3 pb-3">

        <div class="card-body d-flex flex-column align-items-center">
            @if(session('status'))
                <h2>Pagamento riuscito</h2>
                <div class="check-img">
                <img src="https://lh3.googleusercontent.com/proxy/kECnQtbWpFi54L-4bQS41LcpDPQQhHldx2lvpJ0S3x6-FOqV8T8bdKHNtNJAh9Pnk88P-NdZR7A5yADxLFw3RlOIuQKcoGi4knzWb1YyTUSi2ik2o22T" alt="">
                </div>
            @else
                <h2>Pagamento non riuscito</h2>
                <div class="check-img">
                <img src="https://www.freeiconspng.com/uploads/error-icon-4.png" alt="">
                </div>
            @endif
            </div>

        </div>

    </div>





    </div>

</div>
@endsection