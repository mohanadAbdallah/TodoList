@extends('layouts.master')


@section('content')

    <div class="d-flex flex-column-fluid">

        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom example example-compact">
                <div class="card-header">
                    <h2 class="card-title">Create new Todo List</h2>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">

                        </div>
                    </div>
                </div>
            @include('includes.messages')

            <!--begin::Form-->
                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" novalidate="novalidate" method="post" action="{{route('todo.store')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">


                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">title</label>
                            <input type="text" class="form-control rounded-round" placeholder="title" name="title"/>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">save<i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden"><div></div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

@endsection
