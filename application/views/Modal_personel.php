<div class="row">
			    	
						<div class="modal show" id="myModal">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						          <h4 class="modal-title">Assign Personel</h4>
						        </div>
						        <form action="<?php echo base_url();?>Admin/admin_per_ass?id=<?php echo $this->input->get('id');?>" class="form_group" method="post">
						        <div class="modal-body">
										<select name="personel" class="form-control">
										<?php foreach($option as $option){?>
										<option value=<?=$option->person_id;?>><?=$option->fname;?>&nbsp<?=$option->mname;?>&
											<?=$option->lname;?></option>
										<?php }?>
										</select>
										
						        </div>
						        <div class="modal-footer">
						          <a href="#" data-dismiss="modal" class="btn">Close</a>
						          <button class="btn btn-primary" type="submit">Save changes</button>
						        </div>
						        </form>
						      </div>
						    </div>
						</div>
			    </div>