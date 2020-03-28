@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row mb-2">
        <div class="col-12">
            <div class="card p-3 text-center">
                <h1 class="font-25">Update Your Profile</h1>
            </div>
        </div>
    </div>




    <div class="row mt-20">
        <div class="col-12 col-lg-8">
            <form action="{{route('update-user-profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card p-3">
                    <h1 class="font-josefin font-25 text-center">Update Information</h1>
                    <div class="row mt-3">
                        <div class="col-12 col-lg-6">
                            <label for="name" class="font-josefin font-18"><b>Name*</b></label>
                            <input type="text" name="name" value="{{$my->name}}" class="form-control rounded-0 font-18">
                        </div>

                        <div class="col-12 col-lg-6">
                            <label for="image" class="font-josefin font-18"><b>Image*</b></label>
                            <input type="file" name="image" class="form-control rounded-0">
                            
                        </div>
                        
                    </div>
                    <label for="" class="mt-3"><b>Address</b></label>
                    <input type="text" name="address" class="form-control rounded-0" value="{{$my->address}}">

                    <label for="" class="mt-3"><b>About</b></label>
                   <textarea name="about" cols="30" rows="5" class="form-control rounded-0">{{$my->about}}</textarea>

                    <input type="submit" name="submit" value="Update" class="form-control rounded-0 mt-3 btn-info font-18 font-pt">
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-4">
            <form action="{{route('change-password')}}" method="POST">
                @csrf
                <div class="card p-3">
                    <h1 class="font-josefin font-25 text-center">Change Password</h1>
                    <label for="password" class="font-josefin font-18 mt-3"><b>Old Password*</b></label>
                    <input type="password" name="password"  class="form-control rounded-0 font-18">
            
                    <label for="new_password" class="font-josefin font-18 mt-3"><b>New Password*</b></label>
                    <input type="password" name="new_password"  class="form-control rounded-0 font-18">

                    <label for="c_new_password" class="font-josefin font-18 mt-3"><b>Confirm New Password*</b></label>
                    <input type="password" name="c_new_password"  class="form-control rounded-0 font-18">
                    
                    <input type="submit" name="submit" value="Change" class="form-control rounded-0 mt-3 btn-info font-18 font-pt">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
