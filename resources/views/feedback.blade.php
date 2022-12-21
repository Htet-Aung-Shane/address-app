@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Success</strong>
                </div>
            @endif
            <form method="post" action='/feedback/action' enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Aung Aung">
                    @error('name')
                        <div class="alert alert-danger"> <span>{{ $message }}</span></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">

                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone No</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="09*********">
                    @error('phone')
                        <div class="alert alert-danger"> <span>{{ $message }}</span></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Send Screenshots (optional) </label>
                    <input class="form-control" type="file" id="img" name="img">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    @error('message')
                        <div class="alert alert-danger"> <span>{{ $message }}</span></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
