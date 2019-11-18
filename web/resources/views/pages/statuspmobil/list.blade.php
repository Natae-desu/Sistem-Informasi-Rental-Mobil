@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Status Pemakaian Mobil</h1></div>
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
                <div class="card-header"><h4>Pilih Tanggal</h4></div>
                <div class="card-body">
                   <div class="form-group">
                       <label for="level">Tanggal</label>
                       <select name="level" id="level" class="col-2">
                           <option value="a"> 1 </option>
                           <option value="a"> 2 </option>
                           <option value="a"> 3 </option>
                           <option value="a"> 4 </option>
                           <option value="a"> 5 </option>
                           <option value="a"> 6 </option>
                           <option value="a"> 7 </option>
                           <option value="a"> 8 </option>
                           <option value="a"> 9 </option>
                           <option value="a"> 10 </option>
                           <option value="a"> 11 </option>
                           <option value="a"> 12 </option>
                           <option value="a"> 13 </option>
                           <option value="a"> 14 </option>
                           <option value="a"> 15 </option>
                           <option value="a"> 16 </option>
                           <option value="a"> 17 </option>
                           <option value="a"> 18 </option>
                           <option value="a"> 19 </option>
                           <option value="a"> 20 </option>
                           <option value="a"> 21 </option>
                           <option value="a"> 22 </option>
                           <option value="a"> 23 </option>
                           <option value="a"> 24 </option>
                           <option value="a"> 15 </option>
                           <option value="a"> 26 </option>
                           <option value="a"> 27 </option>
                           <option value="a"> 28 </option>
                           <option value="a"> 29 </option>
                           <option value="a"> 30 </option>
                           <option value="a"> 31 </option>
                       </select>
                       <label for="level">Bulan</label>
                       <select name="level" id="level" class="col-4">
                           <option value="a"> Januari </option>
                           <option value="a"> Februari </option>
                           <option value="a"> Maret </option>
                           <option value="a"> April </option>
                           <option value="a"> Mei </option>
                           <option value="a"> Juni </option>
                           <option value="a"> Juli </option>
                           <option value="a"> Agustus </option>
                           <option value="a"> September </option>
                           <option value="a"> Oktober </option>
                           <option value="a"> November </option>
                           <option value="a"> Desember </option>
                       </select>
                       <label for="level">Tahun</label>
                       <select name="level" id="level" class="col-4">
                           <option value="a"> 2017 </option>
                           <option value="a"> 2018 </option>
                           <option value="a"> 2019 </option>
                       </select>
                       <br>
                       <br>
                       <br>
                       <div class="col-12"><a href="{{route('statuspmobil.status')}}" class="btn btn-warning btn-block">Lihat</a></div>
                   </div> 
                </div>
            </div>
        </section>
                
</div>
@endsection