<script>

	json_requirement_career = <?php echo json_encode($requirement_career) ?>;

	function load_requirement_career(requirement_career){
		var html="";
		for(var i = 0; i < requirement_career.length; i++){
			var a = '<tr>\n\
						<td>'+(i+1)+'</td>\n\
						<td>'+requirement_career[i].name_en+'</td>\n\
						<td>'+requirement_career[i].name_id+'</td>\n\
						<td>\n\
							<button class="btn btn-xs btn-success" data-toggle="tooltip" title="Cjange" onclick="showEdit('+i+')"><i class="fa fa-edit"></i></button>\n\
                            <button class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete" onclick="showDelete('+i+')"><i class="fa fa-trash"></i></button>\n\
                        </td>\n\
                    </tr>';
            html = html + a;
		}
		$('#isi_tabel').html(html);
		$("#id_tabel").dataTable();
	}

</script>

<section class="content-header">
  <h1>
    Requirement Career
  </h1>
</section>

<!-- INSERT MODAL --> 
<div class="modal fade" id="id_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Insert/Update Requirement</h4>
            </div>
            <form id="form_model" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Requirement Name (English)</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="id_requirement_career">
                            <input type="text" class="form-control" id="name_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Requirement Name (Indonesia) </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name_id" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <img id="load_form_modal" style="display: none;" src="<?php echo base_url().'assets/admin/img/loading.gif'; ?>">
                <span id="notif_form_modal" style="display: none;"></span>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- DELETE MODAL -->
<div class="modal fade" id="id_modal_del" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Requirement</h4>
            </div>
            <form id="form_model_del" class="form-horizontal">
            <div class="modal-body">
                <div class="box-body">
                    <center>
                        <input type="hidden" id="hapus_id_requirement_career">
                        <p style="font-size: 15px;">Do you really want to delete <span id="hapus_nama_requirement_career" style="font-weight: bold;"></span> ?</p>
                    </center>
                </div>
            </div>
            <div class="modal-footer">
                <img id="load_form_modal_del" style="display: none;" src="<?php echo base_url().'assets/admin/img/loading.gif'; ?>">
                <span id="notif_form_modal_del" style="display: none;"></span>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Requirement Career</h3>
            <button class="btn btn-xs btn-primary pull-right" data-toggle="tooltip" title="Add New" style="margin-right: 5px;"  onclick="showAdd()"><i class="fa fa-plus"></i></button>
        </div><!-- /.box-header -->
        <div class="box-body">

          <table id="id_tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Name (English)</th>
                <th>Name (Indonesia)</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody id="isi_tabel">

            </tbody>

          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<script>

load_requirement_career(json_requirement_career);

function showAdd(){
	$("#id_modal").modal("show");
	$("#id_requirement_career").val("");
	$("#name_en").val("");
	$("#name_id").val("");
}

function showEdit(i){
	$("#id_requirement_career").val(json_requirement_career[i].id_requirements_career);
	$("#name_en").val(json_requirement_career[i].name_en);
	$("#name_id").val(json_requirement_career[i].name_id);
	$("#id_modal").modal("show");	
}

$("#form_model").submit(function (e){
		e.preventDefault();
		$("#load_form_model").show();
		$.ajax({
			url: "<?php echo base_url().'admin/mst_requirement_career/insert_requirement_career'; ?>",
			data: { "id_requirement_career":$("#id_requirement_career").val(),
					"name_en":$("#name_en").val(),
					"name_id":$("#name_id").val()
				},
			type : 'POST',
			dataType : 'json',
			success: function (data, textStatus, jqXHR) {
                console.log("OK");
                $("#load_form_modal").fadeOut(1000, function (){
                    $("#notif_form_modal").text(data.status);
                    $("#notif_form_modal").show();
                    $("#notif_form_modal").fadeOut(2000, function (){
                        json_requirement_career=data.requirement_career;
                        load_requirement_career(json_requirement_career);
                        $("#id_modal").modal("hide");
                    });
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("NO");
            }
		});
	});

function showDelete(i){
	$("#hapus_id_requirement_career").val(json_requirement_career[i].id_requirements_career);
	$("#hapus_nama_requirement_career").html(json_requirement_career[i].name_en);
	$("#id_modal_del").modal("show");
}

$("#form_model_del").submit(function (e){
        e.preventDefault();
        $("#load_form_modal_del").show();
        $.ajax({
            url: "<?php echo base_url().'admin/mst_requirement_career/delete_requirement_career'; ?>",
            data: {"id_requirement_career":$("#hapus_id_requirement_career").val()},
            type: 'POST',
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#load_form_modal_del").fadeOut(1000,function(){
                    $("#notif_form_modal_del").text(data.status);
                    $("#notif_form_modal_del").show();
                    $("#notif_form_modal_del").fadeOut(2000, function (){
                        json_requirement_career=data.requirement_career;
                        load_requirement_career(json_requirement_career);
                        $("#id_modal_del").modal("hide");
                    });
                    
                });
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("gagal");

            }
        });
    });

</script>