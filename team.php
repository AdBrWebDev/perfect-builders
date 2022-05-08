<div id="team" class="container center section scrollspy w-100">
            <h2>Náš tým</h2>
            <div id="team" class="carousel w-100 container" style="margin-bottom: 1%;">
            <?php 
                    $stmt = $conn->prepare('SELECT * FROM team');
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $grand_total = 0;
                    while ($row = $result->fetch_assoc()):
            ?>
                <div class="carousel-item card center p-4 shadow-lg" style="cursor: pointer">
                        <div class="card-image">
                            <img src="./images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                            <div class="card-content">
                                <br>
                                <name><h6><?php echo $row['name']; echo $row['surname']; ?></h6></name>
                                <p><?php echo $row['work_position']; ?></p>
                                <mail><?php echo $row['mail']; ?></mail>
                            </div>
                        </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>