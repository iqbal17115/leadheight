
<x-app-layout>
    <x-slot name="title">
        {{ __('DASHBOARD') }}
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="rounded">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18 ml-2">Dashboard</h4>
                    <div class="page-title-right">
                       <!--  <ol class="breadcrumb m-0 mr-2">
                            <li class="breadcrumb-item text-light font-size-16"><a href="javascript: void(0);"
                                    style="color:#fdfffe;">Dashboards</a></li>
                            <li class="breadcrumb-item active font-size-16" style="color:#fdfffe;">Home</li>
                        </ol> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card" style="background-color: #42569f;">
                    <div>
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h6 class="text-light">Welcome To</h6>
                                    <h5 class="text-light">@if($companyInfo) {{$companyInfo->name}} @endif</h5>
                                  
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img @if($companyInfo) src="{{ asset('storage/photo/'.$companyInfo->logo) }}" @endif
                                    style="height:125px;width:100%;background-image: cover;" alt=""
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
        <!-- end row -->
    </div>
</x-app-layout>

