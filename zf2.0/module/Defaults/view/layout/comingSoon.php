<div id="wrapper">

        <!-- BEGIN HEADER -->
        <header>
            <div>
                <h2>NHACONLINE.NET is coming soon...</h2>
            </div>
            <div>
                <h3>Group on Facebook: <a target="_blank" href="https://www.facebook.com/groups/caulacbolaptrinh">[NHACONLINE]</a></h3>
            </div>
        </header>
        <!-- END HEADER -->
        <!-- BEGIN TIMER -->
        <div id="content">
            <div>
                <div id="defaultCountdown"></div>
            </div>

            <!-- BEGIN PROGRESS BAR -->
            <div id="progressbar">
                <div class="wrap">
                    <div class="back"></div>
                    <div class="front"></div>
                    <div class="number">0%</div>
                    <div class="launch-date"></div>
                </div>
            </div>
            <div style="text-align: right; margin-top: -20px; margin-right: 10px;" id="launchDate"></div>
            <!-- END PROGRESS BAR -->

            <div id="ct" style="display:none"></div>
        </div>
        <!-- END TIMER -->
        <!-- BIGIN SUBSCRIBE FORM & SOCIAL ICONS -->
        <section id="communication">
            <div id="email">
                <h3 class="title">Contact:</h3>
                <p class="title">&nbsp;</p>
                <p class="title">Email: <span>isojongy@live.com | Fb: <a target="_blank" href="https://www.facebook.com/isojongy">Jongy Assasin</a></span></p>
                <p class="title">Email: <span>thaothuthipham910@gmail.com | Fb: <a target="_blank" href="https://www.facebook.com/profile.php?id=100007677139367">Thao Pham</a></span></p>
                <p class="title">Email: <span>tthaitung93@gmail.com | Fb: <a target="_blank" href="https://www.facebook.com/thaison.tung.7">Thai Son Tung</a></span></p>
                <p class="title">Email: <span>minhhieu12a2fly@yahoo.com | Fb: <a target="_blank" href="https://www.facebook.com/hieu.minh.52">Minh Hieu</a></span></p>
				<p class="title">Address: <span>180 Cao Lo P4, Q8, TPHCM, Vietnam</span></p>
                <p class="title">&nbsp;</p>
            </div>

            <div id="social">
                <h3 class="title">Follow us</h3>
                <div>
                    <ul id="icons">
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="https://www.facebook.com/groups/nhaconline" class="fb"></a></li>
                        <li><a href="#" class="gplus"></a></li>
                        <li><a href="#" class="you_tube"></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- END SUBSCRIBE FORM & SOCIAL ICONS -->

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p align="center">&copy; 2015 by [Fnatic 4 VTH]</p>
    </div><!-- end div #wrapper -->
    <script>

        var start = "Jan 20, 2015 00:00:00";
        var end = "Feb 10, 2015 00:00:00";

        $("#defaultCountdown").countdown({
            until: new Date(end),
            tickInterval: 1
            //onTick: watchCountdown
        });

        function watchCountdown(periods) {
            $('#monitor').text('Just ' + periods[5] + ' minutes and ' +
                periods[6] + ' seconds to go');
        }

        $(function () {
            var first = new Date(start);
            var last = new Date(end);
            $("#launchDate").text(end.replace(end.substr(end.length - 9), ''));
            var today = new Date();

            var p = Math.floor(((today - first) / (last - first)) * 100);
            p = (p > 100) ? 100 : p;

            $('#progressbar .front').animate({ width: p + '%' }, 2000, 'swing', function () {
                $('#progressbar .number')
                    .text(p + '%')
                    .css({ marginLeft: $('#progressbar .front').width() - $('#progressbar .number').width() - 15 })
                    .animate({ opacity: 1 }, 200);
            });

        });

    </script>