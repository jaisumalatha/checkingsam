<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Employee Table</h2>
<div align="right" style="margin-bottom:1%;"><button type="button" class="btn btn-primary" style="margin-right: 5px;"> <a class="btn btn-primary" data-toggle="tooltip" href="<?=base_url();?>/Employee/add" data-original-title="Add keyword"><i class="fa fa-plus"></i></a> <a class="btn btn-primary" data-toggle="tooltip" href="<?=base_url();?>" data-original-title="Home"><i class="nav-icon fas fa-tachometer-alt"></i></a> </div>

<table>
  <tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Designation</th>
    <th>Department</th>
    <th>Email Address</th>
    <th>Phone Number</th>
    <th>Dob</th>
    <th>Satus</th>
    <th>Action</th>
  </tr>
  <?php foreach($emp_list as $row)
  $emp_id =$row['emp_id'];
  $emp_name =$row['emp_name'];
  $emp_designation =$row['emp_designation'];
  $emp_department =$row['emp_department'];
  $emp_email =$row['emp_email'];
  $emp_address =$row['emp_address'];
  $emp_mobile =$row['emp_mobile'];
  $emp_dob =$row['emp_dob'];
  $emp_status =$row['emp_status'];
  $emp_action =$row['emp_action'];
  if($emp_status==1){
	 $act_status='Active'; 
  }else{
	  $act_status='InActive';
  }
  { 
  ?>
  <tr>
    <td><?=$emp_id;?></td>
    <td><?=$emp_name;?></td>
    <td><?=$emp_designation;?></td>
    <td><?=$emp_department;?></td>
    <td><?=$emp_email;?></td>
    <td><?=$emp_mobile;?></td>
    <td><?=$emp_dob;?></td>
    <td><?=$act_status;?></td>
    <td>
	  <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg-view<?=$emp_id;?>">
		  <i class="fas fa-folder">
		  </i>
		  View
	  </a>
	  <a class="btn btn-info btn-sm"  data-toggle="tooltip" href="<?=base_url();?>Employee/edit_view/<?=$emp_id;?>" data-original-title="Edit">
		  <i class="fas fa-pencil-alt">
		  </i>
		  Edit
	  </a>
	  <a class="btn btn-danger btn-sm"   data-toggle="modal" data-target="#modal-sm_<?=$emp_id;?>">
		  <i class="fas fa-trash">
		  </i>
		  Delete
	  </a>
  </td>
  </tr>
  <?php }
  ?>
  
</table>

</body>
</html>
