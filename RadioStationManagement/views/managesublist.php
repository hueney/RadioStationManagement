<?php
	require_once 'lib/DB.php';
	require_once 'lib/FN.php';
	$db = new DB();
	$fn = new FN();

	//JOIN TABLE RADIO_LIST AND RADIO_SUBLIST
	$sql = "SELECT radio_list.*, radio_sublist.*
		FROM radio_list, radio_sublist
		WHERE radio_list.Lid = radio_sublist.Lid
		ORDER BY radio_sublist.order ASC";
	$db->query($sql);
	$Data = $db->fetch_array();
	
	if(empty($_GET['D'])){
		$_GET['D'] = "Sunday";
	}
	
	$day = $fn->getDayTH();
	
	$time = $fn->getTime();
?>
 
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong style="font-size: 25px">จัดการ รายการย่อย 
		<span class="label label-success">
			วัน<?php echo $fn->dateToTH($_GET['D']); ?>
		</span>
		</strong>
	</div>
	<div class="panel-body">
		<?php for($i=0; $i<count($day); $i++){?>
			<a href="index.php?v=ManageSubList&D=<?php echo $fn->dateToEN($day[$i]); ?>" class="btn btn-primary">
				<?php echo $day[$i]; ?>
			</a>
		<?php } ?>
		</br></br>
		<table class="table">
			<?php 
			for($i=0;$i<count($time)-1;$i++){
			?>
			<tr class="active" style="font-size: 18px">
				<td><?php echo $fn->timeToBetween($time[$i]); ?></td>
			</tr>
			<tr>
				<td>
					<table class="table table-bordered">
						<tr class="success" style="font-size: 20px">
							<td width="50px" align="center">#</td>
							<td width="350px">รายการ</td>
							<td width="100px">สถานะ</td>
							<td></td>
						</tr>
					<?php for($j=0; $j<count($Data); $j++){?>	
						<?php if($time[$i]==$Data[$j]['time'] && $Data[$j]['day']==$_GET['D']){ ?>
							<tr style="font-size: 18px">
								<td><?php echo $Data[$j]['order']; ?></td>
								<td><?php echo $Data[$j]['title']; ?></td>
								<td>
								<?php if($Data[$j]['status']=="Y"){ ?>
									<span class="label label-success" style="font-size: 18px">
									<span class="glyphicon glyphicon-ok-sign"></span>
									อัพโหลดไฟล์แล้ว
									</span></br>
								<?php }else{ ?>
									<span class="label label-danger" style="font-size: 18px">
									<span class="glyphicon glyphicon-minus-sign"></span>
									ยังไม่ได้อัพโหลดไฟล์
									</span>
								<?php } ?>
								</td>
								<td align="center">
									<a class="btn btn-warning">
										<span class="glyphicon glyphicon-pencil"></span>
									</a>
									<a onClick="JavaScript:if(confirm('คุณต้องการลบ?')==true){
												window.location='controller/delsublist.php?Sid=<?php echo $Data[$j]['Sid']; ?>'};" 
										class="btn btn-danger" >
										<span class="glyphicon glyphicon-remove"></span>
									</a>
								</td>
							</tr>
						<?php }?>				
					<?php } ?>
					</table>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

</div>

