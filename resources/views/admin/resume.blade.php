@extends('admin.layouts.admin')

@section('content')
<<<<<<< HEAD
=======

>>>>>>> 34c8bbf6a784b78a3017444cc15aa7a50bf1be3d

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
                    <h1 class="h3 mb-2 text-gray-800">Resume</h1>
                    {{-- <p class="mb-4">desadasdasdasdasdas</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Resume Records
                                <a href="/admin/resume/create" class="btn btn-success float-right"><i class="fa fa-plus"></i> Add a record</a>

                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Description</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Description</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($cvs as $cv)
                                        <tr>
                                            <td>{{ $cv['company']}}</td>
                                            <td>{{ $cv['position']}}</td>
                                            <td>{{ $cv['description']}}</td>
                                            <td>{{ $cv['startdate']}}</td>
                                            <td>{{ $cv['enddate']}}</td>
                                            <td>{{ $cv['type']}}</td>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                    <form action="{{ url('/admin/resume', ['id' => $cv['id']]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class='fa fa-trash'></i>
                                                        </button>
                                                    </form>
                                                    <a href="/admin/resume/edit/{{$cv['id']}}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                                                 </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
<<<<<<< HEAD

=======
>>>>>>> 34c8bbf6a784b78a3017444cc15aa7a50bf1be3d
