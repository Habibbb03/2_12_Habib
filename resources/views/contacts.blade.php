@extends('layouts.main')

@section('container')
<form>
    <div class="title-top mb-3">
        <h2 class="fw-bold">Contact Us</h2>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Pesan</label>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
