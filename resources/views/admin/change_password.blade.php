@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="col-md-6 ms-5">
        <div class="card">
            <h5 class="card-header">Admin Change password</h5>
            <div class="card-body">
                <form method="POST" action="{{route("update.password")}}">
                @csrf
                @if (session('status'))
                    <div class="alert alert-success" role="alert">{{session('status')}}</div>
                @elseif (session('error'))
                    <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                @endif
                    <div class="form-group mb-3">
                        <label class="form-label">Old Password</label>
                        <input type="password" name="old_password" class="form-control @error("old_password") is-invalid @enderror" id="current_password" placeholder="Enter your Old Password">
                        @error("old_password")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">New Password</label>
                        <input type="password" name="new_password" class="form-control @error("new_password") is-invalid @enderror" id="new_password" placeholder="Enter New Password">
                        @error("new_password")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" placeholder="Retype new Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection