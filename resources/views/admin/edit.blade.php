@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.sidebar')

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


        <h1>Edit {{ $product->name }}</h1>

        <!-- if there are creation errors, they will show here -->
        {{ ($errors->all()) }}

        {{ Form::model($product, array('route' => array('nerds.update', $product->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('sku', 'SKU') }}
            {{ Form::text('sku', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Nerd Level') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Edit Product', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>
    </div>
@endsection
