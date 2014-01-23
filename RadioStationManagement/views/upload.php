<div class="panel panel-primary">
	<!-- HEADING PANEL CONTENT -->
	<div class="panel-heading">
		&nbsp;<strong>Upload ไฟล์เพลง</strong>
	</div>
	
	<!-- BODY PANEL CONTENT -->
	<form action="controller/upload.php?user=<?php echo $_SESSION['USER'];?>" method="POST" enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr>
				<td>
					<div class="pull-right">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>&nbsp;<strong>บันทึก</strong></button>
					</div>						
				</td>
			</tr>
			
			<tr>
				<td>
					<div class="panel-body">
						<div class="alert alert-info">
							<table width="500" align="center">
								<tr height="50">
									<td align="right"><strong><h3>อัพโหลดโดย :&nbsp;&nbsp;</h3></strong></td>
									<td><input type="text" class="form-control" name="upload_by" placeholder="<?php echo $_SESSION['USER'];?>" disabled/></td>
								</tr>

								<tr height="50">
									<td align="right"><strong><h3>ชื่อรายการ :&nbsp;&nbsp;</h3></strong></td>
									<td>
								 		<select name="upload_name" class="form-control">
									        <option value="KasetTalk" selected="selected">เกษตรสนทนา</option>
									        <option value="MorningTamma">ฟังธรรมยามเช้า</option>
									        <option value="30mSUT">30 นาทีกับ มทส.</option>
									        <option value="UniSong">เพลินเพลงสถาบัน</option>
									        <option value="LangAndMusic">ภาษากับดนตรี</option>
									        <option value="LawAround">รอบรู้กฏหมาย</option>
									        <option value="3mEng">3 นาทีกับศัพท์ภาษาอังกฤษ</option>
									        <option value="DiscoverySUT">สาระน่ารู้ จาก มทส.</option>
									        <option value="EngineeringTalk">คุยกับนายช่าง</option>
									        <option value="SUTAllAround">รอบรั้ว มทส.</option>
									        <option value="MiddayTamma">ฟังธรรมยามเที่ยง</option>
									        <option value="TeenTalk">เพื่อนกันวัยทีน</option>
								   		</select>
   									</td>
								</tr>
								
								<tr height="50">
									<td align="right"><strong><h3>วัน :&nbsp;&nbsp;</h3></strong></td>
									<td>
										<select name="upload_date" class="form-control">
											<option>=== กรุณาเลือก ===</option>
											<option value="Sunday">อาทิตย์</option>
											<option value="Monday">จันทร์</option>
											<option value="Tuesday">อังคาร</option>
											<option value="Wednesday">พุธ</option>
											<option value="Thursday">พฤหัส</option>
											<option value="Friday">ศุกร์</option>
											<option value="Saturday">เสาร์</option>
										</select>
									</td>
								</tr>
								
								<tr height="50">
									<td align="right"><strong><h3>เวลา :&nbsp;&nbsp;</h3></strong></td>
									<td>
										<select name="upload_time" class="form-control">
											<option>=== กรุณาเลือก ===</option>
											<option value="06.00">06.00 - 06.59 น.</option>
									        <option value="07.00">07.00 - 07.59 น.</option>
									        <option value="08.00">08.00 - 08.59 น.</option>
									        <option value="09.00">09.00 - 09.59 น.</option>
									        <option value="10.00">10.00 - 10.59 น.</option>
									        <option value="11.00">11.00 - 11.59 น.</option>
									        <option value="12.00">12.00 - 12.59 น.</option>
									        <option value="13.00">13.00 - 13.59 น.</option>
									        <option value="14.00">14.00 - 14.59 น.</option>
									        <option value="15.00">15.00 - 15.59 น.</option>
									        <option value="16.00">16.00 - 16.59 น.</option>
									        <option value="17.00">17.00 - 17.59 น.</option>
									        <option value="18.00">18.00 - 18.59 น.</option>
									        <option value="19.00">19.00 - 20.00 น.</option>
										</select>
									</td>
								</tr>
								
								<tr height="50">
									<td align="right"><strong><h3>ไฟล์เพลง :&nbsp;&nbsp;</h3></strong></td>
									<td><input type="file" name="upload_file" class="btn btn-warning" /></td>
								</tr>
								
								<tr height="50">
									<td align="right"><strong><h3>ลองฟัง :&nbsp;&nbsp;</h3></strong></td>
									<td>
										<audio controls>
											<source src="" type="audio/mpeg" />
										</audio>
									</td>
								</tr>
							</table>								
						</div>			
					</div>						
				</td>
			</tr>
		</table>
	</form>
	<!-- END BODY PANEL CONTENT -->
	
</div>