<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table-responsive {
            overflow-x: hidden !important;

        }

        body {
            overflow-x: hidden;

        }
    </style>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="container border p-3">
                <div class="container-fluid text-center ">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <a class="btn btn-success mr-3" href="{{ route('create') }}">Create New User</a>
                    </div><br>


                    <table class="table table-sm table-striped" id="main-data">

                        <thead>

                            <tr>
                                <th scope="col" class="col-1 text-center">id</th>
                                <th scope="col" class="col-3 text-center">Name</th>
                                <th scope="col" class="col-2 text-center">Email</th>
                                <th scope="col" class="col-4 text-center">Phone</th>
                                <th scope="col" class="col-2 text-center">Status</th>
                                <th scope="col" class="col-2 text-center">action</th>

                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>


    </div>

    <script>
        var table = $('#main-data').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('studentyajra') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }

            ]
        });

        $(document).ready(function() {
            @if (Session::has('success'))
                swal("Success", "{{ Session::get('success') }}", "success");
            @elseif (Session::has('delete'))
               
                swal({
                    title: "Delete",
                    text: "{{ session('delete') }}",
                    icon: "error", // Use "error" icon for red-themed alert
                    buttons: false,
                    closeOnClickOutside: false,
                    className: "custom-swal", // Add a custom class for styling

                });
            @elseif (Session::has('update'))
                swal("update", "{{ Session::get('update') }}", "success");
            @endif
        });
    </script>

</body>

</html>








