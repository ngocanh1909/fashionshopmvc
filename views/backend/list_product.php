<?php 
    //set giao dien cua file layout
    $this->layout = "views/backend/layout.php";
 ?>
 <div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=product&action=add" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List product</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Image</th>
                    <th>Title</th>
                    <th style="width: 200px;">Category</th>
                    <th style="width: 100px;">Price</th>
                    <th style="width: 100px;">Hot product</th>                    
                    <th style="width:100px;"></th>
                </tr>
                <?php 
                    foreach($data as $rows):
                 ?>
                <tr>
                    <td>
                        <?php if(isset($rows->img) && file_exists("assets/upload/product/".$rows->img)): ?>
                        <img src="assets/upload/product/<?php echo $rows->img; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                        <?php 
                            //lay doi tuong connection de truy van du lieu
                            $conn = Connection::getInstance();
                            $query = $conn->prepare("select name from tbl_category where category_id=:cat_id");
                            $query->setFetchMode(PDO::FETCH_OBJ);
                            $query->execute(array("cat_id"=>$rows->category_id));
                            //lay mot ban ghi
                            $result = $query->fetch();
                            echo isset($result->name)?$result->name:"";
                         ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo number_format($rows->price); ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if($rows->hotproduct == 1): ?>
                        Hot
                        <?php endif; ?>
                    </td>                    
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=product&action=edit&id=<?php echo $rows->product_id; ?>">Edit</a>&nbsp;&nbsp;&nbsp;
                        <a href="index.php?area=backend&controller=product&action=delete&id=<?php echo $rows->product_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                <li><a href="index.php?area=backend&controller=product&action=list_product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>