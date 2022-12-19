<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/dashboard.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap's css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Bootstrap's js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
    <!-- font awesome's kit code -->
		<script
			src="https://kit.fontawesome.com/bc44dd7ee2.js"
			crossorigin="anonymous"
			defer
		></script>
    <!-- Title -->
    <title>Beyond Reality</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="card bg-white rounded-border shadow">
            <div class="card-header">
              <h4>Add Pegawai</h4>
            </div>
            <div class="card-body p-4">
              <form action="add-pegawai-proses.php" method="post">
                <div class="mb-3">
                  <label for="id" class="form-label">ID</label>
                  <input type="text" class="form-control" name="id">
                </div>
                <div class="mb-3">
                  <label for="id" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                  <label for="id" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal" id="tanggal">
                </div>
                <div class="mb-3">
                  <label for="id" class="form-label">Jenis Kelamin</label>
                  <div>
                    <input type="radio" name="jk" id="jk" value="P">Pria
                    <input type="radio" name="jk" id="jk" value="W">Wanita
                  </div>
                </div>
                <div class="mb-3">
                  <label for="id" class="form-label">Jabatan</label>
                  <select id="jabatan" class="form-control" >
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="id" class="form-label">Divisi</label>
                  <input type="text" class="form-control" name="id">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </body>
</html>
