@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Waiting for Approval</div>

                    <div class="card-body">
                        Your account is waiting for our administrator approval.
                        <br />
                        Please check back later.
                        <br />
                        If you want to re-register click here : <a href="{{ route('reRegister') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">re-register</a>
                        <form id="form-logout" action="{{ route('reRegister') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection