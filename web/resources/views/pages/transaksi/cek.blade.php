@extends('main')

@section('title','Transaksi')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                       
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Status Pembayaran</h3>
            </div>
            <div class="card-body">
                <form action=''
                    method="POST" autocomplete="off">
                    @csrf
                    <!-- @if (isset($data))
                        @method("PUT")
                    @endif -->
                    <div class="card-body">
                <form action=""
                    method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="kodepemesan">Kode Pemesanan</label>
                        <input type="text"
                            class="form-control"
                            name="kodepemesan">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text"
                            class="form-control"
                            name="nama">
                    </div>
                    
                    <div class="form-group">
                        <label for="tgltransaksi">Tgl transaksi</label>
                        <input type="tgltransaksi"
                            class="form-control"
                            name="tgltransaksi">
                    </div>
                   
                    <div class="form-group">
                        <label for="statuspembayaran">Bukti Resi</label>
                        <input type="text"
                            class="form-control"
                            name="statuspembayaran">
                           
                    </div>
               
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="pen">Lunas</option>
                            <option value="pen">Pending</option>
                            </select>
                    </div>
                    <div class="form-group float-right">
                        
                        <a href="" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection