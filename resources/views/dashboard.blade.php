@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('partials._notification')
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <p>Welcome <strong>{{ $user->username }}</strong> to your personal dashboard. For any problem encountered before or during registration, call or send SMS to <strong>08113954549, 08113954537, 08113954538</strong> or email us at:
            <a href="mailto:registrar@binghamuni.edu.ng">registrar@binghamuni.edu.ng</a>, <a href="mailto:pgadmission@binghamuni.edu.ng">pgadmission@binghamuni.edu.ng</a> with the following details: Teller No, First Name, Last Name, Amount Paid, Phone Number and the details of the problem(s) encountered.</p>
        <p>Alternatively you can use your ATM card to pay on our website using Interswitch webpay.</p>
    </div>

@stop