<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finder.createx.studio/car-finder-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:13:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <title>Boulos | Enginering | Home</title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
  <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
  <meta name="author" content="Createx Studio">
  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon and Touch Icons-->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/bikes/boulos_favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <meta name="msapplication-TileColor" content="#766df4">
  <meta name="theme-color" content="#ffffff">
  <!-- Page loading styles-->
  <style>
    .page-loading {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -webkit-transition: all .4s .2s ease-in-out;
      transition: all .4s .2s ease-in-out;
      background-color: #1f1b2d;
      opacity: 0;
      visibility: hidden;
      z-index: 9999;
    }

    .page-loading.active {
      opacity: 1;
      visibility: visible;
    }

    .page-loading-inner {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      text-align: center;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: opacity .2s ease-in-out;
      transition: opacity .2s ease-in-out;
      opacity: 0;
    }

    .page-loading.active>.page-loading-inner {
      opacity: 1;
    }

    .page-loading-inner>span {
      display: block;
      font-size: 1rem;
      font-weight: normal;
      color: #fff;
      ;
    }

    .page-spinner {
      display: inline-block;
      width: 2.75rem;
      height: 2.75rem;
      margin-bottom: .75rem;
      vertical-align: text-bottom;
      border: .15em solid #9691a4;
      border-right-color: transparent;
      border-radius: 50%;
      -webkit-animation: spinner .75s linear infinite;
      animation: spinner .75s linear infinite;
    }

    @-webkit-keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    /* CSS for ABout Us Page, specifically the timeline */
    .timeline_area {
      position: relative;
      z-index: 1;
    }

    .single-timeline-area {
      position: relative;
      z-index: 1;
      padding-left: 180px;
    }

    @media only screen and (max-width: 575px) {
      .single-timeline-area {
        padding-left: 100px;
      }
    }

    .single-timeline-area .timeline-date {
      position: absolute;
      width: 180px;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -ms-grid-row-align: center;
      align-items: center;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      padding-right: 60px;
    }

    @media only screen and (max-width: 575px) {
      .single-timeline-area .timeline-date {
        width: 100px;
      }
    }

    .single-timeline-area .timeline-date::after {
      position: absolute;
      width: 3px;
      height: 100%;
      content: "";
      background-color: #ebebeb;
      top: 0;
      right: 30px;
      z-index: 1;
    }

    .single-timeline-area .timeline-date::before {
      position: absolute;
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background-color: #f23c49;
      content: "";
      top: 50%;
      right: 26px;
      z-index: 5;
      margin-top: -5.5px;
    }

    .single-timeline-area .timeline-date p {
      margin-bottom: 0;
      color: #020710;
      font-size: 13px;
      text-transform: uppercase;
      font-weight: 500;
    }

    .single-timeline-area .single-timeline-content {
      position: relative;
      z-index: 1;
      padding: 30px 30px 25px;
      border-radius: 6px;
      margin-bottom: 15px;
      margin-top: 15px;
      -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
      box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
      border: 1px solid #ebebeb;
    }

    @media only screen and (max-width: 575px) {
      .single-timeline-area .single-timeline-content {
        padding: 20px;
      }
    }

    .company-info-img {
      height: 400px;
      width: 400px;
      margin: 30px 0 0 100px;
    }

    .social-responsibility-img {
      height: 400px;
      width: 400px;
      margin: 60px 0 0 80px;
    }

    .single-timeline-area .single-timeline-content .timeline-icon {
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms;
      width: 30px;
      height: 30px;
      background-color: #f23c49;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 30px;
      flex: 0 0 30px;
      text-align: center;
      max-width: 30px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .single-timeline-area .single-timeline-content .timeline-icon i {
      color: #ffffff;
      line-height: 30px;
    }

    .single-timeline-area .single-timeline-content .timeline-text h6 {
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms;
    }

    .single-timeline-area .single-timeline-content .timeline-text p {
      font-size: 13px;
      margin-bottom: 0;
    }

    .single-timeline-area .single-timeline-content:hover .timeline-icon,
    .single-timeline-area .single-timeline-content:focus .timeline-icon {
      background-color: #020710;
    }

    .single-timeline-area .single-timeline-content:hover .timeline-text h6,
    .single-timeline-area .single-timeline-content:focus .timeline-text h6 {
      color: #3f43fd;
    }
  </style>
  <!-- Page loading scripts-->
  <script>
    (function() {
      window.onload = function() {
        var preloader = document.querySelector('.page-loading');
        preloader.classList.remove('active');
        setTimeout(function() {
          preloader.remove();
        }, 2000);
      };
    })();
  </script>
  <!-- Vendor Styles-->
  <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css" />
  <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css" />
  <!-- Main Theme Styles + Bootstrap-->
  <link rel="stylesheet" media="screen" href="css/theme.min.css">
  <!-- Google Tag Manager-->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
  </script>
</head>