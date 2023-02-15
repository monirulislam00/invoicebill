@extends('admin.admin_dashboard')
@section('admin')
    {{-- @include("auth.register") --}}
    <div class="container p-5">
        <div class="card">
            <div class="card-header">
                <h3 class="fw-bold">Add user</h3>
            </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store.user') }}" style="width: 50%">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('status')}}</div>
                    @endif
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" autofocus>
                            @error("name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email">
                            @error("email")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Role </label>
                            <select name="role" id="" class="form-control">
                                <option value="">Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            @error("role")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control @error("password") is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error("password")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </form>
                </div>
        </div>
        
        
    </div>
    
@endsection
