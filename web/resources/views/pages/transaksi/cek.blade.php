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