@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="col-md-6 ms-5">
        <div class="card">
            <h5 class="card-header">Admin Profile</h5>
            <div class="card-body">
                <form method="POST" action="{{route("admin.profile.store")}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full name</label>
                        <input type="text" name="name" class="form-control" value="{{ $admindata->name}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" value="{{ $admindata->email}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $admindata->phone}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $admindata->address}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Chose image</label>
                        <input type="file" name="photo" class="form-control" id="image">
                    </div>
                    <div class="form-group mb-3">
                        <img  id="showImage" src="{{(!empty($admindata->photo)) ? url('upload/admin_image/'.$admindata->photo): url('upload/no_image.jpg')}}" height="110px">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 
<script type="text/javascript">
    $(document).ready(function(){
        $("#image").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection