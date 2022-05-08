        <div id="projects" class="container section scrollspy center">
            <h2 data-aos="fade-up" data-aos-duration="300">Naše stavby</h2>
            <div class="row text-center modals">
                <?php 
                    $stmt = $conn->prepare('SELECT * FROM buildings');
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $grand_total = 0;
                    while ($row = $result->fetch_assoc()):
                ?>
                <div class="col s12 l3 m12 xl3 card z-depth-5" id="modals" style="min-height: 350px" data-aos="fade-up" data-aos-duration="300">
                    <div class="card-image">
                        <img src="./images/<?php echo $row['mainImg']?>" alt="">
                        <div class="btn btn-floating waves-light waves-effect teal halfway-fab activator"><i class="material-icons">add</i></div>
                    </div>
                    <div class="card-content">
                        <h5><?php echo $row['title']; ?></h5>
                    </div>
                    <div class="card-reveal">
                        <span class="grey-text card-title"><i class="material-icons">close</i></span>
                        <h5><?php echo $row['title']; ?></h5>
                        <br><br>
                        <button id="createorder" class="btn teal modal-trigger">Pozrieť ponuku</button>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
