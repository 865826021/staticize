<!DOCTYPE html>
<!-- saved from url=(0023)http://www.singcms.com/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>singcms资讯平台</title>
    <meta name="keywords" content="singcms 科技 体育 资讯 新闻">
    <meta name="description" content="singcms提供最新最全的行业动态新闻，助力企业发展。">
    <link rel="stylesheet" href="../public/bootstrap.min.css">
    <link rel="stylesheet" href="../public/main.css">
    <script src="../public/jquery.js"></script>
</head>
<body>
    <header id="header">
        <div class="navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="http://www.singcms.com/">
                        <img src="../public/logo.png" alt=""></a>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="http://www.singcms.com/" class="curr">首页</a>
                    </li>
                    <li>
                        <a href="http://www.singcms.com/index.php?c=cat&amp;id=3">体育</a>
                    </li>
                    <li>
                        <a href="http://www.singcms.com/index.php?c=cat&amp;id=8">科技</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9">
                    <div class="banner">
                        <div class="banner-left">
                            <div class="banner-info">
                                <span>阅读数</span> <i class="news_count node-21" news-id="21" id="node-21">73</i>
                            </div>
                            <a target="_blank" href="http://www.singcms.com/index.php?c=detail&amp;id=21">
                                <img src="../public/5813201385ff9.png" width="670" height="360" alt="习近平今日下午出席解放军代表团全体会议"></a>
                        </div>
                        <div class="banner-right">
                            <ul>
                                <li>
                                    <a target="_blank" href="http://www.singcms.com/index.php?c=detail&amp;id=23">
                                        <img width="150" height="113" src="../public/58107540484f4.jpg" alt="重庆美女球迷争芳斗艳"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.singcms.com/index.php?c=detail&amp;id=22">
                                        <img width="150" height="113" src="../public/5811bb76bcf75.jpg" alt="李克强让部长们当第一新闻发言人"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.singcms.com/index.php?c=detail&amp;id=24">
                                        <img width="150" height="113" src="../public/581075247efc6.jpg" alt="中超-汪嵩世界波制胜 富力客场1-0力擒泰达"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 右侧信息-->
                <div class="col-sm-3 col-md-3">
                    <div class="right-title">
                        <h3>文章排行</h3>
                        <span>TOP ARTICLES</span>
                    </div>
                    <div class="right-content">
                        <ul>
                        <?php $n=1; foreach ($news as $key => $value) {?>
                            <li class="curr">
                                <span style="font-size: 24px; margin-right: 5px; color: red; font-style: italic">
                                    <?php echo $n;$n++ ?>
                                </span>
                                <a target="_blank" href="#">
                                    <?php echo $value['title'] ?>
                                </a>                                
                            </li>
                        <?php } ?>
                        </ul>
                    </div>

                </div>
                <!-- 右侧结束--> </div>
        </div>
    </section>

    <script src="../public/jquery.js"></script>
    <script src="../public/count.js"></script>

</body>
</html>