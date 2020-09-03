<?php 
$tdDefault 	= 'padding:5px 10px;border-bottom: 1px solid #999 !important;border-right: 1px solid #999 !important;';
$tdStyle 	= ' style="'.$tdDefault.'background:white;"';
$tdStyle2	= ' style="'.$tdDefault.'background:#f4f4f4;"';
?>
<table cellspacing="0" cellpadding="0" border="1" width="890" style="color: #394144;border-left: 1px solid #999 !important; border-top: 1px solid #999 !important;font:12px Arial;margin:20px 0 0 0;">
	<tbody>
		<tr>
			<td<?php echo $tdStyle ?> width="300">Full name</td>
			<td<?php echo $tdStyle ?> width="590"><?php echo $name ?></td>
		</tr>
		<tr>
			<td<?php echo $tdStyle2 ?> width="300">E-mail Address</td>
			<td<?php echo $tdStyle2 ?> width="590"><?php echo $email ?></td>
		</tr>
		<tr>
			<td<?php echo $tdStyle ?> width="300">Message</td>
			<td<?php echo $tdStyle ?> width="590"><?php echo $message ?></td>
		</tr>
	</tbody>
</table>
