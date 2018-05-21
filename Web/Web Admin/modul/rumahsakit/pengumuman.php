<?php
if(Isset($_POST['simpan'])){
	$id=date("ymdhis");
	$isi=$_REQUEST['isi'];
	$tgl=$_REQUEST['tgl'];
	$tgl_a=$_REQUEST['tgl_a'];
	$perihal=$_REQUEST['perihal'];
	$kegiatan=$_REQUEST['kegiatan'];
	$update=mysql_query("insert into pengumuman values('$id','$isi','$perihal','$kegiatan','$tgl_a','$tgl')");
			if($update){
		echo"<script>alert('Input Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
	}elseif(Isset($_POST['update'])){
	$id=$_REQUEST['id'];
	$isi=$_REQUEST['isi'];
	$tgl=$_REQUEST['tgl'];
	$tgl_a=$_REQUEST['tgl_a'];
	$perihal=$_REQUEST['perihal'];
	$kegiatan=$_REQUEST['kegiatan'];
	$update1=mysql_query("update pengumuman set tgl='$tgl',
												pengumuman='$isi',
												perihal='$perihal',
												kegiatan='$kegiatan',
												tgl_acara='$tgl_a'
												where id_pengumuman='$id'");
			if($update1){
		echo"<script>alert('Update Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
	}
	elseif(Isset($_POST['hapus'])){
	$id=$_REQUEST['id'];
	$update1=mysql_query("delete from pengumuman where id_pengumuman='$id'");
			if($update1){
		echo"<script>alert('Hapus Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
	}else{
}
?>
								<div class="row">
									<div class="col-xs-12">
										
										<br>
										<a href="#publish" data-toggle="modal" class="btn btn-success fa fa-plus"> Tambah Pengumuman</a>
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Pengumuman
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															No.
														</th>
														<th>Tanggal Posted</th>
														<th>Tanggal Acara</th>
														<th>Perihal</th>
														<th>Kegiatan</th>
														<th>Pengumuman</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
												<?php
												$no=1;
												$tampil1=mysql_query("SELECT * FROM pengumuman order by tgl desc ");
												while($r=mysql_fetch_array($tampil1)){
													$id_j=$r['id_pengumuman'];
												?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<?php echo $no;?>
															</label>
														</td>

														<td>
															<?php echo $r['tgl'];?>
														</td>
														<td>
															<?php echo $r['tgl_acara'];?>
														</td>
														<td>
															<?php echo $r['perihal'];?>
														</td>
														<td>
															<?php echo $r['kegiatan'];?>
														</td>
														<td class="hidden-480"><?php echo $r['pengumuman'];?></td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="#publishe<?php echo $id_j;?>" data-toggle="modal">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#hapus<?php echo $id_j;?>" data-toggle="modal">
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
													</tr>
													<?php echo'<div class="modal fade" id="publishe'.$id_j.'" tabindex="-1" role="publishe'.$id_j.'" aria-hidden="true">
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
															<label> ID Pengumuman</label>
															<input type="text" class="form-control" name="id" value="'.$id_j.'" readonly>
														</div>
														<div class="form-group">
															<label> Tanggal</label>
															<input type="text" class="form-control" name="tgl" value="'.$r['tgl'].'">
														</div>
														<div class="form-group">
															<label> Tanggal Acara</label>
															<input type="text" class="form-control" name="tgl_a" value="'.$r['tgl_acara'].'">
														</div>
														<div class="form-group">
															<label> Tanggal</label>
															<input type="text" class="form-control" name="perihal" value="'.$r['perihal'].'">
														</div>
														<div class="form-group">
															<label> Tanggal</label>
															<input type="text" class="form-control" name="kegiatan" value="'.$r['kegiatan'].'">
														</div>
														<div class="form-group">
															<label> Pengumuman</label>
														</div>
														<div class="form-group">
															<textarea id="form-field-11" 
															class="autosize-transition form-control" name="isi">'.$r['pengumuman'].'</textarea>
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

												</form>
											</div>
										</div>
									</div>
								</div>';
											?>
											
											<?php echo'<div class="modal fade" id="hapus'.$id_j.'" tabindex="-1" role="publishe'.$id_j.'" aria-hidden="true">
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
															<label> Anda ingin menghapus pengumuman ini?</label>
															<input type="hidden" class="form-control" name="id" value="'.$id_j.'" readonly>
														</div>
													</div>
												</div>

											</div>

											<div class="modal-footer wizard-actions">
												<button type="submit" name="hapus" class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Hapus
												</button>

												<button class="btn btn-success btn-sm btn-next" data-dismiss="modal">
													Tidak
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>

												</form>
											</div>
										</div>
									</div>
								</div>';
											?>
												<?php $no++;}?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
<div class="modal fade" id="publish" tabindex="-1" role="publish" aria-hidden="true">
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
															<label> ID Pengumuman</label>
															<input type="text" class="form-control" placeholder="otomatis" readonly>
														</div>
														<div class="form-group">
															<label> Tanggal POST</label>
															<input type="text" class="form-control" name="tgl" value="<?php echo date("d-m-Y");?>" readonly>
														</div>
														<div class="form-group">
															<label> Tanggal Acara</label>
															<input type="text" class="form-control" name="tgl_a" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
														</div>
														<div class="form-group">
															<label> Perihal</label>
															<input type="text" class="form-control" name="perihal" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
														</div>
														<div class="form-group">
															<label> Kegiatan</label>
															<input type="text" class="form-control" name="kegiatan" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
														</div>
														<div class="form-group">
															<label> Detail Pengumuman</label>
														</div>
														<div class="form-group">
															<textarea id="form-field-11" 
															class="autosize-transition form-control" name="isi" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
														</div>
													</div>
												</div>

											</div>

											<div class="modal-footer wizard-actions">
												<button type="submit" name="simpan" class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Simpan
												</button>

												<button class="btn btn-danger btn-sm btn-next" data-dismiss="modal">
													Tidak
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>

												
												</form>
											</div>
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
								<script type="javascript">
									
			</script>