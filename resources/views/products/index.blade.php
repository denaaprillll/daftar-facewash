<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk Face Wash</title>
</head>
<body>

    <h1>Daftar Produk Face Wash</h1>

    <a href="{{ route('products.create') }}">Tambah Produk</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Produk</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        @foreach($products as $p)
        <tr>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->jenis }}</td>
            <td>Rp {{ number_format($p->harga * 1000, 0, ',', '.') }}</td>
            <td>{{ $p->keterangan }}</td>
            <td>
                <a href="{{ route('products.edit', $p->id) }}">Edit</a>

                <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>