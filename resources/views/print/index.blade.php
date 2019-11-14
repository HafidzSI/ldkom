@extends('layout.main')

@section('title','Halaman Print')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Data Transaksi Print</h3>
        <div class="right">
            <a href="{{ route('print.tambah') }}" class="label label-primary">Tambah</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Total</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $datas)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $datas->nama }}</td>
                    <td>{{ $datas->total }}</td>
                    <td>{{ $datas->keterangan }}</td>
                    <td>
                        <a href="{{ route('print.edit',['id' => $datas->id]) }}" class="label label-warning">Edit</a>
                        <a href="{{ route('print.detail',['id' => $datas->id]) }}" class="label label-info">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection