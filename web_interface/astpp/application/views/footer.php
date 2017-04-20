<script src="<?php echo  base_url(); ?>assets/js/bootstrap-select.js"></script>
<script src="<?= base_url() ?>assets/js/maxcdn_bootstrap.min.js"></script>
</section>
</span></span>
<footer class="site-footer"> 
   <div class="padding-b-10 col-md-12 no-padding">
	
  <?php
	$str = isset($_SERVER['HTTPS'])&& $_SERVER['HTTPS'] == 'on' ? 'https://' :'http://';
	$this->db->select('*');	
	$this->db->where('domain',$_SERVER['HTTP_HOST']);
	$this->db->or_where('domain','http://'.$_SERVER['HTTP_HOST']);
	$this->db->or_where('domain','https://'.$_SERVER['HTTP_HOST']);
	$result=$this->db->get('invoice_conf');
	if($result->num_rows() > 0){
		$result=$result->result_array();
		$footer = $result[0]['website_footer'];
	}else{
		$footer = '';
	}
  	if($footer != ''){ ?>
		 <div style="margin-left:470px; "><?=$footer ?>
		 
		 <div style="" class="pull-left">
             <button style="" title="English" class="btn no-padding" id="close-image" type="button" name="en_EN" value="en_EN" onclick="get_lang('en_EN')" ;=""><img style="width: 20px; height: 18px;vertical-align:top;" src="<?php echo  base_url(); ?>assets/images/flags/flag_usa.png"></button>
            <button class="btn no-padding" title="Español" id="close-image" type="button" name="es_ES" value="es_ES" onclick="get_lang('es_ES')" ;=""><img style="width: 20px; height: 18px;vertical-align:top;" src="<?php echo  base_url(); ?>assets/images/flags/spain_flag.gif"></button>
            <button class="btn no-padding" title="Français" id="close-image" type="button" name="fr_FR" value="fr_FR" onclick="get_lang('fr_FR')" ;=""><img style="width: 20px; height: 18px;vertical-align:top;" src="<?php echo  base_url(); ?>assets/images/flags/france.png"></button> </div>
		 
		  </div>
	<?php	} else {
	if ($this->session->userdata['logintype'] == 2) { ?>
	    <div  class="pull-left col-md-3">
			<span>Powered by </span>
			<a href="https://github.com/domecloud/FSUI" target="_blank">
				<span style="color: #216397;text-shadow: 0px 1px 1px #FFF;">
					<strong>FSUI</strong>
				</span>
			</a>
	    </div>


	<?php } else {
		$user_footer = $this->session->userdata('user_footer');	
		if ($user_footer != '') { ?>
		 <div class="col-md-offset-4 col-md-4"><?=$user_footer ?> </div>
		<?} else {?>
	    
	<? } }	} ?>
	
	 <div style="" class="pull-right">
	
   </div>
</footer>   
</body>
</html>
 
