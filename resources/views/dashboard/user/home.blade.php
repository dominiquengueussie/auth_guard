<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD | USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
     <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white bg-primary"><h2>Dashboard Users</h2></div>
            <div class="card-body">
               <table class="table table-striped table-bordered table-responsive">
                <thead class="text-center fw-bolder">
                    <tr>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>ACTION</td>
                    </tr>
                    <tbody class="text-center">
                        <tr>
                            <td>{{ Auth::user()->name }}</td>
                            <td>{{ Auth::user()->email }}</td>
                           {{--  <td>
                                <a class="text-secondary" href="{{ route('logout') }}" onclick="e.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('user.logout') }}" method="post" class="d-none">@csrf</form>
                            </td> --}}
                        </tr>
                    </tbody>
                   
                </thead>
               </table>
            </div>
        </div>
     </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>