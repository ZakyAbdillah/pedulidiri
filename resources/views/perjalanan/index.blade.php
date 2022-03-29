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
            <div class="row">
            <strong>Add your trip data here!</strong>
                <div class="col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn ri-add-line float-end b" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
                </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">TANGGAL</th>
                                <th scope="col">JAM</th>
                                <th scope="col">LOKASI</th>
                                <th scope="col">SUHU TUBUH</th>
                                <th scope="col">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($perjalanan as $jalan)
                            <tr>
                                <td>{{$jalan->tanggal}}</td>
                                <td>{{$jalan->jam}}</td>
                                <td>{{$jalan->lokasi}}</td>
                                <td>{{$jalan->suhutubuh}}</td>
                                <td>
                                <a href="/perjalanan/{{$jalan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('yakin mao di hapus?')">delete</a>
                                </td>
                            </tr>
                            @endforeach               
                        </tbody>
                    </table>
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
                <form action="/perjalanan/create" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TANGGAL</label>
                        <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">JAM</label>
                        <input type="time" name="jam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">LOKASI</label>
                        <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">SUHU TUBUH</label>
                        <input type="text" name="suhutubuh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

