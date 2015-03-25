<h2><?php echo $list['name'] ?> - <?php echo $list['created'] ?></h2>

<div id="tasks" ng-app="Tasks" ng-controller="tasksController">

	<ul class="list-group" ng-model="tasks" ng-init="
			tasks=<?php echo htmlentities(json_encode($tasks)) ?>
			">

		<li class="list-group-item" ng-repeat="(key, value) in tasks">
			<button><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
			<div class="task">
				<div class="task-name">{{value[0].Task.name}}</div>
				<div class="task-user" ng-repeat="(user_key, user) in users" ng-init="users = value.User">
					<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>{{user.username}}
				</div>
			</div>
		</li>
	</ul>

</div>

<?php echo $this->Html->script('tasksCtrler') ?>