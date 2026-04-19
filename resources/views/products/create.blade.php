<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

    <h1>Tambah Produk</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <p>
            <label>Nama Produk</label><br>
            <input type="text" name="nama_produk">
        </p>

        <p>
            <label>Jenis</label><br>
            <input type="text" name="jenis">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="number" name="harga">
        </p>

        <p>
            <label>Keterangan</label><br>
            <textarea name="keterangan"></textarea>
        </p>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="/products">Kembali</a>

</body>
</html>