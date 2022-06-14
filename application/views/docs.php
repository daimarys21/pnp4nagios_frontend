<div class="pagebody">
<table class="body">
<tr valign="top"><td>
<div class="left wid_header">
<div class="p2 ui-corner-top">
<?php echo Kohana::lang('common.docs-header',PNP_VERSION) ?>
</div>
<div class="p4 ui-widget-content ui-corner-bottom" style="width: <?php echo $this->graph_width ?>px">
<?php if (!empty($this->content)) {
echo $this->content;
} ?>
</div>
</div>
</td><td>
<div class="right">

<?php if (!empty($docs_box)) {
echo $docs_box;
} ?>

<?php if (!empty($logo_box)) {
echo $logo_box;
} ?>
</div>
</td></tr>
<tr valign="top"><td colspan="2">
<div class="cb p4 ui-widget-content ui-corner-all">
<?php echo pnp::print_version(); ?>
</div>
</td></tr></table>
</div>




<script>

  window.addEventListener('load', () => {
          document.getElementById('calendario').style.display = 'none';
          document.getElementById('xml').style.display = 'none';
          document.getElementById('stats').style.display = 'none';
          document.getElementById('iconbox').style.display = 'none';


  })

</script>

