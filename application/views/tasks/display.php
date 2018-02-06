

<h1>Task for: <?php echo $project_name; ?></h1>

<table class="table table-bordered">
	


	<thead>
		<tr>
			<th>task name</th>
			<th>task description</th>
			<th>date</th>
			
		</tr>
	</thead>

	<tbody>
	
	
		<tr>
			<td>
				<div class="task-name">
					<?php echo  $task->task_name; ?>

				</div>
				
				<div class="task-action">
					<a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id; ?>">Edit</a>
					<a href="<?php echo base_url();?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a>
				</div>

			</td>
			<td><?php echo  $task->task_body; ?></td>
			<td><?php echo  $task->due_date; ?></td>
			<td><a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Completed</a></td>
			<td><a class="btn btn-danger btn-block" href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>">Mark InCompleted</a></td>
		</tr>
		


	
	</tbody>
</table>