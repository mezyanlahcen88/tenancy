<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Add new tenant
            </a>
            <a href="{{ route('tenants.index') }}" class="btn btn-primary btn-sm ">list of tenants</a>
        </div>
    </nav>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
<form action="{{route('tenants.store')}}" method="post">
<div class="row">
    <div class="mb-3 col-6">
        <label for="" class="form-label">Id</label>
        <input
            type="text"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder="THe id of tenantt"
        />

    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Name</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpId"
            placeholder="The name of tenant"
        />

    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Email</label>
        <input
            type="text"
            class="form-control"
            name="email"
            id=""
            aria-describedby="helpId"
            placeholder="The email of tenantt"
        />

    </div>
    <div class="mb-3 col-6">
        <label for="" class="form-label">Password</label>
        <input
            type="text"
            class="form-control"
            name="password"
            id=""
            aria-describedby="helpId"
            placeholder="The password of tenantt"
        />
    </div>
    <div class="col-12">
        <button class="btn btn-primary btn-sm">Save tenant</button>
    </div>
</div>

</form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
