<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{'asset/css/style.css'}}">
    <style>
        .w-35{
            width: 400px;
        }
    </style>

</head>

<body class="bg-danger">

<div class="container mt-5">
    
    <div class="row bg-light mx-auto d-block w-35 shadow p-2 rounded">
        <div class="col mt-5">
            <form action="{{route('admin_login.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h5 class="text-center">Login Here</h5>
                    <label class="mt-3" for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>

                <!-- <button type="submit" class=" btn btn-primary mx-auto d-block">Submit</button> -->
                <input type="submit" class="btn btn-danger mx-auto d-block mt-2">

                <div class="row mt-2">
                    <div class="col-5">
            
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-5">
                        <p><a class="text-danger text-decoration-none" href="">Forgot Password</a></p>
                    </div>
                </div>
            </form>
        </div>

    </div>

    
</div>


</body>

</html>