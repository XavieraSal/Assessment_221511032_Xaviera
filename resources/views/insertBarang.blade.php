
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Barang-Barang
                            <a href="{{ url('barang') }}" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('/barang/store') }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4>List Barang</h4>

                            <div class="mb3">
                                <label>Kode Barang</label>
                                <input type="text" name="KodeBarang" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Nama Barang</label>
                                <input type="text" name="NamaBarang" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Satuan</label>
                                <select name="Satuan" id="satuan">
                                    <option value="Pcs">Pcs</option>
                                    <option value="Bungkus">Bungkus</option>
                                    <option value="Lusin">Lusin</option>
                                    <option value="Dus">Dus</option>
                                </select>
                            </div>

                            <div class="mb3">
                                <label>Harga Satuan</label>
                                <input type="text" name="HargaSatuan" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Stok</label>
                                <input type="text" name="Stok" class="form control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class ="btn btn-primary"> Submit </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    