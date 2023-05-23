<?php

$this->extend('layout/main');
$this->section('body');

?>

<form action="/students/update/<?= $student['id']; ?>" method="POST">
	<div class="modal-header">						
        <h1>Edit Students</h1>
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	</div>
	<div class="modal-body">					
		<div class="form-group">
			<label for="studentName">Student Name</label>
			<input type="text" class="form-control" name="studentName" value="<?= $student['name']; ?>" >
		</div>
        <div class="form-group">
			<label for="studentNum" class="form-level">Student Number</label>
			<input type="text"  class="form-control" name="studentNum" value="<?= $student['student_id']; ?>"" readonly>
		</div>
        <div class="form-group">
			<label for="studentCourse" class="form-level">Student Course</label>
			<input type="text"  class="form-control" name="studentCourse" value="<?= $student['course']; ?>">
		</div>
        <div class="form-group">
			<label for="studentEmail" class="form-level">Student Email</label>
			<input type="text"  class="form-control" name="studentEmail" value="<?= $student['email']; ?>">
		</div>
        <div class="form-group">
			<label for="studentAddress" class="form-level">Student Address</label>
			<input type="text"  class="form-control" name="studentAddress" value="<?= $student['address']; ?>">
		</div>
	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-success" value="Update">
	</div>
</form>



<?php $this->endSection(); ?>