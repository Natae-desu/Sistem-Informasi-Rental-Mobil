@extends('main')

@section('title','Transaksi')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
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
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4> Transaksi </h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <a href="{{route('list.transaksi')}}" class="btn btn-success float-right mb-2">Cetak</a>
                            <h6><b> * </b></h6>
                       
                        <thead>
                            <tr>
                                <th width=5%>No. </th>
<<<<<<< HEAD
                                <th>Kode Transaksi </th>
                                <th>Nama </th>
=======
                                <th width=15%>Kode Transaksi </th>
                                <th width=15%>Tanggal Transaksi </th>
                                <th width=15%>Nama Pemesan</th>
>>>>>>> 5ee1a8742698d303e79f2d9110cd6df96bf19a4f
                                <th width=15%>Status</th>
                                <th width=5%>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1 </td>
                                <td>001321</td>
<<<<<<< HEAD
                                <th>Surya Anjani </th>
                                <td><a href="" class="btn btn-warning float-center mb-2"><i class="fas fa-search">Cek</i></td>
                                    <td><a href="" class="btn btn-success float-center mb-2">Lunas</td>
=======
                                <td>1 Januari 2019 </td>
                                <td>Adriyana Fajar</td>
                                <td> <div class="badge badge-danger">pending </div></td>
                                <td><a href="{{ route('cekstatus') }}" class="badge badge-success float-center mb-2"><i class="fas fa-search">Cek</i></td>
>>>>>>> 5ee1a8742698d303e79f2d9110cd6df96bf19a4f
                            </tr>
                    </table>
                </div>
            </div>
        </section>            
</div>
@endsection