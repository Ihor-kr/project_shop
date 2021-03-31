<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/OSP/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/OSP/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/OSP/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/OSP/template/css/price-range.css" rel="stylesheet">
    <link href="/OSP/template/css/animate.css" rel="stylesheet">
    <link href="/OSP/template/css/main.css" rel="stylesheet">
    <link href="/OSP/template/css/responsive.css" rel="stylesheet">
    <link rel='stylesheet' id='twentyseventeen-style-css'
          href='https://blog.laravelecommerceexample.ca/wp-content/themes/twentyseventeen/style.css?ver=4.9.13'
          type='text/css' media='all' />

    <script type='text/javascript' src='https://blog.laravelecommerceexample.ca/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script src="/OSP/template/js/jquery.js"></script>
    <script src="/OSP/template/js/bootstrap.min.js"></script>
    <script src="/OSP/template/js/jquery.scrollUp.min.js"></script>
    <script src="/OSP/template/js/price-range.js"></script>
    <script src="/OSP/template/js/jquery.prettyPhoto.js"></script>
    <script src="/OSP/template/js/main.js"></script>
    <script src="/OSP/template/js/search.js"></script>
    <script text="javascript">
        $(document).ready(function () {
            $(".add-to-cart").click(function () {
                let id = $(this).attr("data-id");
                $.post("/cart/addAjax/"+id, {}, function (data) {
                    $("#cart-count").html(data);
                });
                return false;
            });
        });
    </script>

<body>
<header id="header">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-globe" style="font-size:36px;"> My shop</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook" style="font-size: 24px;"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" style="font-size: 24px;"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" style="font-size: 24px;"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube" style="font-size: 24px;"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/cart/"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="title text-center">
                        <div role="search" class="search-form">
                            <input type="text" id="text-to-find" placeholder="Search &hellip;"  />
                            <button type="submit" class="search-submit" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Шукати">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
