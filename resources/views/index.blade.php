<!-- resources/views/barang/index.blade.php -->

<h2>List of Barang</h2>

<a href="{{ route('insertBarang') }}" class="btn btn-success">Add New Barang</a>

@if(session('success'))
    <div class="alert alert-success mt-2">
        {{ session('success') }}
    </div>
@endif

<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
            <th>Action</th> <!-- Add this column for the Edit button -->
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->KodeBarang }}</td>
                <td>{{ $barang->NamaBarang }}</td>
                <td>{{ $barang->Satuan }}</td>
                <td>{{ $barang->HargaSatuan }}</td>
                <td>{{ $barang->Stok }}</td>
                <td>
                    <a href="{{ route('edit', $barang->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('destroy', $barang->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
