@extends('master.master')

@section('content')
<div class="min-vh-100 d-flex justify-content-center" style="background-color: #F2F1EF">
    <div class="container my-5 px-5 py-3" style="background-color: white; border-radius: 20px;">
        <div class="container py-3">
            <div class="display-3 me-2">
                Profile
            </div>
        </div>
        <hr>
        <div class="container mt-4">
            <div class="form-group p-3">
                <label for="username">Username</label>
                <input class="form-control mt-1" type="text" name="username" id="username" value="{{$user->username}}" disabled>
            </div>

            <div class="form-group p-3">
                <label for="email">Email</label>
                <input class="form-control mt-1" type="text" name="email" id="email" value="{{$user->email}}" disabled>
            </div>

            <div class="form-group p-3">
                <label for="phone">Phone</label>
                <input class="form-control mt-1" type="text" name="phone" id="phone" value="{{$user->phone}}" disabled>
            </div>



            <div class="display-3 me-2 my-3">
                Applicant Details
            </div>

            <hr />

            <div class="form-group p-3">
                <label for="cv">CV</label>
                <textarea class="form-control my-1" type="text" name="cv" id="cv" rows="2"></textarea>
                <label for="cv" class="fw-light text-muted">Write your a statement about yourself</label>
            </div>

        </div>
    </div>
</div>
</div>

<style>

</style>

@endsection