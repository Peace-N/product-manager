@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.sidebar')
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="container panel-body">
        <h3>Create new Product</h3>

        <!-- if there are creation errors, they will show here -->

        {{ Form::open(array('url' => 'products')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>

            <div class="form-group">
                {{ Form::label('sku', 'SKU') }}
                {{ Form::text('sku', Input::old('sku'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
            </div>

        {{ Form::submit('Create New Product!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
        </div>
    </div>
    </div>
@endsection
