<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

        <?php 
$stmt= $admin->ret("SELECT * FROM `labour`");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
              <!-- <img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""> -->
              <img class="img-fluid" src="../labour/controller/<?php echo $row['l_image'] ; ?>" alt="" />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $row['l_name']; ?></h4>
                <span><?php echo $row['description']; ?></span>
              </div>
            </div>
          </div>

          <?php } ?>

        
            </div>
          </div>

        </div>

      </div>
    </section>