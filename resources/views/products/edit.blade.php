<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

    <h1>Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Nama Produk</label><br>
            <input type="text" name="nama_produk" value="{{ $product->nama_produk }}">
        </p>

        <p>
            <label>Jenis</label><br>
            <input type="text" name="jenis" value="{{ $product->jenis }}">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="number" name="harga" value="{{ $product->harga }}">
        </p>

        <p>
            <label>Keterangan</label><br>
            <textarea name="keterangan">{{ $product->keterangan }}</textarea>
        </p>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/products">Kembali</a>

</body>
</html>