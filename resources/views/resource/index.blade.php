{{-- <h1>{{ $product }}</h1> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-end">
                <a class="btn btn-success mr-3" href="{{ route('users.create') }}">Create New User</a>
            </div>

        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <span>{{ $message }}</span>
        </div>
    @endif


    <div class="container-fluid text-center ">
        <div class="table-responsive">

            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="col-1">Id</th>
                        <th scope="col" class="col-2">FirstName</th>
                        <th scope="col" class="col-2">LastName</th>
                        <th scope="col" class="col-4">Email</th>
                        <th scope="col" class="col-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $prod)
                        <tr>
                            <th scope="row">{{ $prod->id }}</th>
                            <td>{{ $prod->first_name }}</td>
                            <td>{{ $prod->last_name }}</td>
                            <td>{{ $prod->email }}</td>
                            <td> <a href="{{ route('users.show', $prod->id) }}" class="ml-4 "><i
                                        class="fas fa-eye "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('users.edit', $prod->id) }}" class="mr-2 text-success"><i
                                        class="fas fa-pen-to-square "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <form action="{{ route('users.destroy', $prod->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger"
                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   
        <div class="row justify-content-center main">
            <div class="col-6">
                {{ $product->links() }}
            </div>
        </div>
    
    {{-- {{$product->links("pagination::bootstrap-5")}} --}}

    {{-- <style>
        .w-5{
            display: none;
        }
    </style> --}}

<style>
    img, svg{
        vertical-align: middle;
        width: 40px;
    }
    p{
        display: none
    }
    .main{
        margin-left: 17%;
        margin-top: 20px;
    }

</style>
</body>

</html>
