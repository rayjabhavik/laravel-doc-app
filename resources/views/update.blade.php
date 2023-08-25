{{-- {{$data}} --}}
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

                <h2 class="text-center mt-3">Edit Detail</h2>
               
                <div class="container">
                    <form action="{{ route('edit',$data['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                   
                        <div class="mb-3">
                            <label class="form-label">firstName</label>
                            <input type="text" name="first"  value="{{$data['name']}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone"  value="{{$data['phone']}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control"  value="{{$data['email']}}" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <input type="hidden" class="form-control"  value="{{$data['status']}}" name="status" aria-describedby="emailHelp">

                        <div class="d-flex justify-content-between">
                            <a class="btn btn-primary" href="{{route('studentyajra')}}">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                  

                </div>
            </div>
        </div>
    </div>


</body>

</html>
