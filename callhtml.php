<?php 
function wp_acessibility_html(){
  ?>
  <div id="barraAcessibilidade">
  <div class="collapse" id="menuAcessibilidade"> 
     <a href="#" class="d-flex align-items-center" id="increase" accesskey="1">
     <i class="fas fa-plus mr-2"></i>
     <span class="mr-2">Increase font</span>
     </a>
     <a href="#" class="d-flex align-items-center" id="decrease" accesskey="2">
     <i class="fas fa-minus mr-2"></i>
     <span class="mr-2">Decrease font</span>
     </a>
     <a href="#" class="d-flex align-items-center altocontraste" accesskey="3">
     <i class="fas fa-palette mr-2"></i>
     <span class="mr-2">Black and White</span>
     </a>
     <a href="#" class="d-flex align-items-center" id="invertColors" accesskey="4">
     <i class="fas fa-palette mr-2" style="opacity: 0.5;"></i>
     <span class="mr-2">Inverter colors</span>
     </a>
     <a href="#" class="d-flex align-items-center" id="highlightLinks" accesskey="4">
     <i class="fas fa-magnet mr-2"></i>
     <span class="mr-2">Highlights links</span>
     </a>
  </div>
  <a href="#menuAcessibilidade" data-toggle="collapse" id="btnAcessibilidade" style="padding: 0px 9px 0px 0px; background-image: none;">
     <?php $image_url = plugins_url('assets/img/acessibility.png', __FILE__);
     echo '<img src="' . esc_url($image_url) . '" alt="Example Image">';?>
  </a>
  
  <?php 
  }
  