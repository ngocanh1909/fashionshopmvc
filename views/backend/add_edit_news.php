<?php 
	//load file template
	$this->layout = "views/backend/layout.php";
 ?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit news</div>
		<div class="panel-body">
			<!-- muon load upload file thi phai co thuoc tinh enctype -->
			<form method="post" action="<?php echo $formAction; ?>" enctype= "multipart/form-data">			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Tiêu đề</div>
				<div class="col-md-10">
					<input type="text" name="name" class="form-control" value="<?php echo isset($record->name)?$record->name:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Giới thiệu</div>
				<div class="col-md-10">
					<textarea name="description" class="form-control" style="height:250px;">		<?php echo isset($record->description)?$record->description:""; ?>		
					</textarea>
				<script type="text/javascript">
					CKEDITOR.replace("description");
				</script>	
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Chi tiết</div>
				<div class="col-md-10">
					<textarea name="content" class="form-control" style="height:300px;">
						<?php echo isset($record->content)?$record->content:""; ?>
					</textarea>
					<script type="text/javascript">
					CKEDITOR.replace("content");
				</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="checkbox" <?php if(isset($record->hotnews)&&$record->hotnews==1): ?> checked <?php endif; ?> name="hotnews" id="c_hotnews"> <label for="c_hotnews">Tin nổi bật</label>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Ảnh</div>
				<div class="col-md-10">
					<input type="file" name="img">
				</div>
			</div>
			<!-- end row -->			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>