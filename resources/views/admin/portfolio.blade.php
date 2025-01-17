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
                    <h1 class="h3 mb-2 text-gray-800">Porfolio</h1>
                    {{-- <p class="mb-4">desadasdasdasdasdas</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Porfolio Records
                                <a href="/admin/portfolio/create" class="btn btn-success float-right"><i class="fa fa-plus"></i> Add a record</a>

                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Client</th>
                                            <th>Thumbnail</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Footage</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Client</th>
                                            <th>Thumbnail</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Footage</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($projects as $project)
                                        <tr>
                                            <td>{{ $project['title']}}</td>
                                            <td>{{ $project['client']}}</td>
                                            <td><img src="{{ asset('/storage/thumbnails/'.$project['thumbnail']) }}" alt="{{ $project['title']}}" width="200" height="200"></td>
                                            <td>
                                            @if($project->category === null)
                                                <p class="text-danger">Related category does not exist</p>
                                            @else
                                                {{$project->category->name}}
                                            @endif
                                            </td>
                                            <td>{{ $project['date']}}</td>
                                            <td>{{ $project['description']}}</td>
                                            <td>{{ $project['footage']}}</td>
                                            <td>
                                            <div class="row justify-content-center">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                        <form action="{{ url('/admin/portfolio', ['id' => $project['id']]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class='fa fa-trash'></i>
                                                            </button>
                                                        </form>
                                                        <a href="/admin/portfolio/edit/{{$project['id']}}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
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
