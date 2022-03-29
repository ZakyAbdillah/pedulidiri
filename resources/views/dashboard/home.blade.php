@extends('layout.master')

@section('content')
    <h3>
        Hallo {{Auth()->user()->name}} 
    </h3>
    <br>
    <h2><strong>    
    Selamat Datang Di Peduli Diri
    </strong>
    </h2>
    @stop