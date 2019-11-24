@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Daftar Pengembalian</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4></h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            
                            <h6><b>Januari 2019</b></h6>
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Kode Pemesanan</th>
                                <th>Nama Pemesanan</th>
                                <th>Mobil </th>
                                <th>Estimasi</th>
                                <th>Tgl pengambilan</th>
                                <th>tgl pengembalian</th>
                                <th>Status</th>
                                <th colspan=2>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td>01</td>
                                <td>09897676</td>
                                <td>Anwar</td>
                                <td>Toyota Inova</td>
                                <td>3 Hari</td>
                                <td>1 Januari </td>
                                <td>3 Januari </td>
                                <td><a href="" class="badge badge-warning float-center mb-2">Dalam Proses</td>
                                <td><a href="" class="btn btn-success float-center mb-2">Edit</td>
                                <td><a href="" class="btn btn-danger float-center mb-2">Hapus</td>
                            </tr>    

                                          
                        </tbody>
                       
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>

                   
                    </div>
                </div>
            </section>
</div>
@endsection