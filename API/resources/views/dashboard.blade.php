{{-- @include('layouts/head') --}}
@extends('master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1>{{__('message.title')}}</h1> --}}
          </div>
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

            </ol>
          </div> --}}
        </div>
      </div>
    </section>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <div id="root"></div>
                    </div>

                </div>

            </div>



        </div>



  </div>
</div>
</div>
</div>


{{-- @include('layouts/scripts') --}}
@endsection
