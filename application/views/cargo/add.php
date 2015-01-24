<form action="<?php echo site_url("cargo/review");?>" method="POST" name="frmCargo" id="idFrmCargo" class="">

<!--sender-->
    <div class="panel-heading">
        <b>Sender - Người gửi</b>
    </div>

	<div class="panel-body">
		<div class="row">

    		<div class="col-sm-6">
                <div class="form-group">
                    <label>Full Name - Họ Tên</label> <input class="form-control" placeholder="Họ Tên" name="cargo[sender][fullname]" id="sender-fullname" value="<?php echo $cargo['sender']['fullname'];?>">
                </div>
    		</div>

    		<div class="col-sm-6">
                <div class="form-group">
                    <label>Address - Địa chỉ</label> <input class="form-control" placeholder="Địa chỉ" name="cargo[sender][address]" id="sender-address" value="<?php echo $cargo['sender']['address'];?>">
                </div>
    		</div>
    		<!-- /.row -->

    		<div class="col-sm-4">
                <div class="form-group">
                    <label>City - Thành phố</label> <input class="form-control" placeholder="Thành phố" name="cargo[sender][city]" id="sender-city" value="<?php echo $cargo['sender']['city'];?>">
                </div>
    		</div>
    		
    		<div class="col-sm-4">
                <div class="form-group">
                    <label>State - Bang</label> 
                    <select class="form-control" name="cargo[sender][state]" id="sender-state">
                                <option value="CA">California</option>
                                <option value="TX">Texas</option>
                    </select>
                </div>
    		</div>

    		<div class="col-sm-4">
                <div class="form-group">
                    <label>ZipCode - Mã Bưu Điện</label> <input class="form-control input-zipcode" placeholder="XXXXX"  maxlength="5" name="cargo[sender][zipcode]" id="sender-zipcode" value="<?php echo $cargo['sender']['zipcode'];?>">
                </div>
    		</div>
    		<!-- /.row -->


    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Phone - Điện thoại</label> <input class="form-control input-phone" placeholder="xxx-xxx-xxxx" name="cargo[sender][phone]" id="sender-phone" value="<?php echo $cargo['sender']['phone'];?>">
                </div>
    		</div>
    		
    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Fax - Điện thư</label> <input class="form-control input-phone" placeholder="xxx-xxx-xxxx" name="cargo[sender][fax]" id="sender-fax" value="<?php echo $cargo['sender']['fax'];?>">
                </div>
    		</div>

    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Email - Thư điện tử</label> <input class="form-control" placeholder="name@email.com" name="cargo[sender][email]" id="sender-email" value="<?php echo $cargo['sender']['email'];?>">
                </div>
    		</div>
    		<!-- /.row -->

    	</div>
    	<!-- /.row (nested) -->
    </div>
    <!-- /.panel-body -->
<!--sender-->

<div style="clear:both;"></div>

<!--recipient-->
    <div class="panel-heading">
        <b>Recipient - Người nhận</b>
    </div>

	<div class="panel-body">
		<div class="row">

    		<div class="col-sm-6">
                <div class="form-group">
                    <label>Full Name - Họ Tên</label> <input class="form-control" placeholder="Họ Tên" name="cargo[recipient][fullname]" id="recipient-fullname" value="<?php echo $cargo['recipient']['fullname'];?>">
                </div>
    		</div>

    		<div class="col-sm-6">
                <div class="form-group">
                    <label>Address - Địa chỉ</label> <input class="form-control" placeholder="Địa chỉ" name="cargo[recipient][address]" id="recipient-address" value="<?php echo $cargo['recipient']['address'];?>">
                </div>
    		</div>
    		<!-- /.row -->

    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Ward - Phường/Xã</label> <input class="form-control" placeholder="Phường/Xã" name="cargo[recipient][ward]" id="recipient-ward" value="<?php echo $cargo['recipient']['ward'];?>">
                </div>
    		</div>
    		
    		<div class="col-sm-4">
                <div class="form-group">
                    <label>District - Quận/Huyện</label> <input class="form-control" placeholder="Quận/Huyện" name="cargo[recipient][district]" id="recipient-district" value="<?php echo $cargo['recipient']['district'];?>">
                </div>
    		</div>

    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Province - Tỉnh/Thành phố</label> <input class="form-control" placeholder="Tỉnh/Thành phố" name="cargo[recipient][province]" id="recipient-province" value="<?php echo $cargo['recipient']['province'];?>">
                </div>
    		</div>
    		<!-- /.row -->


    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Cell phone - Di Động</label> <input class="form-control input-phone" placeholder="xxx-xxx-xxxx" name="cargo[recipient][cellphone]" id="recipient-cellphone" value="<?php echo $cargo['recipient']['cellphone'];?>">
                </div>
    		</div>
    		
    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Home phone - Điện thoại nhà</label> <input class="form-control input-phone" placeholder="xxx-xxx-xxxx" name="cargo[recipient][homephone]" id="recipient-homephone" value="<?php echo $cargo['recipient']['homephone'];?>">
                </div>
    		</div>

    		<div class="col-sm-4">
                <div class="form-group">
                    <label>Fax/Email address</label> <input class="form-control" placeholder="name@email.com" name="cargo[recipient][email]" id="recipient-email" value="<?php echo $cargo['recipient']['email'];?>">
                </div>
    		</div>
    		<!-- /.row -->

    	</div>
    	<!-- /.row (nested) -->
    </div>
<!--recipient-->

<!--service type-->
    <div class="panel-heading">
        <b>Service Type - Loại dịch vụ - </b>
        <label class="radio-inline"><input type="radio" name="cargo[cargo][service_type]" checked="checked" value="door to door" id="cargo-service-type-door-to-door"> Door to Door</label>
        <label class="radio-inline"><input type="radio" name="cargo[cargo][service_type]" value="airport to airport" id="cargo-service-type-airport-to-airport"> Airport to Airport</label>
    </div>

	<div class="panel-body">

            <!--PACKAGES-->
            <?php $packages = convert_html_value_array($cargo['package']);?>
            <?php $packages = empty($packages) ? array("") : $packages;?>
            <?php foreach($packages as $key => $val):?>
            <div class="row show-grid" id="package-wrapper">

                <div class="col-sm-12 package-input" id="package-1">
                    <b>Package <span class="package-number"><?php echo ($key+1)?></span></b>&nbsp&nbsp<button type="button" class="btn btn-danger btn-xs remove-package <?php echo $hidden = ($key>0) ? "" : "hidden";?>">Remove</button>
                    <div class="row show-grid">

                        <div class="col-sm-4">
                            <label>Dimension (inch)</label> 
                            <input class="form-control" placeholder="L-Dài x W-Rộng x H-Cao" name="cargo[package][dimension][]" value="<?php echo $val['dimension'];?>">
                        </div>
                        <div class="col-sm-4">
                            <label>Weight (lbs)</label> 
                            <input class="form-control input-decimal calculate-weight" placeholder="Trọng lượng" name="cargo[package][weight][]" value="<?php echo $val['weight'];?>">
                        </div>

                        <div class="col-sm-4">
                            <label>Chargeable Weight (lbs)</label> 
                            <input class="form-control input-decimal calculate-chargeable-weight" placeholder="Trọng lượng tĩnh" name="cargo[package][chargeable_weight][]" value="<?php echo $val['chargeable_weight'];?>">
                        </div>

                    </div>

                    <div class="row show-grid">

                        <div class="col-sm-6">
                            <label>Insurance - Bảo hiểm</label> 
							<div class="input-group">
							    <span class="input-group-addon">$</span>
							    <input type="text" class="form-control input-decimal calculate-insurance" name="cargo[package][insurance][]" value="<?php echo $val['insurance'];?>">
							</div>
                        </div>
                        <div class="col-sm-6">
                            <label>Declare Value - Giá trị tài sản</label> 
							<div class="input-group">
							    <span class="input-group-addon">$</span>
							    <input type="text" class="form-control input-decimal calculate-declare-value" name="cargo[package][declare_value][]" value="<?php echo $val['declare_value'];?>">
							</div>
                        </div>

                    </div>

                    <div class="row show-grid">

                        <div class="col-sm-12">
                            <label>Description of Contents - Chi tiết hàng gửi</label> 
                            <textarea class="form-control" rows="5" name="cargo[package][description][]"><?php echo $val['description'];?></textarea>
                        </div>

                    </div>


                </div>

            </div>
            <?php endforeach;?>
        	<!-- /.show-grid (nested) -->

            <div class="row">	           
        		<div class="col-sm-12 text-center"> 
        			<button type="button" class="btn btn-info" id="add-package">Add package</button>
        		</div> 
    		</div> 

            <!--END PACKAGES-->

            <!--OTHER FEE-->
            <?php $other_fee = convert_html_value_array($cargo['other_fee']);?>
            <?php $other_fee = empty($other_fee) ? array("") : $other_fee;?>
            <?php foreach($other_fee as $key => $val):?>
            <div class="row show-grid" id="cargo-other-charge-fee-wrapper">

                <div class="other-charge-row" id="other-charge-row1">
                    <div class="col-sm-9" >
                        <label>Other Charge</label>&nbsp&nbsp<button type="button" class="btn btn-danger btn-xs remove-other-charge <?php echo $hidden = ($key>0) ? "" : "hidden";?>">Remove</button>
                        <input class="form-control cargo-other-charge-fee" placeholder="Chi tiết phụ phí" name="cargo[other_fee][detail][]" value="<?php echo $val['detail'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label>Fee</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control cargo-other-fee input-decimal calculate-fee" name="cargo[other_fee][fee][]" value="<?php echo $val['fee'];?>">
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach;?>
            <!-- /.show-grid (nested) -->

            <div class="row">              
                <div class="col-sm-12 text-center"> 
                    <button type="button" class="btn btn-info" id="add-other-charge">Add other Charge</button>
                </div> 
            </div> 
            <!--END OTHER FEE-->

    </div>

<!--service type-->

<!--Payment menthod-->
    <div class="panel-heading">
		<div class="panel-body">

            <div class="row">              

                <div class="col-sm-3">
                    <label>Charge per lbs</label> 
                    <div class="input-group">
                        <span class="input-group-addon">$/lbs</span>
                        <input class="form-control input-decimal" placeholder="$/lbs" name="cargo[cargo][total_weight]" value="1.99" id="cargo-charge-per-lbs">                
                    </div>
                </div>

                <div class="col-sm-3">
                    <label>Total Weight (lbs)</label> 
                    <input class="form-control input-decimal" placeholder="Trọng lượng" name="cargo[cargo][total_weight]" value="<?php echo $cargo['cargo']['total_weight'];?>" id="cargo-total-weight">
                </div>

                <div class="col-sm-3">
                    <label>Total Chargeable Weight (lbs)</label> 
                    <input class="form-control input-decimal" placeholder="Trọng lượng tĩnh" name="cargo[cargo][total_chargeable_weight]" value="<?php echo $cargo['cargo']['total_chargeable_weight'];?>" id="cargo-total-chargeable-weight">
                </div>

                <div class="col-sm-3">
                    <label>Total Charge - Tổng phí</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control input-decimal" name="cargo[cargo][grand_total]" value="<?php echo $cargo['cargo']['grand_total'];?>" id="grand-total">
                    </div>
                </div>
            </div>


			<div class="row">
                <div class="col-sm-4"></div>
				<div class="col-sm-4 text-center">
                    <label>Payment Method - Phương thức thanh toán</label><br>
                    <label class="radio-inline"><input type="radio" id="cargo-payment-method-cash" name="cargo[cargo][payment_method]" checked="checked" value="cash"> Cash</label>
                    <label class="radio-inline"><input type="radio" id="cargo-payment-method-check" name="cargo[cargo][payment_method]" value="check"> Check</label>
                    <label class="radio-inline"><input type="radio" id="cargo-payment-method-debit-card" name="cargo[cargo][payment_method]" value="debit card"> Debit Card</label>
                    
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <div class="form-group input-group">
                                <input type="text" class="form-control" value="PLC" name="cargo[cargo][brandname]" id="cargo-brand-name" maxlength="3" value="<?php echo $cargo['cargo']['brandname'];?>">
                                <span class="input-group-addon"> - XXXXXXXXXXX</span>
                            </div>
                        </div>
                        
                    </div>

				</div>
                <div class="col-sm-4"></div>
			</div>

        </div>
    </div>
<input type="hidden" value="" id="total-fee">
<!--Payment menthod-->

<div class="panel-body">
    <div class="row text-center">
        <button type="submit" class="btn btn-primary">Review</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </div>
</div>

</form>