<?php
if (isset($_GET['profil']) && !empty($_GET['profil'])) {

} elseif (isset($_GET['dashboard']) && empty($_GET['dashboard'])) {
    
} else {
    header("location: ?dashboard");
}
    require "header.php";
?>
<!-- main content start-->
<div class="main-content">
    <!-- header section start-->
    <div class="header-section">
        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->
        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu"></ul>
        </div>
        <!--notification menu end -->
    </div>
    <!-- header section end-->
    <noscript>
        <center>
            <div class="alert alert-danger">
                Oh no! You need to have Javascript enabled to use browse this website without any issues.
            </div>
        </center>
    </noscript>
    <br>
    <!-- page heading start-->
    <div class="page-heading">
        <h3>BANK <strong style="color:#007242">DANAMON</strong></h3><br /><hr />
    </div>
    <!-- page heading end-->
    <!--body wrapper start-->
    <div class="wrapper">

<?php
if (isset($_GET['profil']) && !empty($_GET['profil'])) {
    if ($_GET['profil'] == "saya"){
        echo "<h1>Profil Saya</h1><hr />";
        echo '<div style="margin: -20px 20px 0px 0px">';
        echo 
'<table class="table table-bordered table-stripped">
	<tr><td colspan="2"><center><img src="gambar/besar.png" style="border-radius: 50%; width: 100px" /></center></td></tr>
	<tr><th>Nama</th><td>Angki</td></tr>
	<tr><th>Stambuk</th><td>F 551 14 031</td></tr>
	<tr><th>Kelas</th><td>A</td></tr>
</table>';
        echo '</div>';
    } elseif ($_GET['profil'] == "bank") {
        echo "<h1>Profil Web</h1><hr />";
        $source = file_get_contents("profil.php");
        echo '<div style="margin: -20px 20px 0px 0px">'.$source.'</div>';
    } elseif ($_GET['profil'] == "plugin") {
        echo "<h1>Plugin Web</h1><hr />";
        echo '<div style="margin: -20px 20px 0px 0px">
            <h3>JSSOR Slider - http://www.jssor.com/</h3><br />
            <h3>jQuery UI Nicescroll - https://github.com/inuyaksa/jquery.nicescroll</h3><br />
            <h3>Chart.JS - https://www.chartjs.org/</h3><br />
            <h3>Animate.css - https://daneden.github.io/animate.css/</h3><br />
        </div>';        
    } else {

    }
} else {
    require "slide.php";
    echo '<br />        <div class="row states-info">
                <div class="col-md-4">
                <div class="panel blue-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-map-marker"></i>
                                (ID)
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> Kantor Cabang</span>
                                <marquee><h4>Universitas Tadulako</h4></marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel yellow-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> Nomor Antrian </span>
                                <h4><span id="antriKeluar">0</span>/<span id="antriMasuk">0</span>
                                <noscript>
                                Error!
                                </noscript>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel green-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> Total Saldo Nasabah </span>
                                <h4>Rp <span id="saldo"></span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br />
        <div class="rows"><canvas id="chart-area" width="300" height="300"/></div>';
}
        ?>
        
        <div class="col-md-12">
            <div class="panel white-box twt-info">
                <div class="panel-body">
                    <h3>Iklan</h3>
                    <p id="iklanUtama">
                        List of Sponsors will be here
                    </p>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="col-md-6">
                <div class="panel white-box twt-info">
                    <div class="panel-body">
                        <h3>Iklan</h3>
                        <!-- <p><marquee direction="right">List of Sponsors will be here</marquee></p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel white-box twt-info">
                    <div class="panel-body">
                        <h3>Iklan</h3>
                        <!-- <p><marquee direction="left">List of Sponsors will be here</marquee></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--body wrapper end-->
    <!--footer section start-->
    <footer class="sticky-footer">
        <p id="namaStb">Angki|<strong>F 551 14 031</strong></p>
    </footer>
    <!--footer section end-->
</div>
<!-- main content end-->
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/Chart.js"></script>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
<script type="text/javascript">
    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
<?php
if (isset($_GET['profil']) && !empty($_GET['profil'])) {

} elseif (isset($_GET['dashboard']) && empty($_GET['dashboard'])) {
    echo "    function generateSaldo() {
            var fixed = (new Date().getTime() - Date.UTC(2000, 6, 1))
            var curPopulation = Math.exp(22.528293835777973 + 4.2275867940663167699e-13 * fixed
                    - 1.1020778551110890530e-25 * fixed * fixed)
            return Math.round(curPopulation);
        }
        var sld = generateSaldo();
        var deathRate = 2.0;
        var loadTime = new Date();
        function ambilKeluar() {
            return Math.round(((new Date().getTime() - loadTime.getTime()) / 1000) * deathRate);
        }

        var loadPop = generateSaldo();
        function ambilMasuk() {
            return (generateSaldo() - loadPop)
        }

        function updateStats() {
            sld = Math.round((sld+generateSaldo()/100000));
            $('#saldo').html(addCommas(sld));
            var na = ambilKeluar();
            var nb = ambilMasuk();

            $('#antriKeluar').html(na);
            $('#antriMasuk').html(nb);
            var pieData = [{
                value: na,
                color:'#F7464A',
                highlight: '#FF5A5E',
                label: 'Antrian Sekarang'
            }, {
                value: nb,
                color: '#46BFBD',
                highlight:'#5AD3D1',
                label: 'Antrian Terproses'
            }];
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myPie = new Chart(ctx).Pie(pieData);
        }";
} else {
    
}

?>


    var status = 0;
    function getar() {
        if(status == 0) {
            $('#namaStb').addClass('animated bounce');
            status++;
        } else {
            $('#namaStb').removeClass('animated bounce');
            status = 0;
        }
    }
    var statusIklan = 0;
    function getarIklan() {
        if(statusIklan == 0) {
            $('#iklanUtama').addClass('animated flash');
            statusIklan++;
        } else {
            $('#iklanUtama').removeClass('animated flash');
            statusIklan = 0;
        }
    }
    $(document).ready(function () {
        updateStats();
        window.setInterval(updateStats, 2000);
        window.setInterval(getar, 3000);
        window.setInterval(getarIklan, 1000);
        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $Idle: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
            $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            }, $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth - 30);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);

        $('.link').click(function(){
            jQuery('body').addClass('animated hinge');
        });
    });

</script>
</body>
<!-- Mirrored from www.hanzresolver.com/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2014 06:51:15 GMT -->
</html>