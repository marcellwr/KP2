<div class="table-responsive">
    <table class="table" id="produks-table">
        <thead>
            <tr>
                <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Stock Produk</th>
        <th>Keterangan Produk</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produks as $produk)
            <tr>
                <td>{{ $produk->nama_produk }}</td>
            <td>{{ $produk->harga_produk }}</td>
            <td>{{ $produk->stock_produk }}</td>
            <td>{{ $produk->keterangan_produk }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['produks.destroy', $produk->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('produks.show', [$produk->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('produks.edit', [$produk->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
