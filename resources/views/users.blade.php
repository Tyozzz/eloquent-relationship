<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .img-container {
     display: flex;
   justify-content: center ;
   align-items: center ;
   border-radius: 200px;
    }
</style>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                <h5 class="text-center my-4">One To One & Many To Many
                      
                </h5>
                <h5 class="text-center my-4">SATRIO NUGROHO</h5>
                <div class="img-container">
                    <img src="satrio pelantikan.jpg"/>
                </div>
              
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Nomor Telepon</th>
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone->phone }}</td>
                            <td>
                                @foreach ($user->roles()->get() as $role)
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                     
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Umur</th>
                <th scope="col">TTL</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>Satrio</td>
                <td>16</td>
                <td>Subang,18,Mei,2008</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Nanda</td>
                <td>17</td>
                <td>Subang,1,Januari,2028</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Rizwar</td>
                <td>17</td>
                <td>Subang,17,Mei,2008</td>
              </tr>
            </tbody>
          </table>
          </table>
    </div>
    <img src="satrio pelantikan.jpg"/>

    
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>