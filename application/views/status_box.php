<div class="wid_header">
 <div class="p2 wid_header ui-corner-top">
<?php echo Kohana::lang('common.status-box-header') ?>
 </div>
 <div class="p4 ui-widget-content ui-corner-bottom">
<?php if(isset($host)) echo "<strong>Host:&nbsp;</strong>".
	html::anchor('graph'.
	"?host=".$lhost,
	html::specialchars(pnp::shorten($host))."<br>");?>
<?php if(isset($service)) echo "<strong>Servicio:&nbsp;</strong>" .
	html::anchor('graph'.
	"?host=".$lhost.
	"&srv=".$lservice,
	html::specialchars(pnp::shorten($service))."<br>");?>
<?php if(isset($timet)) echo "<strong>Ultimo Chequeo:&nbsp;</strong>$timet<br>"?>
 </div>
</div>
<p>

