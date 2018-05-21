<?php
if(isset($_POST['tambah'])){
$id_jadwal=date("dymhs");
$tgl1=$_REQUEST['tgl1'];
$tgl2=$_REQUEST['tgl2'];
$minggu=$_REQUEST['minggu'];
$id_semester=$_REQUEST['semester'];
$query1=mysql_query("insert into jadwal values('$id_jadwal','$id_semester','$minggu','$tgl1','$tgl2')");
	if($query1){
		echo"<script>alert('Input Berhasil');</script>";
		echo"<meta http-equiv='refresh' content='0;'>";
	}else{
	}
}else{
}
?>
<h4 class="lighter">
									
</h4>

								

								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Data Jadwal</h4>

										<div class="widget-toolbar">
											<label>
												<small class="green">
													<b>Validation</b>
												</small>

											</label>
										</div>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">
													<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Masukkan Data Jadwal</h3>
														<form class="form-horizontal" METHOD="POST">
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">ID Jadwal:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="id_jadwal" value="<?php echo date("dymhis");?>" class="col-xs-12 col-sm-6" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Minggu Ke-:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="minggu"  class="col-xs-12 col-sm-6" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
																	</div>
																</div>
															</div>
															
															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Tanggal Awal:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="tgl1" id="datepicker" class="col-xs-12 col-sm-4" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Tanggal Akhir:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="tgl2" id="datepicker2" class="col-xs-12 col-sm-4" required 
																		oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
																	</div>
																</div>
															</div>
															<div class="space-8"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Semester</label>
																<div class="col-xs-12 col-sm-9">
																	<select id="state" name="semester" class="select2" data-placeholder="Click to Choose...">
																		<option value="">&nbsp;</option>
																									<?php
																			$tampil1=mysql_query("select * from semester");
																			while($r=mysql_fetch_array($tampil1)){
																			echo "<option value='$r[id_semester]'>$r[semester]/$r[TA]</option>";
																			 }?>
																	</select>
																</div>
															</div>
															
															<div class="form-group">
															<div class="col-xs-12 col-sm-4 col-sm-offset-3">
																		<button class="btn btn-sm btn-prev">
																			<i class="ace-icon fa fa-arrow-left"></i>
																			Hapus
																		</button>

																		<button name="tambah" type="submit" class="btn btn-success btn-sm btn-next" data-last="Finish">
																			Simpan
																			<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
																		</button>
															</div>
															</div>
														</form>
													</div>

													<div class="step-pane" data-step="2">
														<div>
															<div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Well done!
																</strong>

																You successfully read this important alert message.
																<br />
															</div>

															<div class="alert alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-times"></i>
																	Oh snap!
																</strong>

																Change a few things up and try submitting again.
																<br />
															</div>

															<div class="alert alert-warning">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Warning!</strong>

																Best check yo self, you're not looking too good.
																<br />
															</div>

															<div class="alert alert-info">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Heads up!</strong>

																This alert needs your attention, but it's not super important.
																<br />
															</div>
														</div>
													</div>

													<div class="step-pane" data-step="3">
														<div class="center">
															<h3 class="blue lighter">This is step 3</h3>
														</div>
													</div>

													<div class="step-pane" data-step="4">
														<div class="center">
															<h3 class="green">Congrats!</h3>
															Your product is ready to ship! Click finish to continue!
														</div>
													</div>
												</div>
											</div>
											
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>

								<div id="modal-wizard" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div id="modal-wizard-container">
												<div class="modal-header">
													
												</div>

											</div>
											</div>
										</div>
									</div>
