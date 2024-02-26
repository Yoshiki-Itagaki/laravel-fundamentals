@extends('layouts.master')

@section('content')
<main role="main" class="container">
    <div class="row mt-5">

        {{-- #1 one-to-one relationship --}}

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


        {{-- #2 inverse relationship --}}
        {{-- @foreach ($addresses as $address )
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>{{$address->user->name}}</h4>
                    <p>{{$address->user->email}}</p>
                    <p>{{$address->address}}</p>
                </div>
            </div>
        </div>
        @endforeach --}}

        {{-- #3 one-to-many relationship --}}
        {{-- @foreach ($categories as $category )
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>{{$category->title}}</h4>
                    <p>{{$category->description}}</p>
                    <p class="ltn-sm btn-success">{{$category->category->id}}</p>
                    <p class="ltn-sm btn-success">{{$category->category->name}}</p>
                </div>
            </div>
        </div>
        @endforeach --}}

        {{-- #4 many-to-many relationship --}}
        @foreach ($posts as $post )
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>{{$post->title}}</h4>
                    <p>{{$post->description}}</p>

                    <ul>
                    @foreach ($post->tags as $tag )
                        <li>{{$tag->name}}</li>
                    @endforeach
                    <ul>

                </div>
            </div>
        </div>
        @endforeach

    </div>

</main>
@endsection
