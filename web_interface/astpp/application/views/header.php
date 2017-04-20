<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
 <title>
	 <?php
	$user_header = $this->session->userdata('user_header');
	if (isset($user_header) && $user_header != '') { ?>
		<? start_block_marker('page-title') ?><? end_block_marker() ?> | <?php echo $user_header; ?>
	<?php
	} else { ?>
		<? start_block_marker('page-title') ?><? end_block_marker() ?> | ASTPP - Open Source Voip Billing Solution
	<?php
	}
	?>
</title>
    <link rel="icon" href="<? echo base_url(); ?>assets/images/favicon.ico"/>
    <script language="javascript" type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	function seetext(x){
		x.type = "text";
	}
	function hidepassword(x){
		x.type = "password";
	}
	function processForm(id,table) {
	  var url="<?php echo base_url(); ?>get_status/"+id;
	  var status='false';
	  if($('#switch'+id).attr('checked')){
		status='true';
	  } 
	  $.ajax({
	      type:"POST",
	      url:url,
	      data:{"status":status,"id":id,"table":table},
	  });
	}
    </script>    

     <link href="<?= base_url() ?>assets/css/checkbox.css" rel="stylesheet"/>
     <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.css"/>
     <link href="<?= base_url() ?>assets/css/sidebar_style.css" rel="stylesheet" type="text/css"/>
     <link href="<?php echo base_url(); ?>/assets/css/jquery.datetimepicker.css" rel="stylesheet" />
     <link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url(); ?>/assets/css/tabcontent.css"/>
     <link href="<?= base_url() ?>assets/fonts/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet"/>
     <link href="<?= base_url() ?>assets/css/global-style.css" rel="stylesheet" type="text/css"/>
     <link href="<?php echo base_url(); ?>assets/css/facebox.css" rel="stylesheet" media="all" />	
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexigrid.css" type="text/css"/>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.datetimepicker.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/fileinput.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tabcontent.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/respond.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/respond.src.js"></script> 
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/facebox.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flexigrid.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/module_js/generate_grid.js"></script>
    <noscript>
      <div id="noscript-warning">
	<?php echo gettext('ASTPP work best with JavaScript enabled'); ?>
      </div>
    </noscript>  
    <? start_block_marker('extra_head') ?>
    <? end_block_marker() ?>	

<script>

function PopupCenter(url, title, w, h) {
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
	top = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, ' width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    if (window.focus) {
        newWindow.focus();
    }
}
SyntaxHighlighter.all();
jQuery(document).ready(function() {
   $("select").searchable();
});        
</script> 
</head>
<body>    
<header>
    <div class="container">
    	<div class="navbar-header pull-left col-md-12_new">	
		  <div class="navbar-header col-md-9_new">
	        <? if ($this->session->userdata('userlevel_logintype') != '0') {
			$user_logo = $this->session->userdata('user_logo');	
			if ( ! isset($user_logo) && $user_logo == '') { 
				echo "logo.png";
			}

		?>
			<a class="navbar-brand no-padding margin-t-15" href="<?php echo base_url(); ?>dashboard/">
                	<img id="logo" alt="dashboard" src="<?php echo base_url(); ?>upload/<?= $user_logo?>" width="187" height="71" border="0">
	      <? } else {
			$user_logo = $this->session->userdata('user_logo');	
			if ( ! isset($user_logo) && $user_logo == '') { 
				echo "logo.png";
			}
		?> 
                	<a class="navbar-brand no-padding margin-t-15" href="<?php echo base_url(); ?>user/user/">
                	<img id="logo" alt="user_logo" src="<?php echo base_url(); ?>upload/<?= $user_logo?>" width="187" height="71" border="0">
		<? }?>
                </a>
              
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">    
      	      <span class="sr-only">Toggle navigation</span>       
	      <span class="icon-bar"></span> 
	      <span class="icon-bar"></span> 
	      <span class="icon-bar"></span>
	</button>         


          </div>		
		</div>
		<div class="col-md-1 col-md-1_new no-padding pull-right">

        <div class="navbar-header pull-right profile_border  col-md-12 no-padding">	
		
       	   <ul class="navbar-profile">
         	 <li>
         	 
         	 <?php
		 	 $acc_info=$this->session->userdata('accountinfo');
		 	 if($this->session->userdata('userlevel_logintype') != '0'){?>
		      <a href="<?php echo base_url();?>dashboard/" class=""> <? } else{?>    
		    <a href="<?php echo base_url();?>user/user/" class="">	
		<? }
				if($this->session->userdata('logintype')!=2){
					$result=(array)$this->db->get_where('accounts',array("id"=>$acc_info['id']),1)->first_row();
			$variable =$result['posttoexternal']==1 ? 'Credit' : gettext('Bal');  
			$amount=$result['posttoexternal']==1 ? $result['credit_limit'] :$result['balance'];
						$value= $this->common_model->calculate_currency($amount,'','',true);
						if($value >0){
							$color='#397A13';
						}
						if($value < 0){
							$color='#EE0E43';
						}
						if($value == 0){
							$color='#1A1919';
						}
						$balance_str = '<span style="color:'.$color.'; font-size: 10px;"><b>('.$variable.' : '.$value.')</b></span>';
				 }else{
					$balance_str = '';
				}
                
		$logged_user=$acc_info['first_name']." ".$acc_info['last_name'];
					?>
                	<span>
                            <span class="profile_name">
                                <?= $logged_user?>
                            </span>
                            <label class="profile_label no-margin"><?php echo $balance_str;?>
                            </label>
                        </span>                          
                 </a>
                <ul class="dropdown-box">
		    <? if($this->session->userdata('userlevel_logintype') != '0' && $this->session->userdata('userlevel_logintype') != '3'){?>
		      <li><a href="<?php echo base_url();?>dashboard/"><i class="fa fa-home"></i> &nbsp;<?php echo gettext('Dashboard'); ?></a></li>
		    <? } else{?>    
		      <li><a href="<?php echo base_url();?>user/user/"><i class="fa fa-home"></i> &nbsp;<?php echo gettext('Dashboard'); ?></a></li>
		    <? }?>
		   
<? if($this->session->userdata('userlevel_logintype') != '-1'){
?>
		    <li><a href="<?php echo base_url();?>user/user_myprofile/"><i class= "fa fa-user"></i> &nbsp;
		    <?php echo gettext('My Profile'); ?></a></li>
		      <?
}?>
	    
		    <? if($this->session->userdata('userlevel_logintype') == '-1'){?>
		    <?}?>
		    <? if($this->session->userdata('userlevel_logintype') == '-1'){?>
		    <?}?>
				
                <li><a href="<?php echo base_url();?>logout"><i class="fa fa-power-off"></i> &nbsp;Log out</a></li>
                </ul>
               </li>
              </ul>    	
		</div>
	</div>
<div class="col-md-9 col-xs-9 no-padding">
		<div class="col-md-12 col-xs-7 no-padding ">

  <div id="navbar" class="navbar navbar-white pull-right" role="navigation">     
      <div class="container no-padding">
      <div class="navbar-collapse collapse no-padding">
                <ul class="nav navbar-nav pull-right">

	  <?php 
			$menu_info = unserialize($this->session->userdata("menuinfo"));
			foreach($menu_info as $menu_key => $menu_values){
	  ?>
                
     <?php
		  if(common_model::$global_config['system_config']['opensips']== 0 &&  $menu_key !='SIP Devices'){
			  echo '<li><a href="">'.gettext($menu_key).'<b class="caret"></b></a>';
		  }
		  if(common_model::$global_config['system_config']['opensips']== 1 &&  $menu_key != 'Opensips'){
			  echo '<li><a href="">'.gettext($menu_key).'<b class="caret"></b></a>';  
		  }
	?>
                
                         <ul class="dropdown-menu">
                    <? foreach($menu_values as $sub_menu_key => $sub_menu_values){?>
                       
                           <?  if($sub_menu_key === 0){ ?>
                            <? foreach($sub_menu_values as $sub_key => $sub_menu_lables){
								if((common_model::$global_config['system_config']['paypal_status']== 1 && strtolower($sub_menu_lables["menu_label"]) =='recharge') ||(common_model::$global_config['system_config']['opensips']== 1 &&  $sub_menu_lables["menu_label"] =='Opensips')||
								(common_model::$global_config['system_config']['opensips']== 0 &&  $sub_menu_lables["menu_label"] =='SIP Devices') ||
								(($acc_info['type'] == '3' || $acc_info['type'] == '0') && $acc_info['allow_ip_management'] == '1' && strtolower($sub_menu_lables["menu_label"]) == 'ip settings')){
								}else{?>
                                <li><a href="<?php echo base_url().$sub_menu_lables["module_url"];?>"><?php echo gettext($sub_menu_lables["menu_label"]);?></a></li>
				<?}?>
				<?} ?>
                            <?php }else{
				if(common_model::$global_config['system_config']['opensips']==0 && $menu_key !='System Configuration'){ ?>    
				    <li><a href=""><span><?=$sub_menu_key;?></span><i class="fa fa-caret-right pull-right"></i></a>
				<? } if(common_model::$global_config['system_config']['opensips']==1) {?>
				    <li><a href=""><span><?=$sub_menu_key;?></span><i class="fa fa-caret-right pull-right"></i></a>
				<?php }if(($acc_info['type']==3 || $acc_info['type']== 0) && $acc_info['allow_ip_management']== 1 && strtolower($sub_menu_lables["menu_label"]) !='ip settings'){ ?>
				    <li><a href=""><span><?=$sub_menu_key;?></span><i class="fa fa-caret-right pull-right"></i></a>
				<? }
							?>
                                 <div class="col-4"><div class="col-md-6 no-padding">
									 <ul class="col-12 padding-x-8">
                                <? foreach($sub_menu_values as $sub_menu_lables){ 
					 if($sub_menu_lables['menu_label'] != 'Configuration'){
				  if(common_model::$global_config['system_config']['opensips']==0 &&  $sub_menu_lables["menu_label"] !='SIP Devices'){
					  ?>
				      <li><a href="<?php echo base_url().$sub_menu_lables["module_url"];?>"><?php echo gettext($sub_menu_lables["menu_label"]);?></a></li>
				  <? }
				  if(common_model::$global_config['system_config']['opensips']== 1 && $sub_menu_key !='opensips'){ ?>
				      <li><a href="<?php echo base_url().$sub_menu_lables["module_url"];?>"><?=$sub_menu_lables["menu_label"];?></a></li>
				  <? } 
				}
				} ?>
				</ul></div></div>         
                        <?} 
						}  ?> 
                  </ul>   
                </li> 
            <? } 
	 echo '<li>&nbsp;</li>';
			 ?>
            </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</header>
<span class="afer_row">
<span id="content">
