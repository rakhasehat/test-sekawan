<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee List</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Employee
                    <small>List</small>
					<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
					<button class="btn btn-warning" id="refresh" type="button">Reload page</button> 
                </h1>
            </div>
             
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
						<th>Gaji</th>
						<th>Usia</th>
						<th>Foto</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>
        </div>
    </div>
         
</div>
 
        <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama Pegawai</label>
                            <div class="col-md-10">
                              <input type="text" name="employee_name" id="employee_name" class="form-control" placeholder="Nama Pegawai">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Gaji</label>
                            <div class="col-md-10">
                              <input type="text" name="employee_salary" id="employee_salary" class="form-control" placeholder="Gaji">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Usia</label>
                            <div class="col-md-10">
                              <input type="text" name="employee_age" id="employee_age" class="form-control" placeholder="Usia">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->
 
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
 
<script type="text/javascript">
    $(document).ready(function(){
        show_employee(); //call function show all product
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_employee(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>employee/employee_data',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
								'<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].employee_name+'</td>'+
                                '<td>'+data[i].employee_salary+'</td>'+
                                '<td>'+data[i].employee_age+'</td>'+
								'<td>'+data[i].profile_image+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		$("#refresh").click(function(){
            location.reload(true);
        });
 
        //Save product
        $('#btn_save').on('click',function(){
            var employee_name = $('#employee_name').val();
            var employee_salary = $('#employee_salary').val();
            var employee_age = $('#employee_age').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('employee/save')?>",
                dataType : "JSON",
                data : {employee_name:employee_name , employee_salary:employee_salary, employee_age:employee_age},
                success: function(data){
                    $('[name="employee_name"]').val("");
                    $('[name="employee_salary"]').val("");
                    $('[name="employee_age]').val("");
                    $('#Modal_Add').modal('hide');
					location.reload(true);
                    show_product();
                }
            });
            return false;
        });
    });
 
</script>
</body>
</html>
