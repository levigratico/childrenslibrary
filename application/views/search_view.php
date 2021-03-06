<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/dist/css/sb-admin-2.min.css'); ?>">
    <style type="text/css">
    	.button {
		  padding: 15px 25px;
		  font-size: 24px;
		  text-align: center;
		  cursor: pointer;
		  outline: none;
		  color: #fff;
		  background-color: #7986CB;
		  border: none;
		  border-radius: 15px;
		  box-shadow: 0 9px #999;
		}

		.button:hover {background-color: #9FA8DA}

		.button:active {
		  background-color: #7986CB;
		  box-shadow: 0 5px #666;
		  transform: translateY(4px);
		}


    .popoverAction {
        cursor: pointer;
    }

    </style>
</head>
<body>

 <div class="page-wrapper" style="min-height: 748px;">
 	<div class="row" style="margin-top:10%; width: 100%;">
 		<div class="col-lg-10 col-lg-offset-1">
 			<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row" >
                                <div class="col-lg-2" style="border: 1px solid red; border-radius: 5px; margin-left: 70px;">
                                  <div> 
                                  	<div style="border: 1px solid red; border-radius: 40px; width:60px; padding: 10px; display: inline-block; margin: 10px;">
                                		<div style="text-align: center; font-size: 20px; border: 1px solid red; border-radius: 30px; padding: 5px;" class="popoverAction">
                                		  <i class="glyphicon glyphicon-user"></i>
                                	   </div>
                                	</div>
                                	<label>Animals</label>
                                  </div>
                                  <div>
                                  	<div style="border: 1px solid red; border-radius: 40px; width:60px; padding: 10px; display: inline-block; margin: 10px;">
                                		<div style="text-align: center; font-size: 20px; border: 1px solid red; border-radius: 30px; padding: 5px;" class="popoverAction">
                                		  <i class="glyphicon glyphicon-user"></i>
                                	    </div>
                                	</div>
                                	<label>Colors</label>
                                  </div>
                                  <div>
                                  	<div style="border: 1px solid red; border-radius: 40px; width:60px; padding: 10px; display: inline-block; margin: 10px;">
                                		<div style="text-align: center; font-size: 20px; border: 1px solid red; border-radius: 30px; padding: 5px;" class="popoverAction">
                                		  <i class="glyphicon glyphicon-user"></i>
                                	    </div>
                                	</div>
                                	<label>House</label>
                                  </div>
                                  <div class="popoverAction">
                                  	<div style="border: 1px solid red; border-radius: 40px; width:60px; padding: 10px; display: inline-block; margin: 10px;">
                                		<div style="text-align: center; font-size: 20px; border: 1px solid red; border-radius: 30px; padding: 5px;" class="popoverAction">
                                		  <i class="glyphicon glyphicon-user"></i>
                                	    </div>
                                	</div>
                                	<label>Creatures</label>
                                  </div>
                                  <div class="popoverAction">
                                  	<div style="border: 1px solid red; border-radius: 40px; width:60px; padding: 10px; display: inline-block; margin: 10px;">
                                		<div style="text-align: center; font-size: 20px; border: 1px solid red; border-radius: 30px; padding: 5px;" class="popoverAction">
                                		  <i class="glyphicon glyphicon-user"></i>
                                	    </div>
                                	</div>
                                	<label>Food</label>
                                  </div>
                                </div>

                                <div class="col-lg-6" style="border: 1px solid red; border-radius: 5px; margin-left: 20px; margin-right: 20px;background-color: #7986CB">
                                   <div>
                                   	 <h3 style="display: inline-block;">Books Available:</h3>
                                   	 <div style="display: inline-block; float: right; margin-right: 10px;">
                                   	  <div style="padding: 10px; font-size: 30px;">
                                   	  	 <i class="glyphicon glyphicon-arrow-left" style="background-color: #536DFE;border-radius: 25px; border: 1px solid red; padding: 10px"></i>
                                   	     <i class="glyphicon glyphicon-arrow-right" style="background-color: #536DFE; border-radius: 25px; border: 1px solid red; padding: 10px"></i>
                                   	  </div>
                                   	  
                                   	 </div>
                                   </div>
                                   <div style="border: 1px solid blue; height: 300px; margin-top: 15px; margin-bottom: 10px; border-radius: 5px; padding: 10px; background-color: #64B5F6">
                                   	<div style="width: 100%; border: 1px solid red; height: 280px; background-color: #fff	">
                                   		
                                   	</div>
                                   </div>
                                </div>  
                                <div class="col-lg-2">
                                	<div style="border: 1px solid red; border-radius: 5px; height: 250px;">
                                		<h6 style="text-align: center; background-color: #7986CB; padding:5px; margin-top: 0"><strong>Filtered:</strong></h6>
                                	</div>
                                	<div style="margin-top: 5px; border: 1px solid red; height: 80px; border-radius: 5px; text-align: center; font-size: 40px;" class="button">
                					            <i class="glyphicon glyphicon-search"></i>
                                	</div>
                                </div>      
                            </div>
                            <!-- /.row -->
               </div>
                        <!-- /.panel-body -->
            </div>
 		</div>
 	</div>
 </div>





<script type="text/javascript" src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript src="<?php echo base_url('assets/template/dist/js/sb-admin-2.min.js'); ?>"></script>
<script type="text/javascript">
  $(function(){

  });
</script>
</body>
</html>