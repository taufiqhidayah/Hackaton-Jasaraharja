<?php
if(isset($_POST['simpan'])){
	$id_kelas=$_REQUEST['kelas'];
	$query=mysql_query("select count(nis) as no from reg_siswa where id_kelas='$id_kelas'");
	$r=mysql_fetch_array($query);
	$abs=$r['no']+1;
$id_sub=date("dymhs");
$id_siswa=$_REQUEST['id'];
$max=mysql_query("SELECT count( id_kelas ) AS batas FROM reg_siswa WHERE id_kelas ='$id_kelas'");
$raw=mysql_fetch_array($max);
$maxi=$raw['batas'];
if($maxi>=20){
		echo"<script>alert('Kelas Penuh Silahkan Pilih Kelas Lain');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
}else{
$query1=mysql_query("insert into reg_siswa values('$id_sub','$id_kelas','$id_siswa','$abs')");
	if($query1){
		echo"<script>alert('Input Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
}
}else if(Isset($_POST['update'])){
	$id=$_REQUEST['id'];
	$nama="selesai";
	$nmkorban=$_REQUEST['nm'];
	$nik=$_REQUEST['nik'];
	$notelp=$_REQUEST['telp'];
	$nik=$_REQUEST['nik'];
	$alamat=$_REQUEST['alamat'];
		$ket_korban=$_REQUEST['ket_korban'];

	
	$update=mysql_query("update gbr set nik='$nik',telp='$notelp',ket_korban='$ket_korban', nm_korban='$nmkorban', alamat_korban='$alamat', kondisi='$nama',gambar_id='$nama_file_unik',gambar_struk='$nama_file_unik2'
											
											where id='$id'");
			if($update){
		echo"<script>alert('Update Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
	}
?>	
				
								<div class="row">
									

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Data Semua Korban Kecelakaan
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														
														<th>Nama Pelapor</th>
														<th>Alamat</th>
														<th>Gambar</th>
														<th class="hidden-480">Tanggal</th>
														
														
															<th class="hidden-480">Tindakan</th>
														</th>

														
													</tr>
												</thead>

												<tbody>
												<?php
												
												$tampil1=mysql_query("select * from gbr WHERE kondisi='proses' AND tipe='kecelakaan'");
												while($r=mysql_fetch_array($tampil1)){
												    $id=$r['id'];
													
												?>
													<tr>
														
															<td><?php echo $r['nama'];?></td>
														
														
														<td><?php echo $r['alamat'];?></td>
														
													 <td><center><img src='<? echo $r['path'];?>' title='Edit' width="150" height="120"/></center></td>
														<td><?php echo $r['tgl'];?></td>
														

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="#publish<?php echo $r['id'];?>" data-toggle="modal">
																	Ajukan Asuransi
																</a>

																
															</div>

															
														</td>
														
															<?php echo'<div class="modal fade" id="publish'.$r['id'].'" tabindex="-1" role="publish'.$r['id'].'" aria-hidden="true">
														<div class="modal-dialog">
										<div class="modal-content">
											<div id="modal-wizard-container">
												<div class="modal-header">
													<h4 class="modal-title">Notifikasi</h4>
												</div>
												<form action="" Method="POST">
												<div class="modal-body">
													<div class="form-body">
														<div class="form-group">
															<label> ID </label>
															<input type="text" class="form-control" name="id" value="'.$id.'" readonly>
														</div>
														<div class="form-group">
															<label> Nama Pelapor</label>
															<input type="text" class="form-control" name="nama"  value="'.$r['nama'].'">
														</div>
														<div class="form-group">
															<label> Alamat Kejadian</label>
															<input type="text" class="form-control" name="alamat"  value="'.$r['alamat'].'">
														</div>

														<div class="form-group">
															<label> NIK Korban</label>
															<input type="text" class="form-control" name="nik"  >
																											</div>

													<div class="form-group">
															<label> Nama Korban</label>
															<input type="text" class="form-control" name="nm"  >
																											</div>
																											
														<div class="form-group">
															<label> No Telepon yang bisa dihubungi</label>
															<input type="text" class="form-control" name="telp"  >
																											</div>
																											
																											<div class="form-group">
															<label> Alamat Korban</label>
															<input type="text" class="form-control" name="alamat"  >
																											</div>
																											
																																<div class="form-group">
															<label> Keterangan Korban isikan salah satu (luka ringan/ luka bera/ menginnggal dunia)</label>
															<input type="text" class="form-control" name="ket_korban"  >
																											</div>
													</div>
												</div>

											</div>

											<div class="modal-footer wizard-actions">
												<button type="submit" name="update" class="btn btn-success btn-next">
													<i class="ace-icon fa fa-arrow-right"></i>
													Ajukan Santunan Jasaraharja
												</button>

												
												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
												</form>
											</div>
										</div>
									</div>
								</div>';
											?>
														<div id="modals<?php echo $id_siswa;?>" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div id="modal-wizard-container">
												<div class="modal-header">
													<h4 class="modal-title">Notifikasi</h4>
												</div>
												<form action="" Method="POST">
												<div class="modal-body">
													<div class="form-body">
														<div class="form-group">
															<label> ID Siswa</label>
															<input type="text" class="form-control" name="id" value="<?php echo $id_siswa;?>" readonly>
														</div>
														<div class="form-group">
															<label> Nama Siswa</label>
															<input type="text" class="form-control"  value="<?php echo $nama;?>" readonly>
														</div>
														<div class="form-group">
															<label> Kelas</label>
															<select class="form-control" name="kelas">
																<option>Pilih Kelas</option>
																<?php $selek=mysql_query("select * from reg_wali_kelas");
																while($r=mysql_fetch_array($selek)){
																	?>
																	<option value="<?php echo $r['id_kelas'];?>"><?php echo $r['nama_kelas'];?></option>
																<?php }?>
															</select>
														</div>
													</div>
												</div>

											</div>

											<div class="modal-footer wizard-actions">
												<button type="submit" name="simpan" class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Simpan
												</button>

												<button class="btn btn-success btn-sm btn-next" data-dismiss="modal">
													Tidak
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>

												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								
													</tr>
												<?php }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="ace-icon fa fa-clock-o bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
							
				