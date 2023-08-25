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
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="container border p-3">

                <h2 class="text-center mt-3">Add New Detail</h2>
                @if ($errors->any())
                    <!-- Error messages here -->
                @endif
                <div class="container">
                    <form action="{{ route('add') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">status</label>
                                <input type="number" class="form-control" name="status" min="0" max="1"
                                    pattern="[0-1]" title="Please enter either 0 or 1" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a class="btn btn-primary" href="{{route('studentyajra')}}">Back</a>
                            <button type="submit" id="create" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</body>

</html>
