@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Laporan Pemakaian Mobil</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4>Daftar Mobil</h4></div>
                <div class="card-body">
                   <div class="form-group">
                       <label for="level">Pilih Daftar Mobil</label>
                       <select name="level" id="level" class="form-control">
                           <option value="a"> Honda Jazz </option>
                           <option value="a"> Toyota Arya </option>
                           <option value="a"> Toyota Avanza </option>
                       </select>
                       <br>
                       <div class="col-12"><a href="{{route('laporanpemakaian.form')}}" class="btn btn-warning btn-block">Lihat</a></div>
                   </div> 
                </div>
            </div>
        </section>
                
</div>
@endsection