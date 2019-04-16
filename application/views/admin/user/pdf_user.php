
<title><?php echo $judul;?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <div class="card mb-3">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="thead-dark">
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Tanggal lahir</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Status</th>
                </thead>   
                <tbody>
                   <?php $i =1; foreach($siswa as $key): ?>
                  <tr>
                  <td><?php echo $i++ ;?></td>
                  <td><?php echo $key->nis; ?></td>
                  <td><?php echo $key->nama; ?></td>
                  <td><?php echo $key->tanggal_lahir;?></td>
                  <td><?php echo $key->kelas; ?></td>
                  <td><?php echo $key->jurusan; ?></td>
                   <td>
                    <?php if ($key->status == 1) { ?>
                      <p>Sudah Memilih </p>
                    <?php } else {?>
                      <p>Belum Memilih</p>
                    <?php } ?>
                  </td>
                  <td>
                </tr>
                <?php endforeach;?>
                </tbody>
              
              </table>
            </div>
          </div>
        </div>
        <script type="text/javascript">
        	window.print();
        </script>