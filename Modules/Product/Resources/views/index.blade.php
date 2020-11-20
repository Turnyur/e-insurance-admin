@extends('product::layouts.master')

@push('custom-css')
    <link href="{{ asset('css/vendors/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/product.css') }}">
@endpush


@section('content')


    <div id="layoutSidenav_content">
        <main>
            {{-- <div class="page-header pb-10 page-header-dark bg-primary">
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
                            <span>Products</span>
                        </h1>
                        <div class="page-header-subtitle"></div>
                    </div>
                </div>
            </div> --}}
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <div id="default">
                            <div class="card mb-4">
                                <div class="card-header">Products</div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-4" >
                                            <div class="card card-icon">
                                                <div class="row no-gutters">
                                                    <div class="col-auto card-icon-aside bg-primary product-catalogue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers mr-1 text-white-50"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></div>
                                                    <div class="col">
                                                        <div class="card-body py-5 product-catalogue">
                                                            <h5 class="card-title">Product Title</h5>
                                                            <p class="card-text">Product description</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-lg-4" >
                                            <div class="card card-icon">
                                                <div class="row no-gutters">
                                                    <div class="col-auto card-icon-aside bg-primary product-catalogue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers mr-1 text-white-50"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></div>
                                                    <div class="col">
                                                        <div class="card-body py-5 product-catalogue">
                                                            <h5 class="card-title">Product Title</h5>
                                                            <p class="card-text">Product description</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-lg-4" >
                                            <div class="card card-icon">
                                                <div class="row no-gutters">
                                                    <div class="col-auto card-icon-aside bg-primary product-catalogue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers mr-1 text-white-50"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></div>
                                                    <div class="col">
                                                        <div class="card-body py-5  product-catalogue">
                                                            <h5 class="card-title">Product Title</h5>
                                                            <p class="card-text">Product description</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                    </div>


                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <x-modal>

                <x-slot name="title">
                    <h1>Product 1</h1>
                </x-slot>

                <x-slot name="body">


<form>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Product Type</label><select class="form-control" id="exampleFormControlSelect1">
            <option>Third Party</option>
            <option>Comprehensive</option>

        </select>
    </div>

   </form>


                </x-slot>

                <x-slot name="footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button>
                    </x-slot>
            </x-modal>
        </main>
        @include('dashboard.includes.footer')
    </div>


@endsection


@push('custom-script')

    <script src="{{ asset('js/vendors/toastr.min.js') }}">
    </script>
    <script src="{{ asset('js/vendors/toast.js') }}">
    </script>
    <script src="{{ mix('js/product.js') }}"></script>

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
