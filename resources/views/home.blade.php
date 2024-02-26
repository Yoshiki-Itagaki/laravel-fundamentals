@extends('layouts.master')

@section('content')
<main role="main" class="container">
    <div class="row mt-5">
        {{-- @foreach ($users as $user )
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>{{$user->name}}</h4>
                    <p>{{$user->email}}</p>
                    <p>{{$user->address->address}}</p>
                </div>
            </div>
        </div>
        @endforeach --}}

        @foreach ($addresses as $address )
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>{{$address->user->name}}</h4>
                    <p>{{$address->user->email}}</p>
                    <p>{{$address->address}}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</main>
@endsection
