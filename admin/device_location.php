<?php include('header.php'); ?>
<?php include('session.php'); ?>
<!-- interfaz para revisar las ubicaciones de los componentes -->
    <body id="class_div">
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">					 					 
						
                        <div class="block">
								<div class="navbar navbar-inner block-header">
								    <div class="muted pull-left"><i class="icon-reorder icon-building"></i> Lista de ubicaciones</div>
									
						<div id="" class="muted pull-right">
								<?php 
								$my_location = mysql_query("select * from stlocation ")or die(mysql_error());
								$count_my_location = mysql_num_rows($my_location);?>
								Numero de elementos: <span class="badge badge-info"><?php echo $count_my_location; ?></span>
						</div>
								
								</div>								
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul	 id="da-thumbs" class="da-thumbs">
										<?php 
										$query = mysql_query("select * from stlocation")or die(mysql_error());									
										$count = mysql_num_rows($query);
										
										if ($count > 0){
										while($row = mysql_fetch_array($query)){
										$stdev_id = $row['stdev_id'];
										?>
										<li id="del<?php echo $stdev_id; ?>">
												<a href="mydevice.php<?php echo '?stdev_id='.$stdev_id; ?>">
													<img src ="<?php echo $row['thumbnails'] ?>" width="130" height="148" class="img-polaroid" alt="">
													<div>
													<span><p><?php echo $row['stdev_location_name']; ?></p></span>
													</div>
												</a>
												
												<?php include('count_device.php') ?>
												<p class="class"><?php echo $row['stdev_location_name']; ?>
												<?php if($not_count == '0'){
				                                 }else{ ?>
					                            <span class="badge badge-success"><?php echo $not_count; ?></span>
				                                 <?php } ?>
												</p>
									    </li>
										<?php } }else{ ?>										
									     <div class="alert alert-info"><i class="icon-info-sign"></i> No hay ubicaciones actualmente</div>
										<?php  } ?>
									</ul>
                                </div>
                            </div>
                        </div>
                      
                    </div>									
                </div>				
            </div>
		<?php include('footer.php'); ?>
        </div>
        <?php include('script.php'); ?>
    </body>
