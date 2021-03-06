@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.sidebar')
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="container">
        <h1>Showing {{ $product->name }}</h1>

        <div class="jumbotron text-center">
            <h2>{{ $product->description }}</h2>
            <p>
                <strong>SKU:</strong> {{ $product->sku }}<br>
            </p>
        </div>

    </div>
    </div>
    </div>
@endsection
