@extends('backend.app')

@section('title', 'Dashboard')

@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Form Validation</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Vertical Form</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('system.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="title" id="title" value="{{ old('title', $setting->title ?? '') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="systemName" class="form-label">System Name</label>
                                        <input type="text" class="form-control @error('system_name') is-invalid @enderror" name="system_name" placeholder="System Name" id="systemName" value="{{ old('system_name', $setting->system_name ?? '') }}">
                                        @error('system_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="copyRights" class="form-label">Copy Rights Text</label>
                                        <input type="text" class="form-control @error('copyright_text') is-invalid @enderror" name="copyright_text" placeholder="Copy Rights Text" id="copyRights" value="{{ old('copyright_text', $setting->copyright_text ?? '') }}">
                                        @error('copyright_text')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="summernote" class="form-label">About System</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="summernote" name="description" placeholder="About System">{{ old('copyright_text', $setting->copyright_text ?? '') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input type="file" class="dropify @error('logo') is-invalid @enderror" name="logo" id="logo" data-default-file="@isset($setting){{ asset($setting->logo) }}@endisset">
                                        @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="logo" class="form-label">Favicon</label>
                                        <input type="file" class="dropify @error('favicon') is-invalid @enderror" name="favicon" id="favicon" data-default-file="@isset($setting){{ asset($setting->favicon) }}@endisset">
                                        @error('favicon')
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


