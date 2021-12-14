<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>次のご注文は何羽ですか？ - Euphoria Time</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
      .gochiusa-info p {
        text-align: center;
      }
    </style>
    
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Application</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Gochiusa</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../../">Produced by Euphoria Time</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    
    <div class="container">
      <div class="page-header">
        <h1>次のご注文は何羽ですか？ <br><small>When is the next gochiusa?</small></h1>
      </div>
      <div class="row" style="margin-top:50px;">
        
        <div class="col-sm-12">
          <div class="jumbotron" style="text-align:center">
            <p>次のごちうさは</p>
            <?php include './gochiusa.php' ?>
            <p>です。</p>
            <?php
              print "<a href=\"https://twitter.com/intent/tweet?button_hashtag=next_gochiusa&text=%E6%AC%A1%E5%9B%9E%E3%81%AE%E3%81%94%E3%81%A1%E3%81%86%E3%81%95%E3%81%AF" . $next_month .  "%E6%9C%88" . $next_day . "%E6%97%A5%E3%81%A7%E7%AC%AC" . $next_story . "%E7%BE%BD%E3%81%A7%E3%81%99%E3%80%82\" class=\"twitter-hashtag-button\" data-size=\"large\" data-url=\"http://example.com\">Tweet #next_gochiusa</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>"
            ?>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> #next_gochiusa　とは</h3>
            </div>
            <div class="panel-body">
              <p>次回のごちうさが気になるので、次はいつで、第何羽なのかを表示するためだけのページです。</p>
              <h2><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 仕様</h2>
              <ul>
                <li>放送開始日が2014年4月10日木曜日であるので、そこから何週経ったかで次が第何羽か分かる。</li>
                <li>見るだけじゃつまらないので、ツイートできるようにする。</li>
                <li>現時点では、認証が必要なアプリではない。</li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
      
      <p style="text-align:right"><small>本ページは「ご注文はうさぎですか？」を応援するものです。<br>本ページの作品に関する著作物は、全て「©Koi・芳文社／ご注文は製作委員会ですか？」が著作権を保有しています。</small></p>
      
    </div>
    
   
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
