<div id="about" class="container center section scrollspy" id="team">
            <h2 data-aos="zoom-in" data-aos-duration="300">O nás</h2>
            <ul class="collapsible popout" data-aos="fade-up" data-aos-duration="500">
                <li class="active">
                    <div class="collapsible-header teal-text"><h6><i class="material-icons">place</i> Kde nás nájdete</h6></div>
                    <div class="collapsible-body row">
                        <div class="col s12 m12 l12 xl6">
                            <img src="./images/map.jpg" alt="">
                        </div>
                        <div class="col s12 m12 l12 xl6">
                            <address>
                                <ul style="margin-top: 10%">
                                    <li><i class="material-icons">place</i> Slovakia, Bratislava Južná 18</li>
                                    <li><i class="material-icons">phone</i> 0907 600 901</li>
                                    <li><i class="material-icons">mail</i> perfectbuilders@buildings.com</li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header teal-text"><h6><i class="material-icons">help</i> Potrebujete pomoc</h6></div>
                    <div class="collapsible-body">
                        <div>
                            <h5 style="font-size: 20px">Napíšte, a my vám poradíme</h5>
                            <div class="mt-5"><a href="#join-to-team" class="btn teal darken-1 btn-large waves-light waves-effect modal-trigger"><i class="material-icons"><span class="material-icons">
contact_support
</span></i> Potrebujem pomoc</a></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header teal-text"><h6><i class="material-icons">house</i> Naša práca</h6></div>
                    <div class="collapsible-body">
                    <div class="row text-center">
                        <?php
                            $stmt = $conn->prepare('SELECT * FROM ourwork');
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $grand_total = 0;
                            while ($row = $result->fetch_assoc()):
                        ?>
                                <div class="col s12 m6 l6 xl4">
                                    <div class="card rounded" style="height: 250px">
                                    <div class="card-image my-auto">
                                        <img class="my-auto" src="./images/<?php echo $row['image']?>" style="min-height: 200" alt="">
                                    </div>
                                    </div>
                                </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>