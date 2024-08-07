@extends('admin.layouts.admin')

@section('content')
    <!-- Custom styles for this page -->
    <link href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('/admin/layouts/sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('/admin/layouts/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Resume</h1>
                    {{-- <p class="mb-4">desadasdasdasdasdas</p> --}}
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add a new resume record</h1>
                                </div>
                                <form class="user" method="POST" action="/admin/resume">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="company">Company name:</label>
                                            <input type="text" name="company" class="form-control" id="company"
                                                placeholder="Company">
                                                @error('company')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="type">Type:</label>
                                            <select class="form-control" name="type" aria-label="Default select example" id="type">
                                                <option value="" disabled selected>Select type</option>
                                                <option value="education" >Education</option>
                                                <option value="experience">Experience</option>
                                            </select>
                                            @error('type')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position:</label>
                                        <input type="text" name="position" class="form-control" id="position"
                                            placeholder="Position">
                                            @error('position')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description:</label>
                                        <textarea name="description" class="form-control" id="description" rows="5" cols="30"></textarea>
                                        @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="startdate">Started at:</label>
                                            <input type="date" name="startdate" class="form-control"
                                                id="startdate" >
                                                @error('startdate')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                             @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="enddate">Ended at:</label>
                                            <input type="date" name="enddate" class="form-control"
                                                id="enddate" >
                                                @error('enddate')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('/admin/layouts/logout')
    <!-- Page level plugins -->
    <script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset('js/demo/datatables-demo.js')}}"></script>
