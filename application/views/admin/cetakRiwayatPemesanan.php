<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(
                            'Barang/index/'
                        ); ?>">Home</a></li>
                        <li class="breadcrumb-item active">pp</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">

        <div class="container-fluid"><?= $this->session->flashdata(
            'pesan'
        ) ?></div>

        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Pemesanan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="dataTables_wrapper dt-bootstrap4" id="dataTable_wrapper">
                        <form method="POST" action="<?=base_url('admin/CetakHistoriPesanan/')?>">
                        <input type="date" name="range1">
                        <input type="date" name="range2">
                        <input type="submit" name="submit" value="Filter" class="btn btn-info">
                        
                        <?php if($range1 != null && $range2 != null){ ?>
                        <a href="<?= base_url('admin/print_histori/'.$range1.'/'.$range2);?>" class="btn btn-danger" target="_blank">Cetak</a>
                         <?php } ?>   
                        
                        </form>
                        
                            <div class="row">
                                <div class="col-sm-12">
                                
                                <br>
                                </div>
                                    <table id="example" class="table table-bordered dataTable" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Jenis Kategori</th>
                                                <th>Jumlah Barang</th>
                                                <th>Total Harga</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Status Pesanan</th>
                                               <!--  <th>Action</th> -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pesanan as $a):
                                                if ($a['status_pesanan'] == "pesanan selesai" || $a['status_pesanan'] == 'dibatalkan') {
                                                $hasil_rupiah =
                                                    'Rp ' .
                                                    number_format($a['total_bayar'], 2, ',', '.'); ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $a['username'] ?></td>
                                                <td><?= $a['nama_kategori'] ?> </td>
                                                <td><?= $a['jmlBarang'] ?> </td>
                                                <td><?= $hasil_rupiah ?> </td>
                                                <td><?= $a['tanggal_checkout'] ?> </td>
                                                <td><?= $a['status_pesanan'] ?> </td>
                                                <!-- <td>
                                                    <center>
                                                        <a href="<?= base_url('admin/detailPesanan/') .
                                                            $a['id_pesanan'] ?>" class="btn btn-info">Rincian Pesanan</a>
                                                    </center>
                                                </td> -->


                                            </tr>
                                            
                                            <?php
                                            }
                                            endforeach;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>

                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Jenis Kategori</th>
                                                <th>Jumlah Barang</th>
                                                <th>Total Harga</th>
                                                <th>Status Pesanan</th>
                                                <th>Tanggal Transaksi</th>
                                                <!-- <th>Action</th> -->

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
