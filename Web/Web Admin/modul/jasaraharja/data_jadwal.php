<?php
if(Isset($_POST['update'])){
	$id=$_REQUEST['id'];
	$nama=$_REQUEST['kelas'];
	$update=mysql_query("update reg_wali_kelas set nama_kelas='$nama'
											where id_kelas='$id'");
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
										
										<br>
										<a href="?page=tambah_jadwal" class="btn btn-success fa fa-plus"> Tambah Jadwal</a>
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Jadwal Kegiatan
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
														<th>Minggu</th>
														<th>Tanggal awal</th>
														<th class="hidden-480">Tanggal Akhir</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
												<?php
												$no=1;
												$tampil1=mysql_query("SELECT * FROM jadwal order by tgl1 desc ");
												while($r=mysql_fetch_array($tampil1)){
													$id_j=$r['id_jadwal'];
												?>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<?php echo $no;?>
															</label>
														</td>

														<td>
															<?php echo $r['minggu'];?>
														</td>
														<td class="hidden-480"><?php echo $r['tgl1'];?></td>
														<td class="hidden-480"><?php echo $r['tgl2'];?></td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="#publishe<?php echo $id_j;?>" data-toggle="modal">
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
															<label> ID Siswa</label>
															<input type="text" class="form-control" name="id" value="'.$id_j.'" readonly>
														</div>
														<div class="form-group">
															<label> ID Siswa</label>
															<input type="text" class="form-control" name="minggu" value="'.$r['minggu'].'">
														</div>
														<div class="form-group">
															<label> ID Siswa</label>
															<input type="text" class="form-control" name="tgl1" value="'.$r['tgl1'].'">
														</div>
														<div class="form-group">
															<label> ID Siswa</label>
															<input type="text" class="form-control" name="tgl2" value="'.$r['tgl2'].'">
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
												<?php $no++;}?>
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
								<script type="javascript">
									
			</script>