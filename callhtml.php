<?php 
function wp_acessibility_html(){
  ?>
  <div id="barraAcessibilidade">
  <div class="collapse" id="menuAcessibilidade"> 
     <a href="#" class="d-flex align-items-center" id="increase" accesskey="1">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/plus-preto.svg'?>" class="icon-acessibilidade iconPreto">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/plus-branco.svg'?>" class="icon-acessibilidade iconBranco">       
        <span class="mr-2">Increase font</span>
     </a>
     <a href="#" class="d-flex align-items-center" id="decrease" accesskey="2">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/menos-preto.svg'?>" class="icon-acessibilidade iconPreto">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/menos-branco.svg'?>" class="icon-acessibilidade iconBranco">
     <span class="mr-2">Decrease font</span>
     </a>
     <a href="#" class="d-flex align-items-center altocontrasteAcessibilidade" accesskey="3">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/palette-preto.svg'?>" class="icon-acessibilidade iconPreto">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/palette-branco.svg'?>" class="icon-acessibilidade iconBranco">
     <span class="mr-2">Black and White</span>
     </a>
     <a href="#" class="d-flex align-items-center" id="invertColors" accesskey="4">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/palette-preto.svg'?>" class="icon-acessibilidade iconPreto">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/palette-branco.svg'?>" class="icon-acessibilidade iconBranco">
     <span class="mr-2">Inverter colors</span>
     </a>
     <a href="#" class="d-flex align-items-center" id="highlightLinks" accesskey="4">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/ima-preto.svg'?>" class="icon-acessibilidade iconPreto">
         <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/ima-branco.svg'?>" class="icon-acessibilidade iconBranco">
     <span class="mr-2">Highlights links</span>
     </a>
  </div>
  <a href="#menuAcessibilidade" data-toggle="collapse" id="btnAcessibilidade" style="padding: 0px 9px 0px 0px; background-image: none;">
      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/acessibility.png'?>">
  </a>
  
  <?php 
  }
  