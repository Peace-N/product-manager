@extends('layouts.shoplayout')
@section('content')
<div class="container-fluid">
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="container">
        <h3>Bid for a Product</h3>
        <div class="panel panel-default">
            <div class="panel-heading">Products<div class="col-md-6 pull-right"><input type="text" id="txt_search" class="form-control" onkeyup="search()" placeholder="Search Products.."></div><div class="clearfix"></div></div>
            <table class="panel-body table table-hover table-striped" id="products-table">
                <thead>
                <tr>
                    <td>Product#</td>
                    <td>Owner</td>
                    <td>Name</td>
                    <td>SKU#</td>
                    <td>Description</td>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->sku }}</td>
                    <td>{{ $value->description }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <a style="font-size:13px !important; color:white !important" class="btn btn-success" href="{{ route('customer.products.show', $value->id) }}">View</a>
                        customer.products.show
                        <a style="font-size:13px !important; color:white !important" class="btn btn-info" href="{{ route('customer.products.bid', $value->id) }}">Bid</a>



                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script>
    function search() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("txt_search");
        filter = input.value.toLowerCase();
        table = document.getElementById("products-table");
        tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection