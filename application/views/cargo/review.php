<form action="<?php echo site_url("cargo/save");?>" method="POST" name="frmCargo" id="idFrmCargo">

<!--sender-->

	<div class="row show-grid printable">

		<div class="col-md-6">
						<!--sender-->
						<div class="col-md-12">
							<div class="text-center"><strong>Sender - Người gửi</strong></div>
						</div>

						<div class="col-md-12">
							<em>Full Name - Họ Tên: </em><br><strong><?php echo $cargo['sender']['fullname'];?></strong>
						</div>

						<div class="col-md-12">
							<em>Address - Địa chỉ </em><br><strong><?php echo $cargo['sender']['address'];?>, <?php echo $cargo['sender']['city'];?>, <?php echo $cargo['sender']['state'];?>, <?php echo $cargo['sender']['zipcode'];?></strong>
						</div>

						<div class="col-md-6">
							<em>Phone</em><br><strong><?php echo $cargo['sender']['phone'];?></strong>
						</div>
						<div class="col-md-6">
							<em>Fax</em><br><strong><?php echo $cargo['sender']['fax'];?></strong>
						</div>
						<div class="col-md-12">
							<em>Email</em><br><strong><?php echo $cargo['sender']['email'];?></strong>
						</div>
						<!-- end sender-->
		</div>
		<div class="col-md-6">
						<!--recipient-->
						<div class="col-md-12">
							<div class="text-center"><strong>Recipient - Người nhận</strong></div>
						</div>

						<div class="col-md-12">
							<em>Full Name - Họ Tên: </em><br><strong><?php echo $cargo['recipient']['fullname'];?></strong>
						</div>

						<div class="col-md-12">
							<em>Address - Địa chỉ </em><br><strong><?php echo $cargo['recipient']['address'];?>, <?php echo $cargo['recipient']['ward'];?>, <?php echo $cargo['recipient']['district'];?>, <?php echo $cargo['recipient']['province'];?></strong>
						</div>

						<div class="col-md-6">
							<em>Cell phone</em><br><strong><?php echo $cargo['recipient']['cellphone'];?></strong>
						</div>
						<div class="col-md-6">
							<em>Home phone</em><br><strong><?php echo $cargo['recipient']['homephone'];?></strong>
						</div>
						<div class="col-md-12">
							<em>Email</em><br><strong><?php echo $cargo['recipient']['email'];?></strong>
						</div>
						<!-- end recipient -->
		</div>

<?php $packages = convert_html_value_array($cargo['package']);?>
<?php $other_fee = convert_html_value_array($cargo['other_fee']);?>

		<div class="col-md-12">

						<div class="col-md-12">            								
							<div class="text-center"><strong>Shipping Detail - Chi tiết vận chuyển</strong></div>
						</div>

						<div class="col-md-6">
							<em>Service type</em><br><strong><?php echo $cargo['cargo']['service_type'];?></strong>
						</div>

						<div class="col-md-6">
							<em>Number of Packages</em><br><strong><?php echo count($packages);?> pgks</strong>
						</div>

<?php foreach($packages as $key => $val):?>
						<div class="col-md-12">            								
							<div class="text-center"><strong>Package <?php echo ($key+1);?></strong></div>
						</div>
						<div class="col-md-4">
							<em>Dimension</em><br><strong><?php echo $val['dimension'];?></strong>
						</div>

						<div class="col-md-2">
							<em>Weight</em><br><strong><?php echo $val['weight'];?> lbs</strong>
						</div>

						<div class="col-md-2">
							<em>Chargeable Weight</em><br><strong><?php echo $val['chargeable_weight'];?> lbs</strong>
						</div>

						<div class="col-md-2">
							<em>Insurance</em><br><strong>$<?php echo $val['insurance'];?></strong>
						</div>
						<div class="col-md-2">
							<em>Declared Value</em><br><strong>$<?php echo $val['declare_value'];?></strong>
						</div>

						<div class="col-md-12">
							<em>Description of Contents - Chi tiết hàng gửi</em><br>
							<strong><?php echo nl2br($val['description']);?></strong>
						</div>
	
<?php endforeach;?>

						<div class="col-md-12">            								
							<div class="text-center"><strong>Other Charge</strong></div>
						</div>

<?php foreach($other_fee as $key => $val):?>
						<div class="col-md-12">
							<em>Other Charge: </em><strong><?php echo $val['detail'];?> - $<?php echo $val['fee'];?></strong>
						</div>
<?php endforeach;?>

						<div class="col-md-12">            								
							<div class="text-center"><strong>Total</strong></div>
						</div>

						<div class="col-md-3">
							<em>Total Weight</em><br><strong><?php echo $cargo['cargo']['total_weight'];?> lbs</strong>
						</div>

						<div class="col-md-3">
							<em>Total Weight Chargeable</em><br><strong><?php echo $cargo['cargo']['total_chargeable_weight'];?> lbs</strong>
						</div>

						<div class="col-md-3">
							<em>Payment Method</em><br><strong><?php echo $cargo['cargo']['payment_method'];?></strong>
						</div>

						<div class="col-md-3">
							<em>Total Charge</em><br><strong>$<?php echo $cargo['cargo']['grand_total'];?></strong>
						</div>

		</div>

		<div class="col-md-12">
						<!--signature-->
						<div class="col-md-8">
							<em>Sender's Signature - Chữ ký người gửi</em>
							<br><br><br><br>
						</div>				
						<div class="col-md-4">
							<em>Sender's ID</em>
							<br><br><br><br>
						</div>				
						<div class="col-md-8">
							<em>Employee's Signature - Chữ ký nhân viên</em>
							<br><br><br><br>
						</div>				
						<div class="col-md-4">
							<em>Date</em>
							<br><br><strong><?php echo date("F j, Y");?></strong><br><br>
						</div>				
						<!--end signature-->
		</div>
	</div>



	<div class="panel-body text-right">
    	<button type="submit" class="btn btn-success">Save</button>
    	<button type="button" class="btn btn-default">Edit</button>
	</div>
</form>