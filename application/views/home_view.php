<p class="bg-success">
	
	<?php if ($this->session->flashdata('login_success')): ?>

	<?php echo $this->session->flashdata('login_success'); ?>

	<?php endif; ?>

	




	<?php if ($this->session->flashdata('user_registered')): ?>

	<?php echo $this->session->flashdata('user_registered'); ?>

	<?php endif; ?>

</p>
<p class="bg-danger">
	
	<?php if ($this->session->flashdata('login_failed')): ?>

	<?php echo $this->session->flashdata('login_failed'); ?>

	<?php endif; ?>


	<?php if ($this->session->flashdata('no_access')): ?>

	<?php echo $this->session->flashdata('no_access'); ?>

	<?php endif; ?>


</p>
<div class="jumbotron">
<h1 class="text-center">Welcome to the CI APP</h1>
</div>

<?php if(isset($projects)): ?>
<h1 class="text-center">Projects</h1>

<table class="table table-striped">
	


	<thead>
		<tr>
			<th>project name</th>
			<th>project description</th>
		</tr>
	</thead>

	<tbody>
	
		<?php foreach($projects as $project): ?>
		<tr>
			<td><?php echo  strtoupper($project->project_name); ?></td>
			<td><?php echo  strtoupper($project->project_body); ?></td>
			<td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id ?>">View</a></td>
		</tr>
		


	<?php endforeach; ?>
	
	</tbody>
</table>

<?php endif; ?>


<?php if(isset($tasks)): ?>
<h1 class="text-center">Task</h1>

<table class="table table-striped">
	


	<thead>
		<tr>
			<th>Task name</th>
			<th>Task description</th>
		</tr>
	</thead>

	<tbody>
	
		<?php foreach($tasks as $task): ?>
		<tr>
			<td><?php echo  strtoupper($task->task_name); ?></td>
			<td><?php echo  strtoupper($task->task_body); ?></td>
			<td><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id ?>">View</a></td>
		</tr>
		


	<?php endforeach; ?>
	
	</tbody>
</table>

<?php endif; ?>
