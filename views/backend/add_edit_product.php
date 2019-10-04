<?php 
	//load file template
	$this->layout = "views/backend/layout.php";
 ?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit product</div>
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
				<div class="col-md-2">Giá</div>
				<div class="col-md-10">
					<input type="number" min="0" name="price" class="form-control" value="<?php echo isset($record->price)?$record->price:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Thuộc danh mục</div>
				<div class="col-md-10">
					<select name="category_id">
						<?php 
							$conn = Connection::getInstance();
							$query = $conn->prepare("select * from tbl_category order by category_id desc");
							$query->setFetchMode(PDO::FETCH_OBJ);
							$query->execute();
							//lay tat ca cac ban ghi cua ket qua tra ve
							$category = $query->fetchAll();
						 ?>
						 <?php foreach($category as $rows): ?>
						<option <?php if(isset($record->category_id)&&$record->category_id==$rows->category_id): ?> selected <?php endif; ?> value="<?php echo $rows->category_id; ?>"><?php echo isset($rows->name)?$rows->name:""; ?></option>		
						<?php endforeach; ?>			
					</select>
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
					<input type="checkbox" <?php if(isset($record->hotproduct)&&$record->hotproduct==1): ?> checked <?php endif; ?> name="hotproduct" id="c_hotproduct"> <label for="c_hotproduct">Tin nổi bật</label>
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