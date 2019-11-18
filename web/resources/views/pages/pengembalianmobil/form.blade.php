@extends('main')

@section('title','Form Jenis Barang')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Form Pengembalian Mobil</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        
                        <li class="breadcrumb-item active">Form Pengembalian Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Jenis Barang</h3>
            </div>
            <div class="card-body">
                <form action=''
                    method="POST" autocomplete="off">
                    @csrf
                    <!-- @if (isset($data))
                        @method("PUT")
                    @endif -->
                    <div class="form-group">
                        <label for="jenis">Kode Pemesanan</label>
                        <input type="text"
                            class="form-control"
                            name="origin" value=''}>
                         <!-- @error("origin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  -->
                    </div>
                    <div class="form-group">
                        <label for="jenis">Nama Pemesan</label>
                        <input type="text"
                            class="form-control"
                            name="origin" value=''}>
                         <!-- @error("origin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  -->
                    </div>
                    <div class="form-group">
                        <label for="jenis">Mobil</label>
                        <input type="text"
                            class="form-control"
                            name="origin" value=''}>
                         <!-- @error("origin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  -->
                    </div>
                    <div class="form-group">
                        <label for="jenis">Estimasi</label>
                        <input type="text"
                            class="form-control"
                            name="origin" value=''}>
                         <!-- @error("origin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  -->
                    </div>
                    <div class="form-group">
                        <label for="jenis">Tgl Pengambilan</label>
                        <input type="text"
                            class="form-control"
                            name="origin" value=''}>
                         <!-- @error("origin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  -->
                    </div>
                    <div class="form-group">
                        <label for="jenis">Tgl Pengembalian</label>
                        <input type="text"
                            class="form-control"
                            name="origin" value=''}>
                         <!-- @error("origin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  -->
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
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