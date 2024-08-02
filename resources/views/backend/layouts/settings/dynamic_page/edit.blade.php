@extends('backend.app')

@section('title', 'Dynamic Page Form')

@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Dynamic Page Form</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dynamic Page Form</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Dynamic Page Form</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('dynamic_page.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="page_title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('page_title') is-invalid @enderror" name="page_title" placeholder="title" id="title" value="{{ $data->page_title ?? " " }}">
                                        @error('page_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="summernote" class="form-label">Content</label>
                                        <textarea class="form-control @error('page_content') is-invalid @enderror" id="summernote" name="page_content">{{ $data->page_content ?? " " }}</textarea>
                                        @error('page_content')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <a href="{{ route('dashboard') }}" class="btn btn-danger me-2">Cancel</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW CLOSED -->
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection


