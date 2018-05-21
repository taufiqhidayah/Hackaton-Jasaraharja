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
	$nama=$_REQUEST['nama'];
	$alamat=$_REQUEST['alamat'];
	$update=mysql_query("update siswa set nama='$nama',
											alamat='$alamat'
											where nis='$id'");
			if($update){
		echo"<script>alert('Input Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
	}else{
}
?>	
								<div class="row">
									<div class="col-xs-12">
								
                <!--quick info section -->
                <div class="col-lg-6">
				
                    <div class="alert alert-danger text-center">
					<?php
				
				 $sql = "SELECT COUNT(*) AS jumlah FROM siswa WHERE jenis_kel='L'";
            			 $tampil = mysql_query($sql);
                     while ($Data = mysql_fetch_array($tampil)) { 
					 $jmllk = $Data["jumlah"];}
						 $sql2 = "SELECT COUNT(*) AS jumlah FROM siswa WHERE jenis_kel='P'";
            			 $tampil2 = mysql_query($sql2);
                     while ($Data2 = mysql_fetch_array($tampil2)) { 
                        $jmlpr = $Data2["jumlah"];
                     }
					?>
                      <a href="?page=cowok"><font color="red">Siswa laki-laki berjumlah <?php echo $jmllk;?> orang</font></a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="alert alert-success text-center">
					
                      <a href="?page=wanita"><font color="Green">Siswa Perempuan berjumlah <?php echo $jmlpr;?> orang</font></a>
                    </div>
                </div>
                
										<br>
										<a href="?page=tambah_siswa" class="btn btn-success fa fa-plus"> Tambah siswa</a>
										
                
                <!--end quick info section -->
            </div>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Data Siswa Laki-Laki
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														
														<th>Nama Lengkap</th>
														<th>Alamat</th>
														<th>Histori Kelas</th>
														<th class="hidden-480">Jenis Kelamin</th>
														<th class="hidden-480">Tanggal Lahir</th>
														
															<th class="hidden-480">Tools</th>
														</th>

														
													</tr>
												</thead>

												<tbody>
												<?php
												
												$tampil1=mysql_query("select * from siswa WHERE jenis_kel='L'");
												while($r=mysql_fetch_array($tampil1)){
													$id_siswa=$r['nis'];
													$nama=$r['nama'];
													$tampil2=mysql_query("select reg_wali_kelas.*, reg_siswa.* from reg_siswa, reg_wali_kelas 
													where reg_siswa.id_kelas=reg_wali_kelas.id_kelas and reg_siswa.nis='$id_siswa'");
												?>
													<tr>
														
														<td>
															<a href="#modals<?php echo $r['nis'];?>" data-toggle="modal"><?php echo $r['nama'];?></a>
														</td>
														<td><?php echo $r['alamat'];?></td>
														<td><?php while($ro=mysql_fetch_array($tampil2)){
															echo" <span class='label label-sm label-danger'> $ro[nama_kelas]</span>";
														}?></td>
														<td class="hidden-480"><?php if($r['jenis_kel']=="L"){
														echo"Laki-Laki";}else{
														echo"Perempuan";}?></td>
														<td><?php echo $r['tgl_lahir'];?></td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="#publish<?php echo $r['nis'];?>" data-toggle="modal">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
														<?php echo'<div class="modal fade" id="publish'.$id_siswa.'" tabindex="-1" role="publish'.$id_siswa.'" aria-hidden="true">
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
															<input type="text" class="form-control" name="id" value="'.$id_siswa.'" readonly>
														</div>
														<div class="form-group">
															<label> Nama Siswa</label>
															<input type="text" class="form-control" name="nama"  value="'.$nama.'">
														</div>
														<div class="form-group">
															<label> Alamat Siswa</label>
															<input type="text" class="form-control" name="alamat"  value="'.$r['alamat'].'">
														</div>
													</div>
												</div>

											</div>

											<div class="modal-footer wizard-actions">
												<button type="submit" name="update" class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													update
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
							
				