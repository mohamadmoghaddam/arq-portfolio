@extends('admin.layouts.admin')

@section('content')


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
                    <h1 class="h3 mb-2 text-gray-800">Category</h1>
                    {{-- <p class="mb-4">desadasdasdasdasdas</p> --}}
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit category</h1>
                                </div>
                                <form class="user" method="POST" action="/admin/category/{{$category['id']}}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="name">Category name:</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                             placeholder="category name" value="{{$category['name']}}">
                                             @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                             @enderror
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
