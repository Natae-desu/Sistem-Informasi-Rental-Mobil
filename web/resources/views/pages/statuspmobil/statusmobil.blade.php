@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>1 Januari 2019</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4>Daftar Pemakaian</h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <h6><b>Periode Januari 2019</b></h6>
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Kode Mobil</th>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td>01</td>
                                <td>HZ001</td>
                                <td>Honda Jazz</td>
                                <td>Booked</td>
                            </tr>    

                            <tr>
                                <td>02</td>
                                <td>TA001</td>
                                <td>Toyota Avanza</td>
                                <td>Booked</td>
                            </tr>  

                            <tr>
                                <td>03</td>
                                <td>TA002</td>
                                <td>Toyota Arya</td>
                                <td>Tidak Terbooking</td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"><b>Total</b></td>
                                <td colspan="1"><b>3 Unit</b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </section>
</div>
@endsection