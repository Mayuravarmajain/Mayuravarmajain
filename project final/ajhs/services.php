<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">

        <?php  
$stmt= $admin->ret("SELECT * FROM (`product` inner join `category` on 'category.id=product.id') where category.id=product.id ");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 

?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <img class="img-fluid" src="../labour/controller/<?php echo $row['p_image'] ; ?>" alt="" />
              <h4><a href=""><?php echo $row['cname'];?></a></h4>
              <p><?php echo $row['p_description'];?></p>  
              <a href="labourcategory.php?p_id=<?php echo $row['p_id']; ?>" class="get-started-btn scrollto" style="color:black">Booking</a>
            </div>
        
          </div>
          <?php } ?>

          

        </div>

      </div>
    </section>