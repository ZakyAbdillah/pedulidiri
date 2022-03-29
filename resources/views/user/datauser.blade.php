@extends('layout.master')

@section('content')
    

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="container">
            @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Data User</h5>
                        <!-- Button trigger modal -->
                    <button type="button" class="btn ri-add-line float-end " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        </button>
                        <a href="/print" class="btn btn-primary btn-sm">Cetak Data</a>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
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
                            @foreach ($data as $user)
                        <tr>
                            <td>{{$user->nik}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->telp}}</td>
                            <td>{{$user->foto}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->alamat}}</td>
                            @if ($user->role == 'user')
                            <td>
                            {{-- <a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">edit</a> --}}
                            <a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('yakin mao di hapus?')">delete</a>
                            </td>       
                            @endif
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
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">INSERT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/user/create" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nik">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NAME</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">USERNAME</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username">
                        </div>
                    <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">TELEPON</label>
                        <input type="number" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No Telp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">FOTO</label>
                        <input type="file" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
                    </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                            <input type="textarea" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nik">
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">PASSWORD</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Password-">
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection