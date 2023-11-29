
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Barang</h4>
                        <a href="{{ route('index') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('update', $barang->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="Kode Barang" class="form-label">Kode Barang</label>
                                <input type="text" name="KodeBarang" class="form-control" value="{{ $barang->KodeBarang }}">
                            </div>

                            <div class="mb-3">
                                <label for="Nama Barang" class="form-label">Nama Barang</label>
                                <input type="text" name="NamaBarang" class="form-control" value="{{ $barang->NamaBarang }}">
                            </div>

                            <div class="mb-3">
                                <label for="Satuan" class="form-label">Satuan</label>
                                <select name="Satuan" id="Satuan" class="form-select">
                                    <option value="Pcs" {{ $barang->Satuan === 'Pcs' ? 'selected' : '' }}>Pcs</option>
                                    <option value="Bungkus" {{ $barang->Satuan === 'Bungkus' ? 'selected' : '' }}>Bungkus</option>
                                    <option value="Lusin" {{ $barang->Satuan === 'Lusin' ? 'selected' : '' }}>Lusin</option>
                                    <option value="Dus" {{ $barang->Satuan === 'Dus' ? 'selected' : '' }}>Dus</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="Harga Satuan" class="form-label">Harga Satuan</label>
                                <input type="text" name="HargaSatuan" class="form-control" value="{{ $barang->HargaSatuan }}">
                            </div>

                            <div class="mb-3">
                                <label for="Stok" class="form-label">New Stock</label>
                                <input type="text" name="Stok" class="form-control" value="{{ $barang->Stok }}">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update Barang</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

