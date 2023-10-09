<div class="container">
  <h3 class="mb-3">Peminjaman</h3>
  <form action="<?= BASE_URL; ?>/laptop/simpanLaptop" method="post">
  <div class="class-body">
    <div class="form-group mb-3">
      <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
      <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
    </div>
    <div class="form-group mb-3">
      <label for="jenis_barang" class="form-label">Jenis Barang</label>
      <input type="text" class="form-control" id="jenis_barang" name="jenis_barang">
    </div>
    <div class="form-group mb-3">
      <label for="no_barang" class="form-label">Nomor Barang</label>
      <input type="number" class="form-control" id="no_barang" name="no_barang">
    </div>
    <div class="form-group mb-3">
      <label for="tgl_pinjam">Tanggal Pinjam</label>
      <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  </div>
</div>
