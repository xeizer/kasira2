<div>
    <div class="row m-3">
        <div class="col-12">
            <div class="card border-primary">
                <div class="card-body">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        + Produk
                    </button>
                    <table class="table table-bordered">
                        <tr>
                            <td>No Barang</td>
                            <td>Nama</td>
                            <td>Harga</td>
                            <td>Stok</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Kertas HVS 80G</td>
                            <td>40000</td>
                            <td>5</td>
                        </tr>
                    </table>




                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Produk</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="number" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <label>Stok Produk</label>
                                        <input type="number" class="form-control" />
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary">Simpan</button>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
