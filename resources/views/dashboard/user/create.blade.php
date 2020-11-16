@extends('layouts.dashboard')


@section('content')


    <div id="layoutSidenav_content">
        <main>
            <div class="page-header pb-10 page-header-dark bg-primary">
                <div class="container-fluid">
                    <div class="page-header-content">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
                                    <path
                                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                    </path>
                                </svg></i></div>
                            <span>Account</span>
                        </h1>
                        <div class="page-header-subtitle">Account setup</div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-n10">
                <div class="row">
                    <div class="col-lg-3">
                        <div id="default">
                            <div class="card mb-4">
                                <div class="card-header">&nbsp;</div>
                                <div class="card-body">
                                    <img src="{{asset('storage/uploads/default_profile.png')}}" alt="" />
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="default">
                            <div class="card mb-4">
                                <div class="card-header">Account information</div>
                                <div class="card-body">
                                    <div class="sbp-preview">
                                        <div class="sbp-preview-content">
                                            <form action="/account" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Role</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Role</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Username</label>
                                                <input name="username" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Username"  />
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Email</label>
                                                <input name="email" class="form-control" id="exampleFormControlInput1" type="email"  placeholder="Email" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Firstname</label>
                                                        <input name="firstname"  class="form-control" id="exampleFormControlInput1" type="text" placeholder="Firstname" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Lastname</label>
                                                <input name="lastname"  class="form-control" id="exampleFormControlInput1" type="text"  placeholder="Lastname" />
                                                </div>



                                                <div class="form-group"><label for="exampleFormControlTextarea1">&nbsp;&nbsp;&nbsp;</label>

                                                    <img src="{{asset('storage/uploads/default_profile.png')}}" alt="" />
                                                    <input name="image" class="form-control" id="exampleFormControlInput1" type="file" />
                                                </div>



                                                <div class="form-group">
                                                    &nbsp; &nbsp;  &nbsp;
                                                </div>

                                                        <div class="form-group">
                                                        <button class="btn btn-primary mr-2 my-1" type="submit">Save</button>
                                                        </div>

                                                    </form>
                                        </div>



                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </main>
        @include('dashboard.includes.footer')
    </div>


@endsection
