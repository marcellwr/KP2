<!-- Nama Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_produk', 'Nama Produk:') !!}
    {!! Form::text('nama_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Harga Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga_produk', 'Harga Produk:') !!}
    {!! Form::number('harga_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_produk', 'Stock Produk:') !!}
    {!! Form::number('stock_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan_produk', 'Keterangan Produk:') !!}
    {!! Form::text('keterangan_produk', null, ['class' => 'form-control']) !!}
</div>