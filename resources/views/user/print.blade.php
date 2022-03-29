<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
                    <table class="table table-bordered" border="1px">
                        <thead>
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">TELEPON</th>
                            <th scope="col">FOTO</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ALAMAT</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $userr)
                        <tr>
                            <td>{{$userr->nik}}</td>
                            <td>{{$userr->name}}</td>
                            <td>{{$userr->username}}</td>
                            <td>{{$userr->telp}}</td>
                            <td>{{$userr->foto}}</td>
                            <td>{{$userr->email}}</td>
                            <td>{{$userr->alamat}}</td>
                        </tr>
                            @endforeach               
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
    
                    </div>
                </div>
        </div>
    </body>
</html>