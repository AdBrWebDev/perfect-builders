<div id="team" class="container mx-auto center section scrollspy w-100">
            <h2 data-aos="zoom-in" data-aos-duration="300">Náš tým</h2>
            <div data-aos="fade-up" data-aos-duration="500" id="team" class="carousel w-100 container mx-auto" style="margin-bottom: 1%;">
            <?php 
                    $stmt = $conn->prepare('SELECT * FROM team');
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $grand_total = 0;
                    while ($row = $result->fetch_assoc()):
            ?>
                <div class="carousel-item card center p-3 shadow-lg" style="cursor: pointer">
                        <div class="card-image">
                            <img src="./images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                            <div class="card-content">
                                <br>
                                <name><h6><?php echo $row['name']; echo " "; echo $row['surname']; ?></h6></name>
                                <p><?php echo $row['work_position']; ?></p>
                                <mail><?php echo $row['mail']; ?></mail>
                            </div>
                        </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>