
<div class="col-md-9">

<p class="bg-success">
	<?php if ($this->session->flashdata('mark_done')): ?>

	<?php echo $this->session->flashdata('mark_done'); ?>

	<?php endif; ?>


</p>

<p class="bg-danger">

	<?php if ($this->session->flashdata('mark_undone')): ?>

	<?php echo $this->session->flashdata('mark_undone'); ?>

	<?php endif; ?>



</p>
	


<h1>Project Name : <?php echo strtoupper($project_data->project_name); ?></h1>
<p>Date Create : <?php echo $project_data->date_created; ?></p>
<h3>Description</h3>
<p>
	<?php echo $project_data->project_body; ?>
</p>


<h3>Active Task</h3>

<ul class="list-group">
<?php if($completed_tasks): ?>


	<?php foreach ($completed_tasks as $task) : ?>
		<li class="list-group-item"> 
			<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
				<?php echo strtoupper($task->task_name); ?> 
			</a>

			<span class="label label-danger">Not Completed</span>
		</li>
	<?php endforeach; ?>

<?php else : ?>
	<p>you have not task pending</p>


<?php endif; ?>
</ul>


<h3>Completed Task</h3>
<ul class="list-group">
<?php if($not_completed_tasks): ?>


	<?php foreach ($not_completed_tasks as $task) : ?>
		<li class="list-group-item">
			<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
				<?php echo strtoupper($task->task_name) ;?> 
			</a>

			<span class="label label-primary">Completed</span>
		</li>
	<?php endforeach; ?>

<?php else : ?>
	<p>you have not task pending</p>


<?php endif; ?>
</ul>
</div>

<div class="col-md-3 pull-right">
	<h4>Projects Actions</h4>
	<ul class="list-group">
		
		<li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id; ?>">Create Task</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>/<?php echo $project_data->id; ?>">Delete Project</a></li>
		<li class="list-group-item"><a class="btn btn-danger btn-block" href="<?php echo base_url();?>projects/index">Back</a></li>


	</ul>
</div>