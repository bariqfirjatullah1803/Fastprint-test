<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fastprint - Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('produk')?>">Fastprint Test</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('produk')?>">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h3>Data Produk <a href="<?= base_url('produk/tambah_data')?>" class="btn btn-sm btn-primary" >Tambah Produk</a></h3>
      </div>
      <div class="card-body">
      <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('produk/')?>" method="GET" class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Sort By Status :</label>
          <select class="form-select" id="inputGroupSelect01" name="status">
            <option value="" <?= $status == ''?'selected':''?>>Semua</option>
            <option value="bisa dijual" <?= $status == 'bisa dijual'?'selected':''?>>Bisa dijual</option>
            <option value="tidak bisa dijual" <?= $status == 'tidak bisa dijual'?'selected':''?>>Tidak bisa dijual
            </option>
          </select>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Id Produk</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Kategori</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1; foreach($produk as $item):?>
            <tr>
              <th><?= $i?></th>
              <th><?= $item['id_produk']?></th>
              <td><?= $item['nama_produk']?></td>
              <td><?= $item['harga']?></td>
              <td><?= $item['kategori']?></td>
              <td><span
                  class="badge rounded-pill <?= $item['status'] == 'bisa dijual' ? 'text-bg-success' : 'text-bg-danger' ;?>"><?= $item['status']?></span>
              </td>
              <td>
                <a href="<?= base_url('produk/edit/'.$item['id_produk'])?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="<?= base_url('produk/delete/'.$item['id_produk'])?>"
                  onclick="confirm('Apakah anda yakin menghapus data ini ?')" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            <?php $i++; endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
</body>

</html>