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
                                <th>Kode Transaksi </th>
                                <th>Nama </th>
                                <th width=15%>Status</th>
                                <th colspan="2",width=10%>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1 </td>
                                <td>001321</td>
                                <th>Surya Anjani </th>
                                <td><a href="" class="btn btn-warning float-center mb-2"><i class="fas fa-search">Cek</i></td>
                                    <td><a href="" class="btn btn-success float-center mb-2">Lunas</td>
                            </tr>
                    </table>
                </div>
            </div>
        </section>            
</div>
@endsection