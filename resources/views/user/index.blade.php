@extends('layout.master')


@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
        {{--
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav> --}}
        </div><!-- End Page Title -->
        <section class="section profile">
        <div class="row">
            <div class="col-xl-12" >

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{asset('images/'.Auth::user()->foto)}}" alt="Profile" class="rounded-circle">
                <h2>{{Auth()->user()->name}}</h2>
                <div class="social-links mt-2">
                    <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
                </div>
            </div>

            </div>

            <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>

                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                    </li>
                    {{-- 
                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                    </li> --}}

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Nik</div>
                        <div class="col-lg-9 col-md-8">{{Auth()->user()->nik}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Username</div>
                        <div class="col-lg-9 col-md-8">{{Auth()->user()->username}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">{{Auth()->user()->email}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">{{Auth()->user()->alamat}}</div>
                    </div>
                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form action="/user/{{Auth::user()->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <img src="{{asset('assets/img/profile-img.jpg')}}" alt="Profile">
                            <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                            </div>
                        </div>
                        </div> --}}

                        <div class="row mb-3">
                        <label for="nik" class="col-md-4 col-lg-3 col-form-label">Nik</label>
                        <div class="col-md-8 col-lg-9">
                        <input name="nik" type="text" class="form-control" id="nik" value="{{Auth::user()->nik}}">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="name" type="text" class="form-control" id="name" value="{{Auth::user()->name}}">
                        </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="username" type="text" class="form-control" id="username" value="{{Auth::user()->username}}">
                            </div>
                            </div>

                        <div class="row mb-3">
                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="text" class="form-control" id="email" value="{{Auth::user()->email}}">
                        </div>
                        </div>

                        {{-- alamat --}}
                                    {{-- provinsi --}}
                                        <div class="form-group">
                                        
                                            <div class="row">
                                                    <div class="col-lg-3 col-md-4 label "><label class="form-label">Customize Your City!</label></div>
                                                    <div class="col-lg-9 col-md-8">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="selectProvinsi">Provinsi</label>
                                                            </div>
                                                            <select class="custom-select" name="selectProvinsi" id="selectProvinsi">
                                                                {{-- <option>Provinsi</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        {{-- kabupaten/kota --}}
                                        <div class="form-group">
                                        
                                            <div class="row">
                                                    <div class="col-lg-3 col-md-4 label "><label class="form-label"></label></div>
                                                    <div class="col-lg-9 col-md-8">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="selectKabupaten">Kabupaten</label>
                                                            </div>
                                                            <select class="custom-select" name="selectKabupaten" id="selectKabupaten">
                                                                {{-- <option>Kabupaten</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        {{-- kecamatan --}}
                                        <div class="form-group">
                                            <div class="row">
                                                    <div class="col-lg-3 col-md-4 label "><label class="form-label"></label></div>
                                                    <div class="col-lg-9 col-md-8">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="selectKecamatan">Kecamatan</label>
                                                            </div>
                                                            <select class="custom-select" name="selectKecamatan" id="selectKecamatan">
                                                                {{-- <option value="Kecamatan"></option> --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        {{-- kelurahan --}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label "><label class="form-label"></label></div>
                                                <div class="col-lg-9 col-md-8">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="selectKelurahan">Kelurahan</label>
                                                        </div>
                                                        <select class="custom-select" name="selectKelurahan" id="selectKelurahan">
                                                            {{-- <option> Kelurahan </option> --}}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
    
                                        {{-- final alamat --}}
                                        <div class="form-group">
                                            <div class="row">
                                                    <div class="col-lg-3 col-md-4 label "><label class="form-label">Address</label></div>
                                                    <div class="col-lg-9 col-md-8">
                                                        <textarea class="form-control" name="alamat" id="alamat"></textarea>
                                                    </div>
                                                </div> 
                                        </div>
                                        {{-- end alamat --}}

                        <div class="row mb-3">
                            <label for="foto" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="foto" type="file" class="form-control" id="foto" value="{{Auth::user()->foto}}">
                            </div>
                            </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary float-end btn-sm ">Save Changes</button>
                        </div>
                    </form><!-- End Profile Edit Form -->
                    </div>
                </div><!-- End Bordered Tabs -->
                </div>
            </div>
            </div>
        </div>
        </section>
    <script>
            let selectProvinsi = document.getElementById('selectProvinsi');
            let selectKabupaten = document.getElementById('selectKabupaten');
            let selectKecamatan = document.getElementById('selectKecamatan');
            let selectKelurahan = document.getElementById('selectKelurahan');
            let alamat = document.getElementById('alamat');
            document.addEventListener('DOMContentLoaded', function(){
                fetchProvinsi();
                selectKabupaten.style.display = "none";
                selectKecamatan.style.display = "none";
                selectKelurahan.style.display = "none";
                getValueToAlamat();
            });
            const config = {
                method : 'GET'
            }
            // fetch provinsi get data
            async function fetchProvinsi(){
                const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`;
                await fetch(URL, config)
                .then(response => response.json())
                // .then(provinsi => console.log(provinsi))
                .then(provinsi => {
                    if(provinsi != null || undefined){
                        provinsi.map(data=>{
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectProvinsi.appendChild(opt);
                            // console.log(selectProvinsi)
                        })
                    }else{
                        let opt = document.createElement('option');
                            opt.value = "";
                            opt.innerHTML = "Data tidak tersedia";
                            selectProvinsi.appendChild(opt);
                    }
                }).catch(error => alert(`Data provinsi tidak ada`));
            }
            // fetch kabupaten/kota get data
            async function fetchKabupaten(id){
                const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
                await fetch(URL, config)
                .then(response => response.json())
                .then(kabupaten =>{
                    if (kabupaten !== null || undefined) {
                            kabupaten.map(data => {
                                let opt = document.createElement('option');
                                opt.value = data.id;
                                opt.innerHTML = data.name;
                                selectKabupaten.appendChild(opt);
                            })
                        } else {
                            let opt = document.createElement('option');
                            opt.value = "";
                            opt.innerHTML = "Data tidak tersedia";
                            selectKabupaten.appendChild(opt);
                        }
                })
            }
            // fetch kecamatan get data
            async function fetchKecamatan(id){
                const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? ""  : id}.json`;
                await fetch(URL, config)
                .then(response => response.json())
                .then(kecamatan =>{
                    if (kecamatan !== null || undefined) {
                            kecamatan.map(data => {
                                let opt = document.createElement('option');
                                opt.value = data.id;
                                opt.innerHTML = data.name;
                                selectKecamatan.appendChild(opt);
                            })
                        } else {
                            let opt = document.createElement('option');
                            opt.value = "";
                            opt.innerHTML = "Data tidak tersedia";
                            selectKecamatan.appendChild(opt);
                        }
                })
            }
        
            async function fetchKelurahan(id){
                const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
                await fetch(URL, config)
                .then(response => response.json())
                .then(kelurahan => {
                    if(kelurahan !== null || undefined){
                        kelurahan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKelurahan.appendChild(opt);
                        })
                    }else{
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data Tidak Tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                })
            }
            selectProvinsi.addEventListener('change', () => {
                fetchKabupaten(selectProvinsi.value);
                selectKabupaten.style.display = "block";
                selectKabupaten.innerHTML = '';
                selectKecamatan.innerHTML = '';
                selectKelurahan.innerHTML = '';
            });
            
            selectKabupaten.addEventListener('change', () => {
                fetchKecamatan(selectKabupaten.value);
                selectKecamatan.style.display = "block";
                selectKecamatan.innerHTML = '';
                selectKelurahan.innerHTML = '';
            });
            
            selectKecamatan.addEventListener('change', () => {
                fetchKelurahan(selectKecamatan.value);
                selectKelurahan.style.display = "block";
                selectKelurahan.innerHTML = '';
            });
            function getValueToAlamat() {
                alamat.addEventListener('change', () => {
                    let alamatText = alamat.value;
                    document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                    // console.log(`${alamatText}, ${selectKelurahan.options[  selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
                    
                });
            }
        </script>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
</html>
@stop









    {{-- 
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
                        <h5 class="card-title">User</h5>
                            <!-- Button trigger modal -->
                        <button type="button" class="btn ri-add-line float-end b" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            </button>
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">NIK</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">TELEPON</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ALAMAT</th>
                            <th scope="col">{{Auth()->user()->name}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_user as $user)
                            <tr>
                                <td>{{$user->nik}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->telp}}</td>
                                <td>{{$user->foto}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->alamat}}</td>
                                
                                <td>
                                <a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                                <a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('yakin mao di hapus?')">delete</a>
                                </td>
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
    @stop
    --}}
