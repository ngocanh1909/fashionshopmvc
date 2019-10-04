<?php 
    //lay file layout_trangtrong.php vao day
    $this->layout = "views/frontend/layout_trangtrong.php";
 ?>
		<div class="hero-wrap hero-bread" style="background-image: url('assets/frontend/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.html">Home</a></span> <span>Blog</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
        <?php foreach($data as $rows): ?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="index.php?controller=blog&action=detail&id=<?php echo $rows->news_id; ?>" class="block-20" style="background-image: url('assets/upload/news/<?php echo $rows->img; ?>');">
              </a>
              <div class="text mt-3 d-block pl-md-5">
                <h3 class="heading mt-3"><a href="index.php?controller=blog&action=detail&id=<?php echo $rows->news_id; ?>"><?php echo $rows->name; ?></a></h3>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
          
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
               <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="active"><a href="index.php?controller=blog&action=all&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><span><?php echo $i; ?></span></a></li>
              <?php endfor; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>