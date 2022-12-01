@extends('usersinfo.layout')

@section('content')


    <section style="height:100%;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="/usersinfo"> Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                <img src="/images/{{ $userInfo->profile_pic }}"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">{{$userInfo->first_name}} {{$userInfo->last_name}}</h5>
                  <p class="text-muted mb-1">Full Stack Developer</p>
                  <p class="text-muted mb-4">Working area ....... </p>
                  <div class="d-flex justify-content-center mb-2">
                    {{-- <button type="button" class="btn btn-primary">Print QR</button>
                    <button type="button" class="btn btn-outline-primary ms-1">Edit</button> --}}
                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                {{-- <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fas fa-globe fa-lg text-warning"></i>
                      <p class="mb-0">https://mdbootstrap.com</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                      <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                      <p class="mb-0">@mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                      <p class="mb-0">mdbootstrap</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                      <p class="mb-0">mdbootstrap</p>
                    </li>
                  </ul>
                </div> --}}
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$userInfo->first_name}} {{$userInfo->middle_name}} {{$userInfo->last_name}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$userInfo->email}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$userInfo->phone}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Physical Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$userInfo->physical_address}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$userInfo->gender}}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Remark</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$userInfo->remark}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body"  id="image">
                    {{-- {!! QrCode::size(150)->eye('circle')->style('round')->generate('https://localhost:8000/usersinfo/'. strval($userInfo->id)) !!} --}}
                    {!! QrCode::size(150)->eye('circle')->style('round')->generate(Request::url()) !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
