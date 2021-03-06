<!DOCTYPE html>

<html>
    <head>
        <title>
            least.js 2 - Random and Responsive HiDPI jQuery Gallery based on HTML5 and CSS3
        </title>

        <meta name="description" content="least.js 2 - Random and Responsive HiDPI jQuery Gallery based on HTML5 and CSS3">
        <meta charset="utf-8" />

        <!-- Responsive viewport for smartphone devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- least.js 2 CSS file -->
        <link href="src/css/least.min.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Least Gallery -->
        <section id="least">

            <!-- Least Gallery: Fullscreen Preview -->
            <div class="least-preview"></div>

            <!-- Least Gallery: Thumbnails -->
            <ul class="least-gallery">
                <!-- 1 || Element with data-caption ||-->
                <li>
                    <a href="src/media/big/01.jpg" title="Skateboard" data-subtitle="View Picture" data-caption="<strong>Bold text</strong> normal caption text">
                        <img src="src/media/thumbnails/01.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 2 || Element with data-caption as href-attribute ||-->-->
                <li>
                    <a href="src/media/big/02.jpg" title="Train Rails" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
                        <img src="src/media/thumbnails/02.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 3 -->
                <li>
                    <a href="src/media/big/03.jpg" title="Apple" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/03.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 4 -->
                <li>
                    <a href="src/media/big/04.jpg" title="Road Trip" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/04.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 5 -->
                <li>
                    <a href="src/media/big/05.jpg" title="Desert" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/05.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 6 -->
                <li>
                    <a href="src/media/big/06.jpg" title="Tree" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/06.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 7 -->
                <li>
                    <a href="src/media/big/07.jpg" title="MacBook" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/07.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 8 -->
                <li>
                    <a href="src/media/big/08.jpg" title="Clock" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/08.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 9 -->
                <li>
                    <a href="src/media/big/09.jpg" title="iPhone" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/09.jpg" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 10 -->
                <li>
                    <a href="src/media/big/10.jpg" title="New York" data-subtitle="View Picture">
                        <img src="src/media/thumbnails/10.jpg" alt="Alt Image Text" />
                    </a>
                </li>
            </ul>

        </section>
        <!-- Least Gallery end -->

        <!-- jQuery library -->
        <script src="src/js/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- least.js library -->
        <script src="src/js/libs/least/least.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.least-gallery').least();
            });
        </script>

        <!-- &&& START CODE &&& ONLY FOR PERSONAL USE: PLEASE DON'T EMBED THIS CODE INTO YOUR PAGE -->
        <script>
            /* Google Analytics */
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-16040332-11', 'leastjs.com');
            ga('set', 'anonymizeIp', true);
            ga('send', 'pageview');
        </script>
          <!-- &&& END CODE &&& ONLY FOR PERSONAL USE: PLEASE DON'T EMBED THIS CODE INTO YOUR PAGE-->
    </body>
</html>
