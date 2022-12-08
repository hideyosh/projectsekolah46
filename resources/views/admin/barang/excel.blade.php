<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Merk<th>
            <th>Tipe</th>
            <th>Jumlah Barang</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $barang)
        <tr>
        <td>{{ $barang->id}}</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->merk->nama_merk }}</td>
        <td>{{ $barang->tipe->nama_tipe }}</td>
        <td>{{ $barang->jumlah_barang}}</td>
        </tr>
        @endforeach
    </tbody>
</table>>
