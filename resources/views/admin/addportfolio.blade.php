@extends('admin.layouts.admin')

@section('content')
    <!-- Custom styles for this page -->
    <link href="{{ URL::asset('/admin/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.layouts.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.layouts.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Portfolio</h1>
                    {{-- <p class="mb-4">desadasdasdasdasdas</p> --}}
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add a new portfolio record</h1>
                                </div>
                                <form class="user" method="POST" action="/admin/portfolio" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="Title">
                                                @error('title')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="client">Client:</label>
                                            <input type="text" name="client" class="form-control" id="client"
                                                placeholder="Client Name">
                                                @error('client')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                     @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description:</label>
                                        <textarea name="description" class="form-control" id="description" rows="5" cols="30"></textarea>
                                        @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                 @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="thumbnail">Thumbnail:</label>
                                        <input type="file" name="thumbnail" class="form-control-file" id="thumbnail"
                                             placeholder="thumbnail">
                                             @error('thumbnail')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                             @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="footage">Footage:</label>
                                        <input type="text" name="footage" class="form-control" id="footage"
                                             placeholder="footage">
                                             @error('footage')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                             @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="date">Project Date:</label>
                                            <input type="date" name="date" class="form-control"
                                                id="date" >
                                                @error('date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                             @enderror

                                        </div>
                                        <div class="col-sm-6">
                                        <label for="category">Category:</label>
                                            <select class="form-control" name="category" aria-label="Default select example" id="category">
                                                <option value="" disabled selected>Select category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category['id']}}" >{{$category['name']}}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
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

    @include('admin.layouts.logout')
    <!-- Page level plugins -->
    <script src="{{ URL::asset('admin/assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset('admin/assets/js/demo/datatables-demo.js')}}"></script>
