<?php
$hari ="User";

header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$hari.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
        <div class="card mb-3">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="thead-dark">
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Tanggal lahir</th>
                  <th>Kelas</th>
                  <th>Jurusan</th>
                  <th>Status</th>
                </thead>   
                <tbody>
                   <?php foreach($siswa as $key): ?>
                  <tr>
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