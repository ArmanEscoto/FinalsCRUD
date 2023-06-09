<?php

$this->extend('layout/main');
$this->section('body');

?>

<?php if(session()->getflashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>


    <?php endif; ?>


<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
                        <h1>View Student List</h1><br>
                        <a href="/students/create" class="btn btn-success">Add Student</a>
					</div>
					<div class="col-sm-6">
					</div>
				</div>
			</div><br>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
                        <th>Student ID</th>
						<th>Student Name</th>
						<th>Student Number</th>
						<th>Student Course</th>
						<th>Student Email</th>
                        <th>Student Address</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach($students as $student): ?>
                        <tr>
                            <th scope="row"><?= $student['id']; ?></th>
                            <td><?= $student['name']; ?></td>
                            <td><?= $student['student_id']; ?></td>
                            <td><?= $student['course']; ?></td>
                            <td><?= $student['email']; ?></td>
                            <td><?= $student['address']; ?></td>
                            <td>
                                <a href="/students/edit/<?= $student['id']; ?>"class="btn btn-success"><i class='fas fa-user-edit' style='color:#a9ffa3'></i></a>
                                <a href="/students/delete/<?= $student['id']; ?>"class="btn btn-danger"><i class='fa-solid fa-trash-can' style='color: white'></i></a>
                            </td>  
                        </tr>
                     <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>

<?php $this->endSection(); ?>