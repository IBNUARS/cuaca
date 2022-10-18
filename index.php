<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Utama</title>
  <link href="include/bootstrap-5.2.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="card cuaca-form">
      <div class="card-body text-center">
        <div class="img">
          <img src="img/frame.png" alt="awan">
        </div>
        <h2 class="card-title text-center">Prediksi Cuaca</h2>
        <form>
          <div class="inputan">
            <div class="card-text border-abu mb-4 d-flex border rounded px-3 py-2">
              <img src="img/Time Circle.svg" alt="Time Circle">
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih bulan</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </div>
            <div class="card-text border-abu mb-4 d-flex border rounded px-3 py-2 mb-3">
              <img src="img/Calendar.svg" alt="Time Circle">
              <select class="form-select" aria-label="Default select example">
                <option selected>Tahun</option>
                <option value="1">2021</option>
                <option value="2">2022</option>
                <option value="3">2023</option>
                <option value="4">2024</option>
              </select>
            </div>
            <div class="d-grid gap-2 m">
              <button type="submit" class="btn btn-secondary py-3">Submit</button>
            </div>
        </form>
      </div>
    </div>

  </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>