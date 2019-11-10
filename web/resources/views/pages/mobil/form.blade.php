@extends('main')

@section('title','Form Mobil')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Mobil</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("mobil.index") }}">List Mobil</a></li>
                        <li class="breadcrumb-item active">Form Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Mobil</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                        ?route("mobil.update",[$data->id])
                        :route("mobil.store") }} 
                        method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <input type="text"
                         class="form-control @error("merek") is-invalid @enderror" name="merek" value={{ (isset($data)?$data->merek:old("merek"))}} >
                         @error("merek")
                            <div class="invalid-feedback">
                                {{ $message}}
                                </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control  @error("type") is-invalid @enderror" name="type" value={{ (isset($data)?$data->type:old("type"))}}>
                        @error("type")
                                 <div class="invalid-feedback">
                                {{ $message}}
                                </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" 
                        class="form-control  @error("tahun") is-invalid @enderror" name="tahun" value={{ (isset($data)?$data->tahun:old("tahun"))}}>
                        @error("tahun")
                                 <div class="invalid-feedback">
                                {{ $message}}
                                </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bbm">BBM</label>
                        <input type="text" 
                        class="form-control  @error("bbm") is-invalid @enderror" name="bbm" value={{ (isset($data)?$data->bbm:old("bbm"))}}>
                        @error("bbm")
                                 <div class="invalid-feedback">
                                {{ $message}}
                                </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" 
                        class="form-control  @error("harga") is-invalid @enderror" name="harga" value={{ (isset($data)?$data->harga:old("harga"))}}>
                        @error("harga")
                                 <div class="invalid-feedback">
                                {{ $message}}
                                </div>
                        @enderror
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("mobil.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection