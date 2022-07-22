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
        <h3>Edit Produk</h3>
      </div>
      <div class="card-body">
        <form action="<?= base_url('produk/edit_data')?>" method="post">
          <input type="hidden" value="<?= $produk['id_produk']?>" name="id">
          <div class="mb-3">
            <label for="nama-produk" class="form-label">Nama Produk</label>
            <input type="text" name="name" class="form-control" id="nama-produk" value="<?= $produk['nama_produk']?>">
            <?=form_error('name', '<small class="text-danger pl-3">', '</small>');?>
          </div>
          <div class="mb-3">
            <label for="harga-produk" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga-produk" value="<?= $produk['harga']?>">
            <?=form_error('harga', '<small class="text-danger pl-3">', '</small>');?>
          </div>
          <div class="input-group mb-3">
            <select class="form-select" id="inputGroupSelect01" name="kategori">
              <?php foreach($kategori_data as $k):?>
              <option value="<?= $k['kategori']?>" <?= $k['kategori'] == $produk['kategori']?'selected':'';?>>
                <?= $k['kategori']?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="input-group mb-3">
            <select class="form-select" id="inputGroupSelect01" name="status">
              <?php foreach($status_data as $s):?>
              <option value="<?= $s['status']?>" <?= $s['status'] == $produk['status'] ? 'selected':'';?>>
                <?= $s['status']?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
</body>

</html>