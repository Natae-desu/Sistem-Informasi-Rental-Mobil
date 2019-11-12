@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Laporan Pemesanan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pemesanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4>Laporan Pemesanan per Tahun</h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <a href="{{route('list.laporanpemesanan')}}" class="btn btn-success float-right mb-2">Cetak</a>
                            <h6><b>Periode Januari 2019</b></h6>
                        <thead>
                            <tr>
                                <th width=5%>No. </th>
                                <th width=15%>Tanggal Pemesanan </th>
                                <th width=15%>Tanggal Pemakaian </th>
                                <th width=15%>Kode Pemesanan</th>
                                <th width=15%>Nama Pemesan</th>
                                <th width=15%>Supir</th>
                                <th width=10%>Kode Mobil</th>
                                <th width=10%>Mobil</th>
                                <th width=10%>Estimasi</th>
                                <th width=50%>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td>No.1 </td>
                                <td>1 Januari</td>
                                <td>Januari s/d 3 Januari</td>
                                <td>09897676</td>
                                <td>Adriyana Fajar</td>
                                <td>Supriyatno</td>
                                <td>HZ001</td>
                                <td>Honda Jazz</td>
                                <td>3 Hari</td>
                                <td>900.000</td>
                            </tr>                  
                            <tr>
                                <td></td>
                                <td></td>
                                <td>6 Januari s/d 8 Januari</td>
                                <td>89787654</td>
                                <td>Miranto Jaya</td>
                                <td>Adi</td>
                                <td>TA001</td>
                                <td>Toyota Avanza</td>
                                <td>3 Hari</td>
                                <td>900.000</td>
                            </tr>
                            <tr>
                                <td>No.2 </td>
                                <td>6 Januari</td>
                                <td>6 januari s/d 7 Januari</td>
                                <td>76768854</td>
                                <td>Puspita Sari</td>
                                <td>Nabila Angrayani</td>
                                <td>HZ001</td>
                                <td>Honda Jazz</td>
                                <td>2 Hari</td>
                                <td>600.000</td>
                            </tr>                     
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8"><b>Total</b></td>
                                <td colspan="2"><b>2.400.000 Rupiah</b></td>
                            </tr>
                        </tfoot>
                    </table>


                    <br>
                    <br>
                    <br>
                    <br>


                    <table class="table table-bordered table-striped">
                        <a href="{{route('list.laporanpemesanan')}}" class="btn btn-success float-right mb-2">Cetak</a>
                        <h6><b>Periode Februari 2019</b></h6>
                    <thead>
                            <tr>
                                <th width=8%>No. </th>
                                <th width=15%>Tanggal Pemesanan </th>
                                <th width=15%>Tanggal Pemakaian </th>
                                <th width=15%>Kode Pemesanan</th>
                                <th width=15%>Nama Pemesan</th>
                                <th width=15%>Supir</th>
                                <th width=10%>Kode Mobil</th>
                                <th width=10%>Mobil</th>
                                <th width=10%>Estimasi</th>
                                <th width=50%>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td>No.1 </td>
                                <td>6 Februari</td>
                                <td>6 Februari s/d 6 Februari</td>
                                <td>98764587</td>
                                <td>Miranda Arini</td>
                                <td>Supriyatno</td>
                                <td>HZ001</td>
                                <td>Honda Jazz</td>
                                <td>1 Hari</td>
                                <td>300.000</td>
                            </tr>                  
                            <tr>
                                <td>No. 2</td>
                                <td>10 Februari</td>
                                <td>10 Februari s/d 12 Februari</td>
                                <td>89787654</td>
                                <td>Miranto Jaya</td>
                                <td>Bagas</td>
                                <td>TA001</td>
                                <td>Toyota Avanza</td>
                                <td>3 Hari</td>
                                <td>900.000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>10 Februari s/d 11 Februari</td>
                                <td>76768854</td>
                                <td>Angel Ana</td>
                                <td>Adi</td>
                                <td>HZ001</td>
                                <td>Honda Jazz</td>
                                <td>2 Hari</td>
                                <td>600.000</td>
                            </tr>                     
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8"><b>Total</b></td>
                                <td colspan="2"><b>1.800.000 Rupiah</b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
                
</div>
@endsection