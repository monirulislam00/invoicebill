@extends('admin.admin_dashboard')
@section('admin')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <div class="container-fluid p-5">
        <div class="text-center mb-3">
            <h1 class="fw-bold">All data from user</h1>
        </div>
        <hr>
        <table id="example" class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Seller name</th>
                    <th>Buyer name</th>
                    <th>Supplier</th>
                    <th>Factory</th>
                    <th>Trademark</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Pieces</th>
                    <th>Token</th>
                    <th>Total price</th>
                    <th>Created by</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach ($values as $value)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $value->seller_name }}</td>
                        <td>{{ $value->buyer_name }}</td>
                        <td>{{ $value->supplier }}</td>
                        <td>{{ $value->factory }}</td>
                        <td>{{ $value->trademark }}</td>
                        <td>{{ $value->date }}</td>
                        <td>{{ $value->location }}</td>
                        <td>{{ $value->type }}</td>
                        <td>{{ $value->pieces }}</td>
                        <td>{{ $value->invoice_num }}</td>
                        <td>{{ $value->total }}</td>
                        <td>{{ $value->creator->name }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- End Page-content -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
