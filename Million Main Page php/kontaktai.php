<?php include 'src/content/head.inc.php'; ?>
<body>
    <style>
        .header {
            height: 100px;
            background-size: cover;
        }
    </style>
    <div class="wrapper">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe src="https://snazzymaps.com/embed/147727" width="100%" height="350px" style="border:none;"></iframe>
            </div>
        </div>
        <div class="kontaktaiBlock">
            <h1>Kontaktai</h1>
            <p>Smolensko g. 10C</p>
            <p>Vilnius, Lietuva, LT-03201</p><br>
            <p>info@million.lt</p>
            <p>+370 618 80111</p>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var menuBox = document.querySelector('nav ul');
            if (menuBox.style.display == "block") { // if is menuBox displayed, hide it
                menuBox.style.display = "none";
            } else { // if is menuBox hidden, display it
                menuBox.style.display = "block";
            }
        }

    </script>    
    <?php include 'src/content/footer.inc.php'; ?>
