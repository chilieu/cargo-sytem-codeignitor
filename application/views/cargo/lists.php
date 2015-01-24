<div class="printable">
<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
    <thead>
        <tr role="row">
                <th style="width: 10px;">Action</th>
        		<th style="width: 276px;">Tracking</th>
                <th style="width: 20px;">PKG(s)</th>
                <th style="width: 40px;">Weight</th>
                <th style="width: 40px;">Weight(kgs)</th>
                <th style="">Commodity</th>
                <th style="width: 100px;">Sender</th>
                <th style="width: 100px;">Recipient</th>
                <th style="width: 100px;">Destination</th>
                <th style="width: 100px;">Date</th>
    	</tr>
    </thead>

    <tbody>
<?php foreach($cargo as $key => $val): ?>
    	<tr class="gradeA odd">
            <td><a href="<?php echo base_url("cargo/view/" . $val['id']);?>">View</a></td>
            <td><img src="<?php echo base_url("barcodegen/barcode.php?text=" . $val['brandname'] . "-" . $val['tracking_number']);?>"></td>
            <td><?php echo count($val['package']);?></td>
            <td><?php echo $val['total_chargeable_weight'];?></td>
            <td><?php echo round($val['total_chargeable_weight'] / 2.2046);?> kgs </td>
            <td>
            <?php $detail = "";?>
            <?php foreach($val['package'] as $k => $v):?>
                <?php $detail .= $v['description']."\n";?>
            <?php endforeach;?>
                <?php echo nl2br( trim($detail) );?>
            </td>
            <td><?php echo $val['sender']['fullname'];?> <br> <?php echo $val['sender']['phone'];?></td>
            <td><?php echo $val['recipient']['fullname'];?> <br> <?php echo $val['recipient']['cellphone'];?></td>
            <td><?php echo $val['recipient']['province'];?></td>
            <td><?php echo $val['create_time'];?></td>
        </tr>
<?php endforeach;?>
    </tbody>
</table>
</div>