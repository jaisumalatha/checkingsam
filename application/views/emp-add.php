<?php 
if(isset($employeeedit) && count($employeeedit)>0)
	{
		$employee_id =htmlentities($employeeedit['employee_id']);
		$employee_name=htmlentities($employeeedit['employee_name']);
		
}
else{
	$employee_id ='';
		$employee_name='';
		
}
?>
<div class="content-wrapper" style="min-height: 501px;">

<section class="content-header">
  <h1>Add New employee</h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url();?>"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">employee Information</li>
    <li class="active">Add employee</li>
  </ol>
</section>																	
<!-- Main content -->
<section class="content">
<!-- Full Width boxes (Stat box) -->
<div class="row">
  <div class="col-md-12">
    <div align="right" style="margin-bottom:1%;"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="javascript:history.go(-1)" data-original-title="Back"><i class="fa fa-reply"></i></a> </div>
    <div class="box box-info">
 <div class="box-header">
        <h3 class="box-title">employee Entry Form</h3>	
      </div>
	  <?=form_open_multipart(base_url().'employee/add/'.$employee_id,array('class'=>'form-horizontal mb-0','id'=>'','onsubmit'=>'return validateMe()'));?>
		<div class="box-body">
         <div class="form-group">
            <label for="employee_name"><span class="errorStar">*</span> employee :</label>
            <input type="text" name="employee_name" value="<?=$employee_name;?>" id="employee_name" class="form-control">
          </div>
          <div class="form-group pull-right">
            <input type="submit" name="submit" class="btn btn-primary" value="Save Information">
          </div>
        </div>
        <input type="hidden" value="0" name="hdn">
      <?=form_close();?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
<!-- /.row -->

<script type="text/javascript">
function validateMe(){
	if($("#employee_name").val() == ''){
		swal("employee Required !!!");
		$("#employee_name").focus();
		return false;
	}
	else{
		return true;
	}
}

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })

</script>
</script>
</section></div>