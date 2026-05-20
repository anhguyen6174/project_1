<?php
session_start();
if(isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit;
}
if(!isset($_SESSION['user_login'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
   <head><script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwRGFzaGJvYXJkJTIwMiUyMiUyQyUyMnglMjIlM0EwLjU2Njk3MTQ3NTI5MDkzNDclMkMlMjJ3JTIyJTNBMTUzNiUyQyUyMmglMjIlM0E4NjQlMkMlMjJqJTIyJTNBNjk1JTJDJTIyZSUyMiUzQTE1MzYlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGaW5kZXgyLmh0bWwlMjIlMkMlMjJyJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGaW5kZXgzLmh0bWwlMjIlMkMlMjJrJTIyJTNBMzIlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTQyMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q="></script><script type="text/javascript" async="" src="/wzrt/fEpdG1TdjNa0rIXpPQgi6yx59lcyhJ8EQlBmjqOQX0d2CGly" nonce="797490e1-aa17-4144-a744-bb2fbe47c4ad"></script><script async="" src="/wzrt/"></script><script>(function(w,i,g){w[g]=w[g]||[];if(typeof w[g].push=='function')w[g].push(i)})
(window,'GTM-WHH7CJ83','google_tags_first_party');</script><script>(function(w,d,s,l){w[l]=w[l]||[];(function(){w[l].push(arguments);})('set', 'developer_id.dYzg1YT', true);
		w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s);j.async=true;j.src='/wzrt/';
		f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer');</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
<script data-cfasync="false" nonce="797490e1-aa17-4144-a744-bb2fbe47c4ad">try{(function(w,d){!function(F,G,H,I){if(F.zaraz)console.error("zaraz is loaded twice");else{F[H]=F[H]||{};F[H].executed=[];F.zaraz={deferred:[],listeners:[]};F.zaraz._v="5882";F.zaraz._n="797490e1-aa17-4144-a744-bb2fbe47c4ad";F.zaraz.q=[];F.zaraz._f=function(J){return async function(){var K=Array.prototype.slice.call(arguments);F.zaraz.q.push({m:J,a:K})}};for(const L of["track","set","debug"])F.zaraz[L]=F.zaraz._f(L);F.zaraz.init=()=>{var M=G.getElementsByTagName(I)[0],N=G.createElement(I),O=G.getElementsByTagName("title")[0];O&&(F[H].t=G.getElementsByTagName("title")[0].text);F[H].x=Math.random();F[H].w=F.screen.width;F[H].h=F.screen.height;F[H].j=F.innerHeight;F[H].e=F.innerWidth;F[H].l=F.location.href;F[H].r=G.referrer;F[H].k=F.screen.colorDepth;F[H].n=G.characterSet;F[H].o=(new Date).getTimezoneOffset();if(F.dataLayer)for(const P of Object.entries(Object.entries(dataLayer).reduce((Q,R)=>({...Q[1],...R[1]}),{})))zaraz.set(P[0],P[1],{scope:"page"});F[H].q=[];for(;F.zaraz.q.length;){const S=F.zaraz.q.shift();F[H].q.push(S)}N.defer=!0;for(const T of[localStorage,sessionStorage])Object.keys(T||{}).filter(V=>V.startsWith("_zaraz_")).forEach(U=>{try{F[H]["z_"+U.slice(7)]=JSON.parse(T.getItem(U))}catch{F[H]["z_"+U.slice(7)]=T.getItem(U)}});N.referrerPolicy="origin";N.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(F[H])));M.parentNode.insertBefore(N,M)};["complete","interactive"].includes(G.readyState)?zaraz.init():F.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async bO=>new Promise(bP=>{if(bO){bO.e&&bO.e.forEach(bQ=>{try{const bR=d.querySelector("script[nonce]"),bS=bR?.nonce||bR?.getAttribute("nonce"),bT=d.createElement("script");bS&&(bT.nonce=bS);bT.innerHTML=bQ;bT.onload=()=>{d.head.removeChild(bT)};d.head.appendChild(bT)}catch(bU){console.error(`Error executing script: ${bQ}\n`,bU)}});Promise.allSettled((bO.f||[]).map(bV=>fetch(bV[0],bV[1])))}bP()});zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script><script>(function(w,d){})(window,document)</script><style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><script>(function(w,d){;w.zarazData.executed.push("Pageview");})(window,document)</script><script>(function(w,d){})(window,document)</script></head>
</head>
<body>

<!-- HEADER -->
<header class="admin-header">
    <div>
        <strong>LIGHT CAVALRY</strong> · Admin
    </div>
    <div>
        <a href="index.php?action=logout">Đăng xuất</a>
    </div>
</header>

<div class="d-flex" style="min-height:100vh;">






    <!-- SIDEBAR -->
<div class="sidebar bg-white border-end p-3" style="width:250px;">


  <!-- Sidebar Search -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

      <li class="nav-item">
        <a href="index.php" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index.php?page_layout=product" class="nav-link">
          <i class="nav-icon fas fa-bicycle"></i>
          <p>Sản phẩm</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index.php?page_layout=category" class="nav-link">
          <i class="nav-icon fas fa-list"></i>
          <p>Danh mục</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index.php?page_layout=order" class="nav-link">
          <i class="nav-icon fas fa-shopping-cart"></i>
          <p>Đơn hàng</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index.php?page_layout=user" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>Người dùng</p>
        </a>
      </li>

    </ul>
  </nav>

</div>











    <!-- MAIN CONTENT -->


<div class="content flex-grow-1 p-4">
<?php
    $page = $_GET['page_layout'] ?? 'dashboard';

    switch ($page) {
        case 'product':
            include("modules/products/list.php");
            break;
        case 'add_product':
            include("modules/products/add.php");
            break;
        case 'edit_product':
            include("modules/products/edit.php");
            break;
        case 'category':
            include("modules/categories/list.php");
            break;
        case 'add_category':
            include("modules/categories/add.php");
            break;
        case 'edit_category':
            include("modules/categories/edit.php");
            break;
        case 'user':
            include("modules/users/list.php");
            break;
        case 'add_user':
            include("modules/users/add.php");
            break;
        case 'edit_user':
            include("modules/users/edit.php");  
            break;
        case 'orders':
            include("order.php");
            break;

        default:
           include("home.php");
    }
?>
</div>
   

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
