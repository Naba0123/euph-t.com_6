<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>2035年9月2日の皆既日食が見えるまで - Euphoria Time</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-static-top navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="javascript:void(0)"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> 天文情報</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../">Produced by Euphoria Time</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    
    <div class="container">
      <div class="page-header">
        <h1>2035年9月2日の皆既日食が見えるまで <br><small>by -----</small></h1>
      </div>
      
      <h4 class="pull-right">出展：<a href="http://www.nao.ac.jp/" target="_blank">国立天文台</a></h4>
      <h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 観測情報</h2>
      
      <div class="content">

        <div class="row">
          
          <div class="col-sm-offset-1 col-sm-10">
            <div class="panel panel-info">
              <div class="panel-heading">2035年9月2日　皆既日食</div>
              <div class="panel-body">
                <img src="img/20350902.png" alt="20350902" class="img-responsive">
                <p class="img-source">(c) 国立天文台</p>
                <h3>
                  <?php
                    date_default_timezone_set("Asia/Tokyo");

                    $datetime = new DateTime('2035/09/02 00:00:00');
                    $current  = new DateTime('now');
                    $diff     = $current->diff($datetime);

                    printf('あと %d年%dヶ月%d日',
                    $diff->y, $diff->m, $diff->d);
                  ?>
                </h3>
                <?php
                  print "<a href=\"https://twitter.com/intent/tweet?button_hashtag=astro_info&text=2035%E5%B9%B49%E6%9C%882%E6%97%A5%E3%81%AE%E7%9A%86%E6%97%A2%E6%97%A5%E9%A3%9F%E3%81%BE%E3%81%A7%E3%80%81%E3%81%82%E3%81%A8" . $diff->y .  "%E5%B9%B4" . $diff->m . "%E3%83%B6%E6%9C%88" . $diff->d . "%E6%97%A5%E3%81%A7%E3%81%99%E3%80%82\" class=\"twitter-hashtag-button\" data-size=\"large\" data-url=\"http://example.com/\">Tweetする。</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>"
                ?>
                <p>2035年9月2日の皆既日食は、栃木県宇都宮市において、<br>
                  <strong>2035年09月02日</strong>の<br>
                  <strong>08時45分</strong>から開始し、<br>
                  <strong>10時09分</strong>に食の最大、<br>
                  <strong>11時37分</strong>に終わりを迎えます。
                </p>
              </div>
            </div>
          </div>
            
        </div>
      </div>
      
      <hr>
      <div class="footer">
        <p>本ページの、著作権が明記されているコンテンツを除き、著作権はEuphoria Timeが所有しています。</p>  
      </div>
        
    </div>
      

      
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>