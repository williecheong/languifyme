<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Enter StoryLine</title>
        <meta name="description" content="Open sourced story telling">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link href="/assets/plugins/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css">

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <div class="text-center show-join">
                <img class="img-responsive" style="max-width:75%;" src="/assets/img/logo_large_w_desc.png" />
            </div>

            <div class="row-fluid">
                <div class="span4 show-adopt">
                    <h2 class="text-center">Adopt</h2>
                    <p class="summary">We know you love writing in conventional text editors like Microsoft Word. StoryLine allows you to seamlessly upload your existing projects onto the cloud. Start writing right away on a tool that was made just for story writers like yourself. Welcome to the future.</p>
                </div>
                <div class="span4 show-collaborate">
                    <h2 class="text-center">Collaborate</h2>
                    <p class="summary">Be social and let the community contribute content to your projects. You decide exactly which contributions you would like to accept into the story, allowing you to maintain full control over the quality and direction where your project is headed. Afterall, two pens are better than one.</p>
               </div>
                <div class="span4 show-establish">
                    <h2 class="text-center">Establish</h2>
                    <p class="summary">StoryLine tracks your projects and contributions made on the platform. Everything consolidates into your customized writer's profile that showcases all the work you have done. Let the world know of your prowess with words and establish yourself.</p>
                </div>
            </div>
            <hr>
            <!-- HIDDEN STUFF TO SHOW WITH JS -->
            <div class="details row-fluid" id="join"> 
                <div class="offset2 span8">
                    <div class="row-fluid mailing-list">
                        <input class="mailing-list span9" id="email" style="float:left;" placeholder="Join our mailing list to receive email updates" type="text">
                        <button class="mailing-list span3 btn btn-primary" id="submit">Keep in touch</button>
                    </div>
                </div>
            </div>
            <div class="details row-fluid" id="adopt" style="display:none;"> 
                <div class="offset2 span8">
                    <h3>Adopt</h3>
                    <div>
                        We know you love writing in conventional text editors like Microsoft Word. StoryLine allows you to seamlessly upload your existing projects onto the cloud. Start writing right away on a tool that was made just for story writers like yourself. Welcome to the future.
                    </div>
                </div>
            </div>
            <div class="details row-fluid" id="collaborate" style="display:none;"> 
                <div class="offset2 span8">
                    <h3>Collaborate</h3>
                    <div>
                        Be social and let the community contribute content to your projects. You decide exactly which contributions you would like to accept into the story, allowing you to maintain full control over the quality and direction where your project is headed. Afterall, two pens are better than one.
                    </div>
                </div>
            </div>
            <div class="details row-fluid" id="establish" style="display:none;"> 
                <div class="offset2 span8">
                    <h3>Establish</h3>
                    <div>
                        StoryLine tracks your projects and contributions made on the platform. Everything consolidates into your customized writer's profile that showcases all the work you have done. Let the world know of your prowess with words and establish yourself.
                    </div>
                </div>
            </div>
            <!-- END OF HIDDEN STUFF TO SHOW WITH JS -->
            
            <hr style="margin-top:5%;">
            <footer>
                <p class="text-center">
                    &copy; StoryLine 2013 <br>
                    <button class="show-box btn btn-default btn-small"><i class="icon icon-leaf"></i> Contact us</button>
                </p>
            </footer>

            <!-- MODAL FOR MESSAGE BOX -->
            <div class="modal hide fade" id="messagebox" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Tell us something!</h4>
                </div>
                <div class="modal-body text-center">
                    <p><input class="box-email" style="width:90%;" value="" type="text" placeholder="Your email address (optional) "></p>
                    <p><textarea class="box-message" rows="8" maxlength="" style="width:90%;resize:none;" placeholder="Please leave a message after the tone~~ beeeeep"></textarea></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-link" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="post-message btn btn-success">Send</button>
                </div>
            </div>
            <!-- END OF MODAL FOR MESSAGE BOX -->

        </div> <!-- /container -->

        <script src="/assets/js/vendor/jquery-1.10.1.min.js"></script>
        <script src="/assets/js/vendor/bootstrap.min.js"></script>
        <script src="/assets/plugins/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>

        <script src="/assets/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
