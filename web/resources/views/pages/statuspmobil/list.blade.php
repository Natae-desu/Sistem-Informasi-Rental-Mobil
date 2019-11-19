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
                    <label for="email">Tanggal</label>
                        <input type="date"
                            class="form-control @error("deadline") is-invalid @enderror"
                            name="deadline" value={{ isset($data)?$data->deadline:old("deadline") }}>
                        @error("deadline")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                       <br>
                       
                       <div class="col-12"><a href="{{route('statuspmobil.status')}}" class="btn btn-warning btn-block">Lihat</a></div>
                   </div> 
                </div>
            </div>
        </section>
                
</div>
@endsection