<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="page-wrapper">
	<div class="row"></div>
	<div class="row row-header">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Group</h4>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-striped table-hover footable" data-page-size="10">
								<thead>
									<tr>
										<th>Group</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i = 0; $i < count($bookingGroupList); ++$i) { ?>
									<tr>
										<td><?php echo $bookingGroupList[$i]->DESCRIPTION; ?></td>
										<td><a href="#" data-toggle="modal" data-target="#edit<?php echo $bookingGroupList[$i]->GROUPID; ?>"><div class="btn btn-sm btn-grey">Edit</div></a></td>
										<!-- Modal -->
										<div class="modal fade" id="edit<?php echo $bookingGroupList[$i]->GROUPID; ?>" tabindex="-1" role="dialog" aria-labelledby="taskform" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<?php $attributes = array("id" => "editform", "name" => "editform");
													echo form_open("index.php/Common/BookingGroup/Update/".$bookingGroupList[$i]->GROUPID, $attributes);?>
													<!-- Modal Header -->
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h4 class="modal-title">Record Will Be Changed</h4>
													</div>
													<!-- Modal Body -->
													<div class="modal-body">
														<div class="form-horizontal">
															<div class="form-group">
																<label for="Description" class="create-label col-md-3">Description</label>
																<div class="col-md-9">
																	<input id="Description" name="Description" placeholder="Description" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->DESCRIPTION; ?>" />
																	<span class="text-danger"><?php echo form_error('Description'); ?></span>
																</div>
															</div>
															<div class="form-group">
																<label for="PerBookingDay" class="create-label col-md-3">Per Booking Day</label>
																<div class="col-md-9">
																	<input id="PerBookingDay" name="PerBookingDay" placeholder="Per Booking Day" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->PERBOOKINGDAY; ?>" />
																	<span class="text-danger"><?php echo form_error('PerBookingDay'); ?></span>
																</div>
															</div>
															<div class="form-group">
																<label for="AdvanceBookingDays" class="create-label col-md-3">Advanced Booking Days</label>
																<div class="col-md-9">
																	<input id="AdvanceBookingDays" name="AdvanceBookingDays" placeholder="Advanced Booking Days" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->ADVANCEBOOKINGDAYS; ?>" />
																	<span class="text-danger"><?php echo form_error('AdvanceBookingDays'); ?></span>
																</div>
															</div>
															<div class="form-group">
																<label for="MaxBookPerSection" class="create-label col-md-3">Max Book Per Section</label>
																<div class="col-md-9">
																	<input id="MaxBookPerSection" name="MaxBookPerSection" placeholder="Max Book Per Section" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->MAXBOOKPERSECTION; ?>" />
																	<span class="text-danger"><?php echo form_error('MaxBookPerSection'); ?></span>
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
										<td><a href="#" data-toggle="modal" data-target="#delete<?php echo $bookingGroupList[$i]->GROUPID; ?>"><div class="btn btn-sm btn-grey">Delete</div></a></td>
										<!-- Modal -->
										<div class="modal fade" id="delete<?php echo $bookingGroupList[$i]->GROUPID; ?>" tabindex="-1" role="dialog" aria-labelledby="taskform" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<?php $attributes = array("id" => "deleteform", "name" => "deleteform");
													echo form_open("index.php/Common/BookingGroup/Delete/".$bookingGroupList[$i]->GROUPID, $attributes);?>
													<!-- Modal Header -->
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h4 class="modal-title">Record Will Be Changed</h4>
													</div>
													<!-- Modal Body -->
													<div class="modal-body">
														<div class="form-horizontal">
															<div class="form-group">
																<label for="Description" class="create-label col-md-3">Description</label>
																<div class="col-md-9">
																	<input id="Description" name="Description" placeholder="Description" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->DESCRIPTION; ?>" />
																	<span class="text-danger"><?php echo form_error('Description'); ?></span>
																</div>
															</div>
															<div class="form-group">
																<label for="PerBookingDay" class="create-label col-md-3">Per Booking Day</label>
																<div class="col-md-9">
																	<input id="PerBookingDay" name="PerBookingDay" placeholder="Per Booking Day" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->PERBOOKINGDAY; ?>" />
																	<span class="text-danger"><?php echo form_error('PerBookingDay'); ?></span>
																</div>
															</div>
															<div class="form-group">
																<label for="AdvanceBookingDays" class="create-label col-md-3">Advanced Booking Days</label>
																<div class="col-md-9">
																	<input id="AdvanceBookingDays" name="AdvanceBookingDays" placeholder="Advanced Booking Days" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->ADVANCEBOOKINGDAYS; ?>" />
																	<span class="text-danger"><?php echo form_error('AdvanceBookingDays'); ?></span>
																</div>
															</div>
															<div class="form-group">
																<label for="MaxBookPerSection" class="create-label col-md-3">Max Book Per Section</label>
																<div class="col-md-9">
																	<input id="MaxBookPerSection" name="MaxBookPerSection" placeholder="Max Book Per Section" type="text" class="form-control" value="<?php echo $bookingGroupList[$i]->MAXBOOKPERSECTION; ?>" />
																	<span class="text-danger"><?php echo form_error('MaxBookPerSection'); ?></span>
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
								echo form_open("index.php/Common/BookingGroup/Create", $attributes);?>
								<!-- Modal Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Record Will Be Added</h4>
								</div>
								<!-- Modal Body -->
								<div class="modal-body">
									<div class="form-horizontal">
										<div class="form-group">
											<label for="Description" class="create-label col-md-3">Description</label>
											<div class="col-md-9">
												<input id="Description" name="Description" placeholder="Description" type="text" class="form-control" value="" />
												<span class="text-danger"><?php echo form_error('Description'); ?></span>
											</div>
										</div>
										<div class="form-group">
											<label for="PerBookingDay" class="create-label col-md-3">Per Booking Day</label>
											<div class="col-md-9">
												<input id="PerBookingDay" name="PerBookingDay" placeholder="Per Booking Day" type="text" class="form-control" value="" />
												<span class="text-danger"><?php echo form_error('PerBookingDay'); ?></span>
											</div>
										</div>
										<div class="form-group">
											<label for="AdvanceBookingDays" class="create-label col-md-3">Advanced Booking Days</label>
											<div class="col-md-9">
												<input id="AdvanceBookingDays" name="AdvanceBookingDays" placeholder="Advanced Booking Days" type="text" class="form-control" value="" />
												<span class="text-danger"><?php echo form_error('AdvanceBookingDays'); ?></span>
											</div>
										</div>
										<div class="form-group">
											<label for="MaxBookPerSection" class="create-label col-md-3">Max Book Per Section</label>
											<div class="col-md-9">
												<input id="MaxBookPerSection" name="MaxBookPerSection" placeholder="Max Book Per Section" type="text" class="form-control" value="" />
												<span class="text-danger"><?php echo form_error('MaxBookPerSection'); ?></span>
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