<?php 
	//dinh nghia file layout de load layout
	$this->layout = "views/backend/layout.php";
 ?>
<div class="col-md-12">
	<div style="margin-bottom:5px;">
		<a href="index.php?area=backend&controller=category&action=add" class="btn btn-primary">Add category</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Danh mục</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Name</th>
					<th style="width:100px;"></th>
				</tr>
				<?php foreach($data as $rows): ?>
				<tr>
					<td><?php echo $rows->name; ?></td>
					<td style="text-align:center;">
						<a href="index.php?area=backend&controller=category&action=edit&id=<?php echo $rows->category_id; ?>">Edit</a>&nbsp;
						<a href="index.php?area=backend&controller=category&action=delete&id=<?php echo $rows->category_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</a></li>
				<?php for($i = 1; $i <= $numPage; $i++): ?>
				<li><a href="index.php?area=backend&controller=category&action=list_category&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>