<div class="table-responsive">
    <table class="table" id="pelanggans-table">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
        <th>Alamat Pelanggan</th>
        <th>Nomor Telepon</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pelanggans as $pelanggan)
            <tr>
                <td>{{ $pelanggan->nama_pelanggan }}</td>
            <td>{{ $pelanggan->alamat_pelanggan }}</td>
            <td>{{ $pelanggan->nomor_telepon }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pelanggans.destroy', $pelanggan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pelanggans.show', [$pelanggan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pelanggans.edit', [$pelanggan->id]) }}" class='btn btn-default btn-xs'>
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
