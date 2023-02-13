@extends('admin.admin_dashboard')
@section('admin')
<?php 
$values = DB::table('users')->latest()->get();
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
        <div class="container-fluid p-5">
            <div class="text-center mb-3">
                <h1 class="fw-bold">All Admin & user</h1>
            </div>
            <hr>
            <table id="example" class=""table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>User ID</th>
                    </tr>
                </thead>
                <tbody>
                    @php ($i = 1)
                    @foreach ($values as $value)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->phone}}</td>
                            <td>{{$value->address}}</td>
                            <td>{{$value->role}}</td>
                            <td>{{$value->id}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>    
            </table>
        </div>
    <!-- End Page-content -->
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
@endsection

   
    
    
