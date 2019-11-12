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
                <div class="card-header"><h4>Daftar Pemakaian</h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <a href="{{route('list.laporanpemesanan')}}" class="btn btn-success float-right mb-2">Cetak</a>
                            <h6><b>Periode Januari 2019</b></h6>
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Tanggal</th>
                                <th>Kode Pemesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td>01</td>
                                <td>1 Januari s/d 3 Januari</td>
                                <td>09897676</td>
                            </tr>    

                            <tr>
                                <td>02</td>
                                <td>6 Januari s/d 7 Januari</td>
                                <td>76768854</td>
                            </tr>                  
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                <td colspan="1"><b>2 Pemesanan</b></td>
                            </tr>
                        </tfoot>
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                                <a href="{{route('list.laporanpemesanan')}}" class="btn btn-success float-right mb-2">Cetak</a>
                                <h6><b>Periode Februari 2019</b></h6>
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Tanggal</th>
                                    <th>Kode Pemesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                <tr>
                                    <td>01</td>
                                    <td>6 Februari s/d 6 Februari</td>
                                    <td>98764587</td>
                                </tr>    
    
                                <tr>
                                    <td>02</td>
                                    <td>12 Februari s/d 13 Februari</td>
                                    <td>76768854</td>
                                </tr>                  
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"><b>Total</b></td>
                                    <td colspan="1"><b>2 Pemesanan</b></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
</div>
@endsection