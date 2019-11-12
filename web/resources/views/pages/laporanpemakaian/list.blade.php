@extends('main')

@section('title','Home')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Laporan Pemakaian Mobil</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
            <div class="card">
                <div class="card-header"><h4>Daftar Mobil</h4></div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Honda Jazz</th>
                                <th>Toyota Avanza</th>
                                <th>Toyota Veloz</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <tr>
                                <td><i class="fas fa-car"></i></td>
                                <td><i class="fas fa-car"></i></td>
                                <td><i class="fas fa-car"></i></td>
                            </tr>                

                        </tbody>
                        <tfoot>
                            <tr> 
                                <td><a href="{{route('laporanpemakaian.form')}}" class="btn btn-warning btn-block">Lihat</a></td>
                                <td><a href="" class="btn btn-warning btn-block">Lihat</a></td>
                                <td><a href="" class="btn btn-warning btn-block">Lihat</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
                
</div>
@endsection