<?php include 'nav.php'; ?>

    <div class="row section scrollspy" style="top: 12%;" id="top-page">
        <div class="col s12 m12 xl6 l12 w-100">
            <img class="main-image w-100 right-0" src="./images/main-image.jpg" width="100%" alt="best buildings">
        </div>
        <div style="padding: 12%;" class="col s12 m12 xl6 l12 teal-text border-none center">
            <h2 id="main-text" style="font-family:Arial, Helvetica, sans-serif;">Stavby budúcnosti</h2>
        </div>
    </div>

    <?php include 'projects.php'; ?>

        <div class="modal" id="ordermodal">
            <div class="modal-content">
                <h2 id="choosen-house"></h2>
                <div class="input-field">
                    <label for="mailfrom">Your mail</label>
                    <input type="text" class="validate" name="mail-from" id="mailfrom" autocomplete="off">
                <div class="input-field">
                    <select name="choosehouse" id="">
                        <option value="large house"></option>
                        <option value="medium house"></option>
                        <option value="small house"></option>
                        <option value="flat house"></option>
                        <option value="Fairy"></option>
                        <option value="Residence"></option>
                    </select>
                </div>
                <div class="input-field">
                    <textarea name="" id="" cols="30" rows="10" class="materialize-textarea" autocomplete="off"></textarea>
                </div>
            </div>
        </div>
        </div>

        <!-- slider -->
        <div class="carousel container" style="cursor: pointer">
            <div class="carousel-item"><img src="./images/house1.jpg" alt="house1"></div>
            <div class="carousel-item"><img src="./images/house2.jpg" alt="house2"></div>
            <div class="carousel-item"><img src="./images/house3.jpg" alt="house3"></div>
            <div class="carousel-item"><img src="./images/house4.jpg" alt="house4"></div>
            <div class="carousel-item"><img src="./images/house5.jpg" alt="house5"></div>
            <div class="carousel-item"><img src="./images/house6.jpg" alt="house6"></div>
        </div>

        <?php include 'about-company.php'; ?>
        
        <?php include 'team.php' ?>

        <?php include 'footer.php' ?>

        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['firstname'];
            $surname = $_POST['surname'];
            $mailto = "broskoadam@gmail.com";
            $subject = "work";
            $phone = $_POST['phone'];
            $mail = $_POST['mailfrom'];
            $message = "Name: $name \nSurname: $surname \nMail from: $mail \nIncluded file: $file";

            mail($mailto, $subject, $message);
        }
        ?>
        <form method="POST" class="modal p-5" id="join-to-team" style="margin-top: -3%">
            <div class="modal-content center">
                <h2>Napísať správu</h2>
                <br>
                <div class="row container">
                    <div class="col s6 m6 l6 xl6 input-field">
                        <label for="name">Meno</label>
                        <input type="text" class="validate" id="name" name="firstname" autocomplete="off">
                    </div>
                    <div class="col s6 m6 l6 xl6 input-field">
                        <label for="surname">Priezvisko</label>
                        <input type="text" class="validate" id="surname" name="surname" autocomplete="off">
                    </div>
                    <div class="col s12 m12 l12 xl12 input-field">
                        <label for="to">Príjemca</label>
                        <input type="text" class="validate" id="to" name="mailto" disabled value="perfectbuilders@builders.com" autocomplete="off">
                    </div>
                    <div class="col s12 m12 l12 xl12 input-field">
                        <label for="phone">Telefón</label>
                        <input type="text" class="validate" id="phone" name="phone" autocomplete="off">
                    </div>
                    <div class="col s12 m12 l12 xl12 input-field">
                        <label for="mail">Váš e-mail</label>
                        <input type="email" class="validate" id="mail" name="mailfrom" autocomplete="off">
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea2" class="materialize-textarea" data-length="1200"></textarea>
                        <label for="textarea2">Text správy</label>
                    </div>
                </div>
                <button class="btn teal btn-large waves-light waves-effect" name="submit" type="submit" value="submit"><i class="material-icons right">send</i>send</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>
    <script defer src="perfect-builders.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>