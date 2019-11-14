@extends('layout.main')

@section('title','Tambah transaksi print')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Form transaksi print</h3>
    </div>
    <div class="panel-body">
        <form action="{{ route('print.simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="control-label" for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama lengkap">
            </div>
            <div class="form-group">
                <label class="control-label" for="tanggal">Tanggal</label>
                <input class="form-control" type="date" name="tanggal" id="tanggal">
            </div>
            <div class="form-group">
                <label class="control-label" for="warna">Warna</label>
                <input class="form-control warna" type="number" name="warna" id="warna" placeholder="Jumlah print warna">
            </div>
            <div class="form-group">
                <label class="control-label" for="hitam_putih">Hitam putih</label>
                <input class="form-control hitam" type="number" name="hitam_putih" id="hitam_putih" placeholder="Jumlah print hitam putih">
            </div>
            <div class="form-group">
                <label class="control-label" for="total">Total</label>
                <input class="form-control total" type="number" name="total" id="total" placeholder="">
            </div>
            <div class="form-group">
                <label class="control-label" for="total_bayar">Jumlah bayar</label>
                <input class="form-control" type="number" name="total_bayar" id="total_bayar" placeholder="">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
        </form>
    </div>    
</div>
@endsection

@section('js')
<script>
$(document).on("change",".warna",function(){
    total();
});

$(document).on("change",".hitam",function(){
    total();
});

function total()
{
    var hitung = 0;
    $(".warna").each(function(){
        hitung = hitung + 700*$(".warna").val();
    });

    $(".hitam").each(function(){
        hitung = hitung + 500*$(".hitam").val();
    });
    $(".total").val(hitung);
}
</script>
@endsection