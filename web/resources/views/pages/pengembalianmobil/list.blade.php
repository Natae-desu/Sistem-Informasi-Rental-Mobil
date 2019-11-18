@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Honda Jazz</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Kode.HZ001</li>
                    </ol>
                </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4>Daftar Pengembalian</h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <a href="{{route('list.pengembalianmobil')}}" class="btn btn-success float-right mb-2">Cetak</a>
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
                            </tr>    

                            <tr>
                                <td>02</td>
                                <td>0989123</td>
                                <td>Budi</td>
                                <td>Toyota Avanza</td>
                                <td>2 Hari</td>
                                <td>1 Januari </td>
                                <td>2 Januari </td>
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