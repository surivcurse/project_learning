<!DOCTYPE html>
<html>
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the description -->
    <meta name="description" content="STUDYLMS HTML Template">
    <!-- set the Keyword -->
    <meta name="keywords" content="">
    <meta name="author" content="STUDYLMS HTML Template">
    <!-- set the page title -->
    <title>STUDYLMS HTML Template</title>
    <!-- include google roboto font cdn link -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:299,300i,400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("css/plugins.css"); ?>">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("css/colors.css"); ?>">

    <!-- include the site responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("css/responsive.css"); ?>">
</head>
<body>
    <script src="<?= base_url("js/jquery.js") ?>"></script>
    <!-- include jQuery -->
    <script src="<?= base_url("js/plugins.js") ?>"></script>
    <!-- include jQuery -->
    <script src="<?= base_url("js/jquery.main.js") ?>"></script>

    <script src="<?= base_url("js/vue.min.js") ?>"></script>

    <script src="<?= base_url("js/vue-countdown.min.js") ?>"></script>
    <script src="<?= base_url("js/network_curl.js") ?>"></script>


<div style="margin-top:100px">
    <?php

    echo "Start page is token ".$token;

?>
<div id="tdiv">
    <span>Data after get Token is Cookie {{headerToken}}</span><br>
    <span>Data after get Token is header {{headerToken2}}</span>

</div>
</div>

</body>
</html>
<script>

    var vtest = new Vue({
        el:'#tdiv',
        data:{
            headerToken : "",
            headerToken2 : ""
        },
        mounted: function () {
            document.cookie = 'kuid=testData5555; domain=.bestpro.work; path=/'
            this.getToken();
        },
        methods : {
            getToken:function(){
                var self = this;
                $.mycurl.gets( "https://lms.bestpro.work/api/tester/iregistoken",true,function(res){
                    console.log(res);
                    self.headerToken2 = res['token'];
                    self.headerToken = res['tokenhead'];
                });
            }
        }

    });
   // document.cookie = 'lmuifo=test; path=/'


</script>