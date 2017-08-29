@extends('layouts.shoplayout')

@section('content')
    <div class="container-fluid">
    <!-- will be used to show any messages -->
        <div class="container panel-body">
            {{--<h2>Latest Bid Amount: {{$transaction->bid_amount}}</h2>--}}
            <h3>Bid for this Product: {{$product->name}}</h3>

            <!-- if there are creation errors, they will show here -->

            {{ Form::open(array('url' => 'view/bid/placebid/'.$product->id)) }}

            <div class="form-group">
                {{ Form::label('amount', 'Amount') }}
                {{ Form::text('amount', Input::old('name'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', Input::old('sku'), array('class' => 'form-control')) }}
            </div>


            {{ Form::submit('Bid for this Product', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
    </div>
@endsection
