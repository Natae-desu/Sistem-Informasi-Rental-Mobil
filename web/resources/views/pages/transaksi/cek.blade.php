@extends('main')

@section('title','Form Transaksi')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active"> Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form transaksi</h3>
            </div>
<<<<<<< HEAD
            <div class="card-body">
                <form action=''
                    method="POST" autocomplete="off">
                    @csrf
                    <!-- @if (isset($data))
                        @method("PUT")
                    @endif -->
                    <div class="card-body">
                <form action=""
                    method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="kodepemesan">Kode Pemesanan</label>
                        <br>
                        <label> 12345678 </label>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text"
                            class="form-control"
                            name="nama">
                    </div>
                    
                    <div class="form-group">
                        <label for="tgltransaksi">Tgl transaksi</label>
                        <input type="tgltransaksi"
                            class="form-control"
                            name="tgltransaksi">
                    </div>
                   
                    <div class="form-group">
                        <label for="statuspembayaran">Bukti Resi</label>
                        <input type="text"
                            class="form-control"
                            name="statuspembayaran">
                           
                    </div>
               
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="pen">Lunas</option>
                            <option value="pen">Pending</option>
=======
            

            <div class="panel panel-border panel-primary">
                <div class="panel-heading"> 
                    <h3 class="panel-title"><i class="fa fa-user-plus"></i> Detail Transaksi</h3> 
                </div>  <div class="panel-body"> 
                <div class="col-md-12 ">
                
                
                <form method="POST" action="transaksi/proses.php?act=update" enctype="multipart/form-data">
                 <input type="hidden" name="id" value="ORD-000109">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="btn-primary" width="30%">Kode Transaksi</td>
                            <td>001321</td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Tanggal Transaksi</td>
                            <td>1 Januari 2019</td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Nama Lengkap</td>
                            <td>Adriyana Fajar</td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Telepon</td>
                            <td>082364695537 </td>
                        </tr>
                        <tr> 
                            <td class="btn-primary" width="30%">Tipe Pembayaran</td>
                            <td>
                             <select name="status" class="form-control">
                             <option value="Lunas" selected="">Bayar di tempat</option>
                             <option value="Lunas" selected="">Transfer via rek Bank</option>
>>>>>>> 5ee1a8742698d303e79f2d9110cd6df96bf19a4f
                            </select>
                            </td>
                        </tr>
                        
                        <tr> 
                            <td class="btn-primary" width="30%">Status Pembayaran</td>
                            <td>
                             <select name="status" class="form-control">
                                 <option value="Lunas" selected="">Lunas</option>
                                <option value="Lunas" selected="">Pending</option>
                             </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Status Order</td>
                            <td>
                                <select name="status_order" class="form-control"><option value="Baru" selected="">Baru</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Diambil">Diambil</option>
                <option value="Batal">Batal</option>
                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="btn-primary" width="30%">Tanggal Ambil</td>
                            <td>18/29/2019 </td>
                        </tr>
                                                    
                    </tbody>
                </table>
                            
               
                        <input value="Simpan" class="btn btn-primary" type="submit" name="update">
                      
                   </div>
                 </div>    			 
                </div>   			 
                </div>






        </div>
    </div>
</div>
@endsection