@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="col-md-6 ms-5">
        <div class="card">
            <h5 class="card-header">Admin Profile</h5>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full name</label>
                        <input type="text" class="form-control" value="{{ $admindata->name}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" value="{{ $admindata->email}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1" class="form-label">Chose image</label>
                        <input type="file" class="form-control" id="image">
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