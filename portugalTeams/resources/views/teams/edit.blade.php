<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Portugal Teams</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('teams.index') }}>CRUDteams</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('teams.create') }}>Add Post</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Update Team</h3>
        <form action="{{ route('teams.update', $team->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"
              value="{{ $team->name }}" required>
          </div>
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname"
              value="{{ $team->fullname }}" required>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city"
              value="{{ $team->city }}" required>
          </div>
          <div class="form-group">
            <label for="stadiumName">Stadium Name</label>
            <input type="text" class="form-control" id="stadiumName" name="stadiumName"
              value="{{ $team->stadiumName }}" required>
          </div>
          <button type="submit" class="btn mt-3 btn-primary">Update Team</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>