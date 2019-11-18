@extends('main')

@section('title','List pelanggan')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>pelanggan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">pelanggan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4></h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <a href="{{route('list.laporanpemesanan')}}" class="btn btn-success float-right mb-2">Cetak</a>
                            <h6><b>Periode Januari 2019</b></h6>
                        <thead>
                            <tr>
                                <th width=5%>No. </th>
                                <th width=15%>nama </th>
                                <th width=15%>jenis kelamin</th>
                                <th width=15%>telepon</th>
                                <th width=15%>email</th>
                                <th colspan="2",width=15%>action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td>No.1 </td>
                                <td>fajar</td>
                                <td>laki-laki</td>
                                <td>08216543214545</td>
                                <td>Fajar@gmail.com</td>
                                <td><a href="" class="btn btn-info btn-block"><i class="fas fa-check-circle"></i>Approve</a></td>
                                <td><a href="" class="btn btn-danger btn-block"><i class="fas fa-ban"></i>Cancel</a></td>
                            </tr>                  
                            <tr>
                                <td>No.2</td>
                                <td>miranto</td>
                                <td>6 Januari s/d 8 Januari</td>
                                <td>89787654</td>
                                <td>Miranto @yahoo.com</td>
                                <td><a href="" class="btn btn-info btn-block"><i class="fas fa-check-circle"></i>Approve</a></td>
                                <td><a href="" class="btn btn-danger btn-block"><i class="fas fa-ban"></i>Cancel</a></td>
                            </tr>
                            <tr>
                                <td>No.3 </td>
                                <td>PuspitaSari</td>
                                <td>6 januari s/d 7 Januari</td>
                                <td>76768854</td>
                                <td>PuspitaSari@gmail.com</td>
                                <td><a href="" class="btn btn-info btn-block"><i class="fas fa-check-circle"></i>Approve</a></td>
                                <td><a href="" class="btn btn-danger btn-block"><i class="fas fa-ban"></i>Cancel</a></td>
                                
                            </tr>                     
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
                
</div>

@endsection