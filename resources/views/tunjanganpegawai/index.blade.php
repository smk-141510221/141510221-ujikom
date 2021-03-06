@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Tunjangan Pegawai</div>
        <div class="panel-body">
       
            <a href="{{route('tunjanganpegawai.create')}}" class="btn btn-info pull-right">Tambah Data TunjanganPegawai</a><br><br>
       <table class="table table-striped">

       <form class="form-search" >
                    <p class="text-right">
                    <input type="text" class="input-medium search-query">
                    <button type="submit" class="btn">Search</button>
                </p></form>


            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th><center>Id</th>
                        <th><center>Id Kode Tunjangan</th>
                        <th><center>Id Pegawai</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($tunjanganpegawai as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->tunjangan->kode_tunjangan}} </td>
                        <td> {{$data->pegawai->User->name}} </td>
                        <td><a href="{{route('tunjanganpegawai.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                         
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection