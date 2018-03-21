<?php
include "header.php"
?>

<style>
    #slider-container{
        width: 100%;
        height: 400px;



        animation-name: my-slider;
        animation-duration: 30s;
        animation-iteration-count: infinite;
    }

    @keyframes my-slider {
        0%{
            background: url(images/image1.jpg)center center;
        }
        25%{
            background: url(images/image2.jpg)center center ;
        }
        45%{
            background: url(images/image3.jpg)center center;
        }
        65%{
            background: url(images/image4.jpg)center center;
        }
        80%{
            background: url(images/image5.jpg)center center;
        }
        100%{
            background: url(images/image5.jpg)center center;
        }
    }

</style>


<div id="slider-container">

</div>

<?php
include "footer.php"
?>
