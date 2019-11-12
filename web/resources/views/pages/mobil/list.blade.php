@extends('main')

@section('title','List Mobil')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Mobil</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success">
                <i class="fa fa=info-circle"></i> {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Mobil</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route("mobil.create") }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th> 
                            <th>Kode</th> 
                            <th>Merek</th>
                            <th>Type</th>
                            <th>Tahun</th>
                            <th>BBM</th>
                            <th>Harga</th>
                            <th colspan=2>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration + ($data->count()*($data->currentPage()-1)) }}</td>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->merek }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->bbm }}</td>
                                <td>{{ $item->harga }}</td>
                                <td><a href="{{ route("mobil.show", [$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                                <td>
                                        <form action="{{ route("mobil.destroy",[$item->id]) }}"
                                            method="POST">
                                            @method("delete")
                                            @csrf
                                            <button type="submit"
                                            class="btn btn-danger btn-block">
                                            <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right mt-2">
                    {{ $data->links() }}
                </div>
            </div>
        </div>

    </section>
</div>
@endsection