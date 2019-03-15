<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="page-wrapper">
	<div class="row"></div>
	<div class="row row-header">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Status</h4>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-striped table-hover footable" data-page-size="10">
								<thead>
									<tr>
										<th>Status</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i = 0; $i < count($bookingStatusList); ++$i) { ?>
									<tr>
										<td><?php echo $bookingStatusList[$i]->Status; ?></td>
										<td><a href="#" data-toggle="modal" data-target="#edit<?php echo $bookingStatusList[$i]->BTStatusID; ?>"><div class="btn btn-sm btn-grey">Edit</div></a></td>
										<!-- Modal -->
										<div class="modal fade" id="edit<?php echo $bookingStatusList[$i]->BTStatusID; ?>" tabindex="-1" role="dialog" aria-labelledby="taskform" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<?php $attributes = array("id" => "editform", "name" => "editform");
													echo form_open("index.php/Common/BookingStatus/Update/".$bookingStatusList[$i]->BTStatusID, $attributes);?>
													<!-- Modal Header -->
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h4 class="modal-title">Record Will Be Changed</h4>
													</div>
													<!-- Modal Body -->
													<div class="modal-body">
														<div class="form-horizontal">
															<div class="form-group">
																<label for="Status" class="create-label col-md-3">Status</label>
																<div class="col-md-9">
																	<input id="Status" name="Status" placeholder="Status" type="text" class="form-control"  value="<?php echo $bookingStatusList[$i]->Status; ?>" />
																	<span class="text-danger"><?php echo form_error('Status'); ?></span>
																</div>
															</div>
															<div class="form-group">
																<label for="Active" class="create-label col-md-3">Active</label>
																<div class="col-md-9">
																	<input type="checkbox" id="Active" name="Active" class="form-control" value="1" <?php echo ($bookingStatusList[$i]->Active == '1' ? 'checked' : null); ?>>
																	<span class="text-danger"><?php echo form_error('Active'); ?></span>
																</div>
															</div>
														</div>
													</div>
													<!-- Modal Footer -->
													<div class="modal-footer">
														<input type="submit" value="Submit" class="submit" />
													</div>
													<?php echo form_close(); ?>
												</div>
											</div>
										</div>
										<td><a href="#" data-toggle="modal" data-target="#delete<?php echo $bookingStatusList[$i]->BTStatusID; ?>"><div class="btn btn-sm btn-grey">Delete</div></a></td>
										<!-- Modal -->
										<div class="modal fade" id="delete<?php echo $bookingStatusList[$i]->BTStatusID; ?>" tabindex="-1" role="dialog" aria-labelledby="taskform" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<?php $attributes = array("id" => "deleteform", "name" => "deleteform");
													echo form_open("index.php/Common/BookingStatus/Delete/".$bookingStatusList[$i]->BTStatusID, $attributes);?>
													<!-- Modal Header -->
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h4 class="modal-title">Record Will Be Changed</h4>
													</div>
													<!-- Modal Body -->
													<div class="modal-body">
														<div class="form-horizontal">
															<div class="form-group">
																<label for="Status" class="create-label col-md-3">Status</label>
																<div class="col-md-9">
																	<input id="Status" name="Status" placeholder="Status" type="text" class="form-control" value="<?php echo $bookingStatusList[$i]->Status; ?>" />
																	<span class="text-danger"><?php echo form_error('Status'); ?></span>
																</div>
															</div>
														</div>
													</div>
													<!-- Modal Footer -->
													<div class="modal-footer">
														<input type="submit" value="Submit" class="submit" />
													</div>
													<?php echo form_close(); ?>
												</div>
											</div>
										</div>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<a href="#" data-toggle="modal" data-target="#insert"><div class="btn btn-sm btn-grey">Insert</div></a>
					<!-- Modal -->
					<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="taskform" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<?php $attributes = array("id" => "insertform", "name" => "insertform");
								echo form_open("index.php/Common/BookingStatus/Create", $attributes);?>
								<!-- Modal Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Record Will Be Added</h4>
								</div>
								<!-- Modal Body -->
								<div class="modal-body">
									<div class="form-horizontal">
										<div class="form-group">
											<label for="Status" class="create-label col-md-3">Status</label>
											<div class="col-md-9">
												<input id="Status" name="Status" placeholder="Status" type="text" class="form-control"  value="" />
												<span class="text-danger"><?php echo form_error('Status'); ?></span>
											</div>
										</div>
										<div class="form-group">
											<label for="Active" class="create-label col-md-3">Active</label>
											<div class="col-md-9">
												<input id="Active" name="Active" type="checkbox" class="form-control"  value="1" <?php echo set_checkbox('Active','1'); ?> />
												<span class="text-danger"><?php echo form_error('Active'); ?></span>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal Footer -->
								<div class="modal-footer">
									<input type="submit" value="Submit" class="submit" />
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div><?php echo $this->session->flashdata('msg'); ?></div>