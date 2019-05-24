<html lang="en"><head>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Daftar Cuaca</title>

  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body background="cuaca.png">

<!-- Navigation -->
  <nav class="navbar navbar-dark bg-info static-top">
    <div class="container">
      <a class="navbar-brand text-white">Daftar Cuaca</a>
    </div>
  </nav>


  <div class="container py-5">
    <div class="row">
      <div class="col-md-12">
        <h4 style="color: white;">Informasi Cuaca Di Beberapa Daerah :</h4>
         <table class="table">
          <thead class="text-white bg-primary">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Kota</th>
              <th scope="col">Siang</th>
              <th scope="col">Malam</th>
              <th scope="col">Dini-Hari</th>
              <th scope="col">Suhu</th>
              <th scope="col">Kelembapan</th>
            </tr>
          </thead>
          <tbody class="text-white">              <!--  data     -->
            <?php

			$start = 0;
			foreach ($datalist as $value) {
				?>
			<tr>
				<td><?php echo ++$start ?></td>
				<td><?php echo $value->Kota; ?></td>
				<td><?php echo $value->siang; ?></td>
				<td><?php echo $value->malam; ?></td>
				<td><?php echo $value->dini_hari; ?></td>
				<td><?php echo $value->suhu; ?></td>
				<td><?php echo $value->Kelembapan; ?></td>
			</tr>
				<?php
			}?>	
          </tbody>
        </table>
    </div>
  </div>
</div>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="http://prasmanan.ngopidevteam.com/asset/vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="http://prasmanan.ngopidevteam.com/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body></html>

