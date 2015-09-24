<!-- Restangular Config -->
  <script type="text/javascript">
    var base_url    = '<?php echo base_url();?>';
    var api_base_url  = "<?php echo base_url('productions');?>";
  </script>
  <script src="<?php echo base_url('scripts/app.js');?>"></script>
  <script src="<?php echo base_url()?>scripts/config/restangularCFG.js"></script>

<script src="<?php echo base_url() ?>scripts/controllers/productionCtrl.js"></script>

<div ng-app="myApp">
	<div ng-controller="productionCtrl">
		<div  ng-repeat="production in productions" class="ui horizontal segments">
		  <div class="ui segment" >
		    <p><img class="ui small centered image" src="<?php echo base_url()?>assets/img/{{production.image}}"></p> 
		  </div>
		  <div class="ui segment" style="width:795px;">
		    <p style="font-size:20px;">{{ production.sysnopsis }}</p>
		  </div>
		</div> 

		<!-- <div ng-repeat="production in productions" class="ui stackable two column grid">
  			<div class="column" >
  				<div class="ui segment"><img class="ui small image" src="<?php echo base_url()?>assets/img/{{production.image}}"></div>
  			</div>
  			<div class="column">
  				<div class="ui segment"><p>{{ production.sysnopsis }}</p></div>
  			</div>
  		</div>  -->
	</div>
</div>