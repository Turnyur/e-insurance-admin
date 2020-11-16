@extends('layouts.dashboard')

@push('custom-css')
    <link href="{{ asset('css/vendors/toastr.min.css') }}" rel="stylesheet">
@endpush


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
                                <div class="card-header">{{ $authenticatedAdmin->username }}</div>
                                <div class="card-body">
                                    <img src="{{ $authenticatedAdmin->image ?? 'storage/uploads/default_profile.png' }}"
                                        alt="" />
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
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{ $authenticatedAdmin->id }}" />
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Username</label>
                                                    <input name="username" class="form-control"
                                                        id="exampleFormControlInput1" type="text" placeholder="Username"
                                                        value="{{ $authenticatedAdmin->username }}" readonly />
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Email</label>
                                                    <input name="email" class="form-control" id="exampleFormControlInput1"
                                                        type="email" value="{{ $authenticatedAdmin->email }}"
                                                        placeholder="Email" readonly />
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Firstname</label>
                                                    <input name="firstname" class="form-control"
                                                        id="exampleFormControlInput1" type="text"
                                                        value="{{ $authenticatedAdmin->firstname }}"
                                                        placeholder="Firstname" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Lastname</label>
                                                    <input name="lastname" class="form-control"
                                                        id="exampleFormControlInput1" type="text"
                                                        value="{{ $authenticatedAdmin->lastname }}"
                                                        placeholder="Lastname" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Registration Date</label>
                                                    <input value="{{ $authenticatedAdmin->created_at }}"
                                                        class="form-control" id="exampleFormControlInput1" type="text"
                                                        readonly />
                                                </div>


                                                <div class="form-group"><label
                                                        for="exampleFormControlTextarea1">&nbsp;&nbsp;&nbsp;</label>

                                                    <img src="{{ $authenticatedAdmin->image ?? 'storage/uploads/default_profile.png' }}"
                                                        alt="" />
                                                    <input name="image" class="form-control" id="exampleFormControlInput1"
                                                        type="file" />
                                                </div>



                                                <div class="form-group">
                                                    &nbsp; &nbsp; &nbsp;
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


@push('custom-script')

    <script src="{{ asset('js/vendors/toastr.min.js') }}">
    </script>
    <script src="{{ asset('js/vendors/toast.js') }}">
    </script>

    @isset($successToastMessage)
        <script>
            $(document).ready(function() {
                var tTitle = "{!!  $successToastMessage[0] !!}"; //PHP variable to Javascript variable
                var tMsg = "{!!  $successToastMessage[1] !!}"; //PHP variable to Javascript variable
                toastr.remove();
                toastr.options.positionClass = "toast-top-right";
                toastr.success(tTitle, tMsg);

            });

        </script>
    @endisset


    {{-- @isset($infoToastMessage)
        <script>
            $(document).ready(function() {
                var tTitle = "{!!  $infoToastMessage[0] !!}"; //PHP variable to Javascript variable
                var tMsg = "{!!  $infoToastMessage[1] !!}"; //PHP variable to Javascript variable
                toastr.remove();
                toastr.options.positionClass = "toast-top-full-width";
                toastr.info(tTitle, tMsg);

            });

        </script>
    @endisset --}}



    @isset($errorToastMessage)
        <script>
            $(document).ready(function() {
                var tTitle = "{!!  $errorToastMessage[0] !!}"; //PHP variable to Javascript variable
                var tMsg = "{!!  $errorToastMessage[1] !!}"; //PHP variable to Javascript variable
                toastr.remove();
                toastr.options.positionClass = "toast-top-right";
                toastr.error(tTitle, tMsg);

            });

        </script>
    @endisset

    @endpush
