<!-- Nama Produk Field -->
<div class="col-sm-12">
    {!! Form::label('nama_produk', 'Nama Produk:') !!}
    <p>{{ $produk->nama_produk }}</p>
</div>

<!-- Harga Produk Field -->
<div class="col-sm-12">
    {!! Form::label('harga_produk', 'Harga Produk:') !!}
    <p>{{ $produk->harga_produk }}</p>
</div>

<!-- Stock Produk Field -->
<div class="col-sm-12">
    {!! Form::label('stock_produk', 'Stock Produk:') !!}
    <p>{{ $produk->stock_produk }}</p>
</div>

<!-- Keterangan Produk Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan_produk', 'Keterangan Produk:') !!}
    <p>{{ $produk->keterangan_produk }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $produk->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $produk->updated_at }}</p>
</div>

