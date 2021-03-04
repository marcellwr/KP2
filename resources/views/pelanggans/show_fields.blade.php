<!-- Nama Pelanggan Field -->
<div class="col-sm-12">
    {!! Form::label('nama_pelanggan', 'Nama Pelanggan:') !!}
    <p>{{ $pelanggan->nama_pelanggan }}</p>
</div>

<!-- Alamat Pelanggan Field -->
<div class="col-sm-12">
    {!! Form::label('alamat_pelanggan', 'Alamat Pelanggan:') !!}
    <p>{{ $pelanggan->alamat_pelanggan }}</p>
</div>

<!-- Nomor Telepon Field -->
<div class="col-sm-12">
    {!! Form::label('nomor_telepon', 'Nomor Telepon:') !!}
    <p>{{ $pelanggan->nomor_telepon }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pelanggan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pelanggan->updated_at }}</p>
</div>

