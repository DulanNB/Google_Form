@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">


            <div class="container-fluid">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">User Answers</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($users as  $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->question}}</td>
                                        <td>{{$user->ans}}</td>
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


    </div>
    <!-- End of Content Wrapper -->

{{--<!-- Bootstrap core JavaScript-->--}}
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}

{{--<!-- Core plugin JavaScript-->--}}
{{--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>--}}

{{--<!-- Custom scripts for all pages-->--}}
{{--<script src="js/sb-admin-2.min.js"></script>--}}

{{--<!-- Page level plugins -->--}}
{{--<script src="vendor/datatables/jquery.dataTables.min.js"></script>--}}
{{--<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>--}}

{{--<!-- Page level custom scripts -->--}}
{{--<script src="js/demo/datatables-demo.js"></script>--}}

@endsection


