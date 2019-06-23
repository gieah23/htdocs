<!-- DataTables Example -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Wali Murid</th>
                    <th>Nomor HP</th>
                    <th>Jenis Kelamin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($nama as $row){
                    echo '<tr>';
                    echo "<td>".$row->kode_mapel. "</td>";
                    echo "<td>".$row->nama_mapel. "</td>";
                    echo '</tr>';
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>