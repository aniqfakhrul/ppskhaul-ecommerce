<?php include '../header.php' ?>



<style>
  .theme-logo img{
    max-width: 225px;
  }
</style>


<script>
  
      
    
    /*--
    Menu Stick
    -----------------------------------*/
    var header = $('.sticky-bar');
    var win = $(window);
    win.on('scroll', function() {
        var scroll = win.scrollTop();
        if (scroll < 200) {
            header.removeClass('stick');
        } else {
            header.addClass('stick');
        }
    });
    
    
    
  
</script>














</div>
<!-- BREADCRUMBS SETCTION START -->

<div class="breadcrumbs-section">
  <div class="breadcrumbs overlay-bg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-inner text-center">
            
<nav class="" role="navigation" aria-label="breadcrumbs">
  <ul class="breadcrumb-list">

    <li>
      <a href="../index.html" title="Back to the home page">Home</a>
    </li>
    <li>
      


      
      <span>New Arrival</span>
      

      
    </li>
  </ul>
</nav>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- BREADCRUMBS SETCTION END -->
<div class="">
      
       
       
       
    <main>
      

          
          <div class="mlvedaform">
            





<div id="shopify-section-collection-template" class="shopify-section">
<div class="shop-area" id="section-collection-template">
  <div class="container ">
    <div class="row flex-row-reverse">
      <div class="col-lg-9 col-12"><div class="shop-top-bar">

<div class="select-shoing-wrap"><div class="shop-select">
    <select name="SortBy" id="SortBy">
       <option value="manual">Featured</option>
      <option value="best-selling">Best Selling</option>
      <option value="title-ascending">Alphabetically, A-Z</option>
      <option value="title-descending">Alphabetically, Z-A</option>
      <option value="price-ascending">Price, low to high</option>
      <option value="price-descending">Price, high to low</option>
      <option value="created-descending">Date, new to old</option>
      <option value="created-ascending">Date, old to new</option>
    </select>
  </div>
  <p>Showing  
    1 - 7 
     of  
    7 
     result </p></div><div class="shop-tab">
   <button class="change-view active" data-view="grid">
    <i class="fa fa-table"></i>
  </button>
  <button class="change-view" data-view="list">
    <i class="fa fa-list-ul"></i>
  </button>
  
</div><script>
  Shopify.queryParams = {};
  if (location.search.length) {
    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
      aKeyValue = aCouples[i].split('=');
      if (aKeyValue.length > 1) {
        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
      }
    }
  }

  $(function() {
    $('#SortBy')
    .val('best-selling')
         .bind('change', function() {
      Shopify.queryParams.sort_by = jQuery(this).val();
      location.search = jQuery.param(Shopify.queryParams);
    }
    );
  });
</script>
</div><div class="shop-bottom-area mt-35">
          <div class="tab-content">
            <div id="shop-1">
              <div class="row"><div class="col-lg-4 col-md-6 col-6">



<div class="product-wrap mb-25 scroll-zoom 30106348421174">
  <div class="product-img">
    <a href="new-in/products/anna.html">
      
      <img class="default-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2558_large.jpg?v=1568550835" alt="Anna Abaya">
      
      <img class="hover-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2559_large.jpg?v=1568550835" alt="">
      
      
    </a>



<span class="sale-title pink">Sale</span>



<span class="percent-count pink">-28%</span>






<div class="product-action">
      <div class="pro-same-action pro-wishlist">
        

  
  <a title="Add Wishlist" class="wishlist" href="../account/login.html" title="Wishlist">
    <i class="pe-7s-like"></i>
  </a>
  

      </div>
      <div class="pro-same-action pro-cart">
        




<a href="javascript:void(0);" onclick="Shopify.addItem(30106348421174, 1); return false;" class="ajax-spin-cart">
  <span>
    <span class="cart-title"><i class="pe-7s-cart"></i></span>
    <span class="cart-loading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
    <span class="cart-added"><i class="fa fa-check"></i></span>
    <span class="cart-unavailable"><i class="fa fa-times"></i></span>
  </span>
  Add to cart
</a>











      </div><div class="pro-same-action pro-quickview">
        <a title="Quick View" class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" 
           onclick="quiqview('anna')"><i class="pe-7s-look"></i>
        </a>
      </div></div>

  </div>

  <div class="product-content text-center">
    <h3 class="popup_cart_title"><a href="new-in/products/anna.html">Anna Abaya</a></h3>
    <div class="product-rating">
      <span class="shopify-product-reviews-badge" data-id="2323567476790"></span>
    </div>
    <div class="product-price">
      <span><span class=money>RM129.00 MYR</span></span>
      
      <span class="old"><span class=money>RM179.00 MYR</span></span>
      
    </div>
  </div>

</div></div><div class="col-lg-4 col-md-6 col-6">



<div class="product-wrap mb-25 scroll-zoom 30106341408822">
  <div class="product-img">
    <a href="new-in/products/aleesa-abaya.html">
      
      <img class="default-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2573_large.jpg?v=1568551959" alt="Aleesa Abaya">
      
      <img class="hover-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2538_large.jpg?v=1568551959" alt="">
      
      
    </a>



<span class="sale-title pink">Sale</span>



<span class="percent-count pink">-11%</span>






<div class="product-action">
      <div class="pro-same-action pro-wishlist">
        

  
  <a title="Add Wishlist" class="wishlist" href="../account/login.html" title="Wishlist">
    <i class="pe-7s-like"></i>
  </a>
  

      </div>
      <div class="pro-same-action pro-cart">
        




<a href="javascript:void(0);" onclick="Shopify.addItem(30106341408822, 1); return false;" class="ajax-spin-cart">
  <span>
    <span class="cart-title"><i class="pe-7s-cart"></i></span>
    <span class="cart-loading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
    <span class="cart-added"><i class="fa fa-check"></i></span>
    <span class="cart-unavailable"><i class="fa fa-times"></i></span>
  </span>
  Add to cart
</a>











      </div><div class="pro-same-action pro-quickview">
        <a title="Quick View" class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" 
           onclick="quiqview('aleesa-abaya')"><i class="pe-7s-look"></i>
        </a>
      </div></div>

  </div>

  <div class="product-content text-center">
    <h3 class="popup_cart_title"><a href="new-in/products/aleesa-abaya.html">Aleesa Abaya</a></h3>
    <div class="product-rating">
      <span class="shopify-product-reviews-badge" data-id="2323579404342"></span>
    </div>
    <div class="product-price">
      <span><span class=money>RM159.00 MYR</span></span>
      
      <span class="old"><span class=money>RM179.00 MYR</span></span>
      
    </div>
  </div>

</div></div><div class="col-lg-4 col-md-6 col-6">



<div class="product-wrap mb-25 scroll-zoom 31131917615217">
  <div class="product-img">
    <a href="new-in/products/ruby-sport-wear.html">
      
      <img class="default-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_4425_large.jpg?v=1573574455" alt="Ruby Sport wear">
      
      <img class="hover-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_4428_large.jpg?v=1573574455" alt="">
      
      
    </a>



<span class="sale-title pink">Sale</span>



<span class="percent-count pink">-27%</span>






<div class="product-action">
      <div class="pro-same-action pro-wishlist">
        

  
  <a title="Add Wishlist" class="wishlist" href="../account/login.html" title="Wishlist">
    <i class="pe-7s-like"></i>
  </a>
  

      </div>
      <div class="pro-same-action pro-cart">
        




<a href="javascript:void(0);" onclick="Shopify.addItem(31131917615217, 1); return false;" class="ajax-spin-cart">
  <span>
    <span class="cart-title"><i class="pe-7s-cart"></i></span>
    <span class="cart-loading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
    <span class="cart-added"><i class="fa fa-check"></i></span>
    <span class="cart-unavailable"><i class="fa fa-times"></i></span>
  </span>
  Add to cart
</a>











      </div><div class="pro-same-action pro-quickview">
        <a title="Quick View" class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" 
           onclick="quiqview('ruby-sport-wear')"><i class="pe-7s-look"></i>
        </a>
      </div></div>

  </div>

  <div class="product-content text-center">
    <h3 class="popup_cart_title"><a href="new-in/products/ruby-sport-wear.html">Ruby Sport wear</a></h3>
    <div class="product-rating">
      <span class="shopify-product-reviews-badge" data-id="4336407838833"></span>
    </div>
    <div class="product-price">
      <span><span class=money>RM159.00 MYR</span></span>
      
      <span class="old"><span class=money>RM219.00 MYR</span></span>
      
    </div>
  </div>

</div></div><div class="col-lg-4 col-md-6 col-6">



<div class="product-wrap mb-25 scroll-zoom 30106368606262">
  <div class="product-img">
    <a href="new-in/products/sofea-abaya.html">
      
      <img class="default-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2564_large.jpg?v=1568551600" alt="Sofea Abaya">
      
      <img class="hover-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2566_large.jpg?v=1568551622" alt="">
      
      
    </a>
<span class="soldout-title pink">Soldout</span>
<div class="product-action">
      <div class="pro-same-action pro-wishlist">
        

  
  <a title="Add Wishlist" class="wishlist" href="../account/login.html" title="Wishlist">
    <i class="pe-7s-like"></i>
  </a>
  

      </div>
      <div class="pro-same-action pro-cart">
        


<button class="cart-disable color_button">
  <span class="cart-text"><i class="pe-7s-cart"></i></span>
  Soldout
</button>










      </div><div class="pro-same-action pro-quickview">
        <a title="Quick View" class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" 
           onclick="quiqview('sofea-abaya')"><i class="pe-7s-look"></i>
        </a>
      </div></div>

  </div>

  <div class="product-content text-center">
    <h3 class="popup_cart_title"><a href="new-in/products/sofea-abaya.html">Sofea Abaya</a></h3>
    <div class="product-rating">
      <span class="shopify-product-reviews-badge" data-id="2323576881206"></span>
    </div>
    <div class="product-price">
      <span><span class=money>RM159.00 MYR</span></span>
      
      <span class="old"><span class=money>RM189.00 MYR</span></span>
      
    </div>
  </div>

</div></div><div class="col-lg-4 col-md-6 col-6">



<div class="product-wrap mb-25 scroll-zoom 30106360479798">
  <div class="product-img">
    <a href="new-in/products/nour.html">
      
      <img class="default-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2551_large.jpg?v=1568551231" alt="Nour Abaya">
      
      <img class="hover-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2552_large.jpg?v=1568551231" alt="">
      
      
    </a>



<span class="sale-title pink">Sale</span>



<span class="percent-count pink">-28%</span>






<div class="product-action">
      <div class="pro-same-action pro-wishlist">
        

  
  <a title="Add Wishlist" class="wishlist" href="../account/login.html" title="Wishlist">
    <i class="pe-7s-like"></i>
  </a>
  

      </div>
      <div class="pro-same-action pro-cart">
        




<a href="javascript:void(0);" onclick="Shopify.addItem(30106360479798, 1); return false;" class="ajax-spin-cart">
  <span>
    <span class="cart-title"><i class="pe-7s-cart"></i></span>
    <span class="cart-loading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
    <span class="cart-added"><i class="fa fa-check"></i></span>
    <span class="cart-unavailable"><i class="fa fa-times"></i></span>
  </span>
  Add to cart
</a>











      </div><div class="pro-same-action pro-quickview">
        <a title="Quick View" class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" 
           onclick="quiqview('nour')"><i class="pe-7s-look"></i>
        </a>
      </div></div>

  </div>

  <div class="product-content text-center">
    <h3 class="popup_cart_title"><a href="new-in/products/nour.html">Nour Abaya</a></h3>
    <div class="product-rating">
      <span class="shopify-product-reviews-badge" data-id="2323565740086"></span>
    </div>
    <div class="product-price">
      <span><span class=money>RM129.00 MYR</span></span>
      
      <span class="old"><span class=money>RM179.00 MYR</span></span>
      
    </div>
  </div>

</div></div><div class="col-lg-4 col-md-6 col-6">



<div class="product-wrap mb-25 scroll-zoom 30106354778166">
  <div class="product-img">
    <a href="new-in/products/gina.html">
      
      <img class="default-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2569_large.jpg?v=1568523934" alt="Gina Abaya">
      
      <img class="hover-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/IMG_2570_large.jpg?v=1568524121" alt="">
      
      
    </a>



<span class="sale-title pink">Sale</span>



<span class="percent-count pink">-28%</span>






<div class="product-action">
      <div class="pro-same-action pro-wishlist">
        

  
  <a title="Add Wishlist" class="wishlist" href="../account/login.html" title="Wishlist">
    <i class="pe-7s-like"></i>
  </a>
  

      </div>
      <div class="pro-same-action pro-cart">
        




<a href="javascript:void(0);" onclick="Shopify.addItem(30106354778166, 1); return false;" class="ajax-spin-cart">
  <span>
    <span class="cart-title"><i class="pe-7s-cart"></i></span>
    <span class="cart-loading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
    <span class="cart-added"><i class="fa fa-check"></i></span>
    <span class="cart-unavailable"><i class="fa fa-times"></i></span>
  </span>
  Add to cart
</a>











      </div><div class="pro-same-action pro-quickview">
        <a title="Quick View" class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" 
           onclick="quiqview('gina')"><i class="pe-7s-look"></i>
        </a>
      </div></div>

  </div>

  <div class="product-content text-center">
    <h3 class="popup_cart_title"><a href="new-in/products/gina.html">Gina Abaya</a></h3>
    <div class="product-rating">
      <span class="shopify-product-reviews-badge" data-id="2323545980982"></span>
    </div>
    <div class="product-price">
      <span><span class=money>RM129.00 MYR</span></span>
      
      <span class="old"><span class=money>RM179.00 MYR</span></span>
      
    </div>
  </div>

</div></div><div class="col-lg-4 col-md-6 col-6">



<div class="product-wrap mb-25 scroll-zoom 31202013446257">
  <div class="product-img">
    <a href="new-in/products/carla-abaya.html">
      
      <img class="default-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/hijanahhaul-studio-shoot-6.11.2019-44225-mh1575082181439_large.jpg?v=1575084534" alt="Carla Abaya">
      
      <img class="hover-img popup_cart_image" src="http://cdn.shopify.com/s/files/1/0167/7895/2758/products/hijanahhaul-studio-shoot-6.11.2019-44246-mh1574416557092_large.jpg?v=1575084534" alt="">
      
      
    </a>



<span class="sale-title pink">Sale</span>



<span class="percent-count pink">-24%</span>






<div class="product-action">
      <div class="pro-same-action pro-wishlist">
        

  
  <a title="Add Wishlist" class="wishlist" href="../account/login.html" title="Wishlist">
    <i class="pe-7s-like"></i>
  </a>
  

      </div>
      <div class="pro-same-action pro-cart">
        




<a href="javascript:void(0);" onclick="Shopify.addItem(31202013446257, 1); return false;" class="ajax-spin-cart">
  <span>
    <span class="cart-title"><i class="pe-7s-cart"></i></span>
    <span class="cart-loading"><i class="fa fa-circle-o-notch fa-spin"></i></span>
    <span class="cart-added"><i class="fa fa-check"></i></span>
    <span class="cart-unavailable"><i class="fa fa-times"></i></span>
  </span>
  Add to cart
</a>











      </div><div class="pro-same-action pro-quickview">
        <a title="Quick View" class="action-plus" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" 
           onclick="quiqview('carla-abaya')"><i class="pe-7s-look"></i>
        </a>
      </div></div>

  </div>

  <div class="product-content text-center">
    <h3 class="popup_cart_title"><a href="new-in/products/carla-abaya.html">Carla Abaya</a></h3>
    <div class="product-rating">
      <span class="shopify-product-reviews-badge" data-id="4352105840753"></span>
    </div>
    <div class="product-price">
      <span><span class=money>RM159.00 MYR</span></span>
      
      <span class="old"><span class=money>RM209.00 MYR</span></span>
      
    </div>
  </div>

</div></div></div>
            </div>
          </div>
          <div class="pro-pagination-style text-center mt-30">


<script>
  $(".theme-default-pagination .disabled a").removeAttr("href");
  $(".theme-default-pagination li.active a").removeAttr("href");
</script></div>
        </div></div><div class="col-lg-3">




<div class="sidebar-style">
  
  
  
  <div class="sidebar-widget"><h4 class="pro-sidebar-title">Search </h4><div class="pro-sidebar-search mt-25">
      <form class="pro-sidebar-search-form" aaction="/search" method="get" role="search">
        <input type="search" name="q" value="" placeholder="Search our store" aria-label="Search our store">
        <button type="submit">
          <i class="pe-7s-search"></i>
        </button>
      </form>
    </div>
  </div>

  
  
  
  <div class="sidebar-widget mt-50"><h4 class="pro-sidebar-title">Custom Menu</h4><div class="sidebar-widget-list mt-20">
      <ul>
        
        
        <li class="">
          <div class="sidebar-widget-list-left">
            <a href="../collections.html">New Arrival</a>
          </div>
        </li>
        
        <li class="">
          <div class="sidebar-widget-list-left">
            <a href="frontpage.html">Abaya</a>
          </div>
        </li>
        
      </ul>
    </div>
  </div>

  
  
  
  <div class="sidebar-widget mt-50"><h4 class="pro-sidebar-title">Categories</h4><div class="sidebar-widget-list mt-30">
      <ul>
        
        
        <li class="">
          <div class="sidebar-widget-list-left">
            <a href="frontpage.html">Abaya <span>7</span> </a> 
          </div>
        </li>
        
        <li class="">
          <div class="sidebar-widget-list-left">
            <a href="best-selling-products.html">Best Selling Products <span>13</span> </a> 
          </div>
        </li>
        
        <li class="">
          <div class="sidebar-widget-list-left">
            <a href="clearance.html">Clearance <span>7</span> </a> 
          </div>
        </li>
        
        <li class="active">
          <div class="sidebar-widget-list-left">
            <a href="new-in.html">New Arrival <span>7</span> </a> 
          </div>
        </li>
        
        <li class="">
          <div class="sidebar-widget-list-left">
            <a href="newest-products.html">Newest Products <span>13</span> </a> 
          </div>
        </li>
        

      </ul>
    </div>
  </div>

  
  
  
  <div class="sidebar-widget mt-50"><h4 class="pro-sidebar-title">Vendors</h4><div class="sidebar-widget-list mt-20">
      <ul>
        
        
        <li class="">
          <div class="sidebar-widget-list-left">
            <a href="vendors446d.html?q=Hijanah%20Haul">PPSK Haul</a>
          </div>
        </li>
        
      </ul>
    </div>
  </div>

  
  
  
  <div class="sidebar-widget mt-50"><h4 class="pro-sidebar-title">Products Types</h4><div class="sidebar-widget-list mt-20">
      <ul>
        
        

      </ul>
    </div>
  </div>


  
  
  
  <div class="sidebar-widget mt-50"><h4 class="pro-sidebar-title">Color</h4><div class="sidebar-widget-list mt-20">
      <ul>
        
        

        
        

        

        

        

        


      </ul>
    </div>
  </div>
  
  
  
  
  <div class="sidebar-widget mt-40"><h4 class="pro-sidebar-title">Size</h4><div class="sidebar-widget-list mt-20">
      <ul>
        
          
      

      
      

      

      

      

      

        
        
      </ul>
    </div>
  </div>

  
  
  
  <div class="sidebar-widget mt-50"><h4 class="pro-sidebar-title">Tags</h4><div class="sidebar-widget-tag mt-25">
      <ul>
        
        
      </ul>
    </div>
  </div>
  

  
  
  
  
  
</div>





<script>
  $(".sidebar-widget li.active a").removeAttr("href");

  $('.category-sub-menu li.has-sub > a').on('click', function () {
    $(this).removeAttr('href');
    var element = $(this).parent('li');
    if (element.hasClass('open')) {
      element.removeClass('open');
      element.find('li').removeClass('open');
      element.find('ul').slideUp();
    } else {
      element.addClass('open');
      element.children('ul').slideDown();
      element.siblings('li').children('ul').slideUp();
      element.siblings('li').removeClass('open');
      element.siblings('li').find('li').removeClass('open');
      element.siblings('li').find('ul').slideUp();
    }
  }); 
</script></div></div>
  </div>
</div><style data-shopify>#section-collection-template{padding-top: 90px;
    padding-bottom: 90px;}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-collection-template{padding-top: 80px;
      padding-bottom: 80px;}
  }
  @media (max-width: 767px) {
    #section-collection-template{padding-top: 70px;
      padding-bottom: 70px;}
  }</style>
</div>




            <script>
$m(".mlvedaform").bind("DOMSubtreeModified", function() {
 
  if ($m("label:contains('mlveda_country')").parent().css('display') !== 'none') {
        $m("label:contains('mlveda_country')").parent().css('display', 'none');
    }

/*
  $m("select").each(function(){    
    if($m(this).find("option").length==1  && $(this).css('display')!=="none")  {
    $m(this).css('display','none');
      $m(this).parent().css('display','none');
  }  
  });
*/
});

</script>
          </div>
          	<script>

//$m(document).ready(function(){
//window.pattern = /(jp|fr|ca|uk|ma|au|in)/;
 // window.pattern = /^(do|sv|ee|fi|fr|gd|gp|gg|hu|is|im|il|kz|ke|kg|la|mo|mk|mh|mq|ms|ma|nl|ne|ng|no|pw|py|pl|pt|kn|st|sc|sg|sk|za|sr|sj|th|to|tm|tc|uz|vu|vn|zm|af|al|as|ao|ai|an|ag|ar|as|bb|by|aq|bm|bq|bv|au|vg|bs|cv|bh|cf|bd|cn|be|co|ba|ci|bw|dk|bn|dm|bi|cd|cm|ec|ca|eg|td|gq|cx|er|cc|et|cr|eu|ga|gh|cy|gi|dj|gu|eu|gt|fk|gn|fo|gw|gf|hm|pf|hn|gm|iq|ge|ie|de|jm|gr|jp|in|ki|id|lr|je|mw|lv|my|ly|mu|li|yt|mv|mx|mc|mn|mz|nr|np|ni|nu|nf|pk|na|ph|oc|pn|om|qa|pg|re|pr|sh|ro|ru|rw|sm|bl|rs|pm|sx|vc|gs|sa|sd|sl|se|si|tj|tz|sb|tt|sa|tn|es|gb|lk|va|ch|zw|sy|tw|tl|tg|tr|um|vi|ug|us|uy|ve|af|ax|dz|ad|am|aw|at|az|bz|bj|bt|bo|br|io|bg|bf|kh|ky|cl|km|cg|ck|hr|cu|cw|cz|fj|tf|gl|gy|ht|hk|ir|it|jo|kw|lb|ls|lt|lu|mg|ml|mt|mr|fm|md|me|mm|na|nc|nz|kp|mp|ps|pa|pe|lc|mf|ws|sn|so|kr|ss|sz|tk|tv|ua|ae|wf|eh|ye|intl)$/;

var mlveda_observer = new MutationObserver(function(mutations){
			//console.log(mutations.length);
		
        
			mutations.forEach(function(mutation) {
              
              
                if(mutation.addedNodes[0] && mutation.addedNodes[0].childNodes[0] && mutation.addedNodes[0].childNodes[0].innerHTML === "mlveda_country" ){
                                 window.mlveda_label = mutation.addedNodes[0].childNodes[0];
//                  				console.log("hello");
                                $m(mlveda_label).parent().css("display" , "none");
                }
    
              
                $m("select:not(.mlveda_country,.vichitra)").each(function(){
                      var flag = 1;
//                      console.log("select "+this);
//                      console.log($m(this).children().length);
                      $m(this).children().each(function(option){
//                        console.log($m(this).parent().attr("class"));
                        //if(($(this).parent().attr("class") !== 'mlveda_country') || ($(this).parent().attr("class") !== 'vichitra')){
//                        console.log("option "+this);


                        var str = $m(this).val().trim();
//                        console.log("value "+str);
                        var res = pattern.test(str);
//                        console.log("result "+res);
                        if(res){
                          flag=2;
                            return;
                        }
                        else{
//                          console.log("in else "+str);
                          $m(this).parent().addClass("vichitra");
                            flag = 0;
                            return false;
                        }
                      //}
                      });
//                      console.log("flag "+flag);
                      if(flag==2){
//                        console.log("it's time for magic");
                         $m(this).addClass("mlveda_country");
//                        console.log($m(this));
                        $m(this).parent().css("display" , "none");
//                        console.log($m(this).val());
                      /*$m(this).val($m(this).val()).trigger("change");
                       var event1 = new Event("change" , {bubbles : true});
                        var mlveda_select = this;
                        $m(this).val($m(this).val())[0].dispatchEvent(event1);		*/	
                        
                        
                     if(country && country !== null && $m(this).val() == country){
                          $m(this).attr("mlveda_country_found","true");
                          $m(this).val($m(this).val()).trigger("change");
                        }
                        else if(continent && continent !== null && $m(this).val() == continent){
                          $m(this).attr("mlveda_continent_found","true");
                          $m(this).val($m(this).val()).trigger("change");
                        }
                        else if(country !== null && continent !== null){
                          $m(this).val($m(this).val()).trigger("change");
                        }
                 
                 
                            //$m(this).addClass("mlveda_country");
		
                      }
                    });

            });
        });
  
  var div2 = document.querySelector('body');
		//var div3 = div2.nextSibling;
	
	
		mlveda_observer.observe(document, { childList: true , subtree : true});
 //});

 window.onload = function(){
    setTimeout(function(){
    	 $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
         $m("<style type=\"text/css\">  button[name='add'] {visibility:visible;}</style>").appendTo("head");
    },2000);
  }
  </script>

          	<script>one_more_flag = false;</script>

<script>
  console.log("here");

var mlvedaCallUrl = "//www.mlveda.com/ShopifyApps/ShopifyMultiPricing/getLocation?shop=hijanah-haul.myshopify.com&rnd=" + Math.floor((Math.random() * 10000000000) + 1);
      
var syncWithThemePageFlag = false;   

  
  // $m(document).ready(function(){
         
  //  });
  
  
  
  
var country = null;
var continent = null ;
var countryFound = false;  
var continentFound = false;
  var intlFound = false;
  

      var abcd = $m.ajax({
        url: mlvedaCallUrl,
        type: "GET",
        dataType: "json",
        async: true,
        timeout: 10000,
        success: function(response) {
        if (response === "") {
       		$m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
              
          $m("<style type=\"text/css\"> div.mlvedaform h2.price {visibility:visible;}</style>").appendTo("head");
      	}
        else {
          
              country = response.country;
        	  continent = response.continent;
        
          
          
          console.log("success");
          
   				 if (($m("select.mlveda_country").val() !== country && country!=null) || ($m("select.mlveda_country").val() !== continent && continent!=null) || $m("select.mlveda_country").val() !== "intl")
    			{
//                  console.log("first if of ajax");
      			//console.log($m("select.mlveda_country").parent().find("select").val());
      			//console.log("country is " + country);
                  $m("select.mlveda_country").each(function(){
                        if ($m(this).find('option[value='+ country  + ']').length !=0 || $m(this).find('option[value='+ continent  + ']').length !=0 || $m(this).find('option[value="intl"]').length !=0)
                        {
//                          console.log("in second if of ajax");
                          if($m(this).find('option[value='+ country  + ']').length != 0) {
//                            console.log($m("select.mlveda_country"));
//                            console.log("country found from ajax");
                            $m(this).attr("mlveda_country_found","true");
                            //check_for_options($m("select.mlveda_country") , country);
                            $m(this).val(country).trigger("change");
                          }
                          else if($m(this).find('option[value='+ continent  + ']').length !=0) {
//                            console.log("continent found from Ajax");
                            //check_for_options($m("select.mlveda_country") , continent);
                            $m(this).attr("mlveda_continent_found","true");
                            $m(this).val(continent).trigger("change");
                          }
                          else {
                            //check_for_options($m("select.mlveda_country") , "intl");
                            $m(this).val("intl").trigger("change");
                          }
//                          console.log("1111");

                          $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
                            
                          $m("<style type=\"text/css\"> div.mlvedaform h2.price {display:block;}</style>").appendTo("head");
                         }
                         else{
                          $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");	
                             
                         }

                 });
                 if(!one_more_flag){ 
                   if($m("select.mlveda_country").find("option").length <=1)
                   {
//                     console.log("1112");
                     $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
                                                 
                     $m("<style type=\"text/css\"> div.mlvedaform h2.price {visibility:visible;}</style>").appendTo("head");
                   }
                 }
    			}	
          		
            } 
        },
        error: function(xhr, textStatus, errorThrown) {
          console.log("1113");
            $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
                        
          $m("<style type=\"text/css\"> div.mlvedaform h2.price {visibility:visible;}</style>").appendTo("head");
        console.log("timeout");
      }
});
  
$m("body").delegate("select", "change", function(event) {
//console.log("change trigerred");
//  console.log($m("select.mlveda_country:last"));
//  console.log($m(this));
//  console.log("id = "+mlveda_select_id);
//  console.log("value : "+$m(this).val());
  
  if(country !== null && continent !== null){
  
    if ($m(this).val() && $m(this).val() !== country && country!=null && $m(this).find('option[value='+ country  + ']').length !=0)
    {
      //console.log($m("select.mlveda_country").parent().find("select").val());
//      console.log("country is " + country);
    if ($m(this).find('option[value='+ country  + ']').length !=0)
    {
//      console.log("country found")  ;
      //countryFound = true;
      $m(this).attr("mlveda_country_found","true");
        $m(this).val(country).trigger("change");
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });
    }
//      console.log("1114");
    $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
        
      $m("<style type=\"text/css\"> div.mlvedaform h2.price {visibility:visible;}</style>").appendTo("head");
    }
 
  else if ($m(this).val() && $m(this).val() !== continent && continent!=null && $m(this).attr("mlveda_country_found") === undefined && $m(this).find('option[value='+ continent  + ']').length !=0)
    {
      
      //console.log($m("select.mlveda_country").parent().find("select").val());
      //console.log("continent is " + continent);
    if ($m(this).find('option[value='+ continent  + ']').length !=0)
    {
//            console.log("continent found") ; 

      //continentFound = true
      $m(this).attr("mlveda_continent_found","true");
        $m(this).val(continent).trigger("change");
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });
    }
//      console.log("1115");
    $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
        
      $m("<style type=\"text/css\"> div.mlvedaform h2.price {visibility:visible;}</style>").appendTo("head");
    }
  else
  {
    //console.log($m("select.mlveda_country:last").val());
  //console.log($m("select.mlveda_country:last").find('option[value="intl"]').length);
    if ($m(this).find('option[value="intl"]').length !=0 && $m(this).attr("mlveda_country_found") === undefined && $m(this).attr("mlveda_continent_found") === undefined && $m(this).val() && $m(this).val() !== 'intl')
    {
//            console.log("intl found");
		intlFound = true;
        $m(this).val("intl").trigger("change");
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });
    }
//    console.log("1116");
    if(country !== null && continent !== null){
//      console.log("seen");
        $m("<style type=\"text/css\">  div.mlvedaform span.money {visibility:visible;}</style>").appendTo("head");
          
    //  $m("<style type=\"text/css\"> div.mlvedaform h2.price {display:block !important;}</style>").appendTo("head");
    }
  }
  }
});	
/*
  var observer = new MutationObserver(function(mutations){
			//console.log(mutations.length);
		
        
			mutations.forEach(function(mutation) {
				//console.log(count++);
				//console.log(mutation.addedNodes[0].children);
				//console.log(mutation);
              	
				//console.log(mutation.addedNodes[0].childNodes[0]);
				
					if(mutation.addedNodes[0] && mutation.addedNodes[0].childNodes[0] && mutation.addedNodes[0].childNodes[0].innerHTML === "mlveda_country" ){
						 window.mlveda_label = mutation.addedNodes[0].childNodes[0];
                     // if($m(label).next().prop("tagName") === "FIELDSET"){
                      //	var fieldset = $m(label).next();
                        // var childrens = $m(fieldset).children();
                        
                         
                          //$m('input:radio[name=mlveda_country][value='+country+']').click();
                        
                        //$m(label).parent().css("display" , "none");
                      //}
                      //else{
                          
						
						$m(mlveda_label).parent().css("display" , "none");
                      console.log("Trigerring change");
                      
                      $m(mlveda_label).parent().find("select").val($m(mlveda_label).parent().find("select").val()).trigger("change");
                      //}
					}
				
			});
        
	});
		
	
		var div2 = document.querySelector('body');
		//var div3 = div2.nextSibling;
	
	
		observer.observe(document, { childList: true , subtree : true});
  */
</script>
          
    </main>

    <div id="shopify-section-footer" class="shopify-section">





<footer class="footer-area" id="section-footer">
  <div class="container ">
    



<div >

  <div class="row">

    
    
<!--     <div class="col-lg-2 col-md-4 col-12"> -->
     <div class="col-lg-3 col-md-4 col-12">
      <div class="footer-widget mb-30">
        
        <div class="footer-title">
          <h3>ABOUT</h3>
        </div>
        
        <div class="footer-list">
          <ul>
            
            
            <li><a href="../pages/about-us.html">About Us</a></li>
            
            <li><a href="../pages/faqs.html">FAQs</a></li>
            
            <li><a href="../pages/terms-conditions.html">Terms & Conditions</a></li>
            
            <li><a href="../pages/privacy-policy.html">Privacy Policy</a></li>
            
          </ul>
        </div>
      </div>
    </div>

    
    
    
<!--     <div class="col-lg-2 col-md-4 col-12"> -->
     <div class="col-lg-3 col-md-4 col-12">
      <div class="footer-widget mb-30">
        
        <div class="footer-title">
          <h3>SHOPPING INFO</h3>
        </div>
        
        <div class="footer-list">
          <ul>
            
            
            <li><a href="../pages/how-to-start-shopping.html">How to start shopping</a></li>
            
            <li><a href="../pages/payment-option.html">Payment Option</a></li>
            
            <li><a href="../pages/return-and-exchange.html">Return & Exchange Policy</a></li>
            
            <li><a href="../pages/sizing-chart.html">Size Guide</a></li>
            
            <li><a href="../pages/sizing-policy.html">Shipping Policy</a></li>
            
          </ul>
        </div>
      </div>
    </div>

    
    
    
<!--     <div class="col-lg-2 col-md-4 col-12"> -->
     <div class="col-lg-3 col-md-4 col-12">
      <div class="footer-widget mb-30">
        
        <div class="footer-title">
          <h3>CUSTOMER SUPPORT</h3>
        </div>
        
        <div class="footer-list">
          <ul>
            
            
            <li><a href="../search.html">Contact Us</a></li>
            
            <li><a href="../search.html">Our Store</a></li>
            
            <li><a href="../pages/track-your-order.html">Track Your Order</a></li>
            
          </ul>
        </div>
      </div>
    </div>

    
    
    
<!--     <div class="col-lg-2 col-md-4 col-12"> -->
     <div class="col-lg-3 col-md-4 col-12">
      <div class="footer-widget mb-30">
        
        <div class="footer-title">
          <h3>FOLLOW US</h3>
        </div>
        
        <div class="footer-list">
          <ul>
            
            
            <li><a href="https://www.instagram.com/hijanahhaul/">Instagram @hijanahahul</a></li>
            
            <li><a href="https://www.facebook.com/hijanahhaul/">Facebook @hijanahhaul</a></li>
            
          </ul>
        </div>
      </div>
    </div>

    
    
    
    
    
    
    
<!--     <div class="col-lg-2 col-md-4 col-12"> -->
     <div class="col-lg-12 col-md-12 col-12">

      <div class="copyright mb-30">
        <div class="footer-logo"><a href="../index.html">
            Hijanah Haul
          </a></div>
<!--         <p>Copyright © 99 Shopify All Right Reserved.</p> -->
        Copyright © <b> Hijanah Haul</b> All Right Reserved.
      </div>
    </div>

    
    

  </div>

</div>


  </div>
</footer>





<style data-shopify>#section-footer{padding-top: 35px;
    padding-bottom: 0px;background: #e6b886 no-repeat scroll center center / cover;}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-footer{padding-top: 30px;
      padding-bottom: 0px;}
  }
  @media (max-width: 767px) {
    #section-footer{padding-top: 30px;
      padding-bottom: 0px;}
  }</style></div>
     
       
  
    </div>

    <!-- Necessary JS -->
    <script src="http://cdn.shopify.com/s/files/1/0167/7895/2758/t/5/assets/fastclick.min.js?4962"></script>
<script src="http://cdn.shopify.com/s/files/1/0167/7895/2758/t/5/assets/timber.js?4962"></script>


<script>
  
</script>
<!-- modalAddToCart Error -->
<div class="modal fade ajax-popup error-ajax-popup" id="modalAddToCartError" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog white-modal modal-md">
    <div class="modal-content ">
      <div class="modal-body">
        <div class="modal-content-text">
          <p class="error_message"></p>
        </div>
        <div class="modal-close">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pe-7s-close"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>






<script>
  $(function() {
    // Current Ajax request.
    var currentAjaxRequest = null;
    // Grabbing all search forms on the page, and adding a .search-results list to each.
    var searchForms = $('form[action="/search"]').css('position','relative').each(function() {
      // Grabbing text input.
      var input = $(this).find('input[name="q"]');
      // Adding a list for showing search results.
      var offSet = input.position().top + input.innerHeight();
      $('<ul class="search-results home-two"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo($(this)).hide();    
      // Listening to keyup and change on the text field within these search forms.
      input.attr('autocomplete', 'off').bind('keyup change', function() {
        // What's the search term?
        var term = $(this).val();
        // What's the search form?
        var form = $(this).closest('form');
        // What's the search URL?
        var searchURL = '/search?type=product&q=' + term;
        // What's the search results list?
        var resultsList = form.find('.search-results');
        // If that's a new term and it contains at least 3 characters.
        if (term.length > 3 && term != $(this).attr('data-old-term')) {
          // Saving old query.
          $(this).attr('data-old-term', term);
          // Killing any Ajax request that's currently being processed.
          if (currentAjaxRequest != null) currentAjaxRequest.abort();
          // Pulling results.
          currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(data) {
            // Reset results.
            resultsList.empty();
            // If we have no results.
            if(data.results_count == 0) {
              // resultsList.html('<li><span class="title">No results.</span></li>');
              // resultsList.fadeIn(100);
              resultsList.hide();
            } else {
              // If we have results.
              $.each(data.results, function(index, item) {
                var link = $('<a></a>').attr('href', item.url);
                link.append('<span class="thumbnail"><img src="' + item.thumbnail + '" /></span>');
                link.append('<span class="title">' + item.title + '</span>');
                link.wrap('<li></li>');
                resultsList.append(link.parent());
              });
              // The Ajax request will return at the most 10 results.
              // If there are more than 10, let's link to the search results page.
              if(data.results_count > 10) {
                resultsList.append('<li><span class="title"><a href="' + searchURL + '">See all results (' + data.results_count + ')</a></span></li>');
              }
              resultsList.fadeIn(100);
            }        
          });
        }
      });
    });
    // Clicking outside makes the results disappear.
    $('body').bind('click', function(){
      $('.search-results').hide();
    });
  });
</script>

<!-- Some styles to get you started. -->
<style>
  .search-results {
    z-index: 8889;
    list-style-type: none;   
    width: 190px;
    margin: 0;
    padding: 0;
    background: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 0px;
    -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
    overflow: hidden;
  }
  .search-results li {
    display: block;
    width: 100%;
    height: 38px;
    margin: 0;
    padding: 0;
    border-top: 1px solid #cccccc;
    line-height: 38px;
    overflow: hidden;
  }
  .search-results li:first-child {
    border-top: none;
  }
  .search-results .title {
    float: left;
    width: 140px;
    padding-left: 8px;
    white-space: nowrap;
    overflow: hidden;
    /* The text-overflow property is supported in all major browsers. */
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    text-align: left;
    font-size:12px;
    line-height:38px;
    color:#515151;
  }
  .search-results .title:hover{
    color:#CE9634;
  }
  .search-results .thumbnail {
    float: left;
    display: block;
    width: 32px;
    height: 32px;    
    margin: 3px 0 3px 3px;
    padding: 0;
    text-align: center;
    overflow: hidden;
    border-radius:0px;
  }
</style>

<div class="modal fade productModal" id="quickViewModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="qwick-view-left">
              <div class="quick-view-learg-img">
                <div class="quick-view-tab-content tab-content">
                  <div class="product-main-image__item">
                    <div class="img_box_1"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="qwick-view-right">
              <div class="qwick-view-content">
                <h1 class="product_title">FROM_JS</h1>
                <div class="product-price product-info__price price-part">
                  <span class="main">jsprice</span>
                  <span class="price-box__new">jsprice</span>
                </div>
                <div class="product-rating spr-badge-caption-none">
                  <div class="quick-view-rating rating">FROM_JS</div>
                </div>

                <div class="short-description product-des">FROM_JS</div>

                <form id="add-item-qv" action="https://hijanahhaul.com/cart/add" method="post">
                  <div class="quick-view-select variants select-option-part"></div>
                  <div class="quickview-plus-minus">
                    <div class="cart-plus-minus">
                      <input type="text" value="01" name="quantity" class="cart-plus-minus-box">
                    </div>
                    <div class="quickview-btn-cart">
                      <button type="submit" class="addtocartqv theme-default-button">Add to cart</button>
                    </div>
                  </div>
                  <script>
                    jQuery('.addtocartqv').click(function(e) {
                      e.preventDefault();
                      Shopify.addItemFromFormStart('add-item-qv', jQuery(this).attr('id'));
                    });
                  </script> 
                </form>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="close-icon" aria-hidden="true"><i class="pe-7s-close"></i></span>
        </button>
      </div>
    </div>
  </div>
</div>





<div class="quickViewModal_info" style="display: none;">
  <div class="button">Add to cart</div>
  <div class="button_added">Added</div>
  <div class="button_error">Limit Products</div>
  <div class="button_wait">Wait..</div>
</div>




<script>  
  var mainImage = '';
  jQuery(function ($) {

    quiqview = function(product_handle) {
      Shopify.getProduct(product_handle);
    }
    Shopify.onProduct = function(product) {
      $('.viewfullinfo').attr('href', product.url);

      // product description without shortcode
      text_truncate = function(str, length, ending) {
        if (length == null) {
          length = 500;
        }
        if (ending == null) {
          ending = '...';
        }
        if (str.length > length) {
          return str.substring(0, length - ending.length) + ending;
        } else {
          return str;
        }
      };

      var _parent = '#quickViewModal';
      $(_parent+' .product_title').text(product.title);
     


      // product rating
      $(_parent+' .rating').empty();
      $(_parent+' .rating').append("<span class=\"shopify-product-reviews-badge\" data-id=\""+product.id+"\"></span>");


      //check variants
      var variant = '';

      for (i = 0; i < product.variants.length; i++) {
        if(product.variants[i].inventory_quantity > 0) {
          variant = product.variants[i];
          break;
        }
      }

      if(variant == '') {
        for (i = 0; i < product.variants.length; i++) {
          if(product.variants[i].inventory_policy == "continue") {
            variant = product.variants[i];
            break;
          }
        }
        if(variant == '') {
          variant = product.variants[0];
        }
      }

      mainImage = product.featured_image;
      var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
      var imgurl = "<img class=\"full-width\" alt=\"\" src = \""+shopifyimgurl+"\" >";
      jQuery(_parent+' .product-main-image__item .img_box_1').empty();
      jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);
      jQuery(_parent+' .product-main-image__item .img_box_2').empty();
      jQuery(_parent+' .product-main-image__item .img_box_2').append(imgurl);

      // product description with shortcode
      var desc = product.description;
      if (desc.indexOf("[short_description]") >= 0) {
        desc = desc.split("[short_description]");
        desc = desc[1].split("[/short_description]");
        $(_parent+' .product-des').show();
        $(_parent+' .product-des').html(desc[0]);
      }
      else {
        $(_parent+' .product-des').html(text_truncate(product.description,250));
      }

      //set variants property
      var inv_qua = variant.inventory_quantity;
      //price
      if(variant.price < variant.compare_at_price) {
        $('.price-part .main').addClass('amount');
        $('.price-part .price-box__new').show();
        changePriceValue('.price-part .main', variant.compare_at_price);
        changePriceValue('.price-part .price-box__new', variant.price);
      }
      else {
        $('.price-part .price-box__new').hide();
        $('.price-part .main').removeClass('amount');
        changePriceValue('.price-part .main', variant.price);
      }
      
      if(typeof ACSCurrency !== "undefined" && typeof ACSCurrency.moneyFormats !== "undefined") { mlvedaload(); }

      // Variants select
      if(product.variants.length > 1) {
        var variants_margin = product.options.length == 2 ? 'variants_margin' : '';

        var select = '<select id="product-select-qv" name="id">';
        var selected = 'selected';
        for (i = 0; i < product.variants.length; i++) {
          var _var = product.variants[i];
          if(_var.available) {
            select += '<option value="' + _var.id + '"' + selected +'>' + _var.title + ' - ' + Shopify.formatMoney(_var.price, "<span class=money>RM{{amount}} MYR</span>") + '</option>'
                                                                                                                   selected = '';
                                                                                                                   }
                                                                                                                   }
                                                                                                                   select += '</select>';

                                                                                                                   var variant_select = '<div class="variants_selects ' + variants_margin + '">';
                                                                                                                   variant_select += select;
                                                                                                                   variant_select += '</div><div class="divider divider--sm"></div>';
                                                                                                                   select = variant_select;
                                                                                                                   }
                                                                                                                   else {
                                                                                                                   var select = '<input type="hidden" name="id" value="' + product.variants[0].id + '" />';
                                                                                                                   }
                                                                                                                   $('.variants').empty();
            $('.variants').html(select);

            //parametres
            setParametresText(_parent+' .product-sku', variant.sku);
            if(jQuery(_parent + ' .product-sku').length) {
              var $ava = jQuery(_parent + " .product-info__availabilitu");
              if(variant.sku != "") {
                if($ava.hasClass('pull-left')){ $ava.removeClass('pull-left') }
              } else {
                if(!$ava.hasClass('pull-left')){ $ava.addClass('pull-left') }
              }
            }

            //quantity
            var out_of_stock = false;
            if(variant.inventory_management) {
              if(inv_qua > 0) {
                $(_parent+' .product-availability').text(inv_qua + " In Stock");
                                                         }
                                                         else {
                                                         out_of_stock = true;
                                                         $(_parent+' .product-availability').text("In Stock");
                                                                                                  }
                                                                                                  }
                                                                                                  else {
                                                                                                  $(_parent+' .product-availability').text("Many in stock");
                                                                                                                                           }

                                                                                                                                           // button
                                                                                                                                           if(!out_of_stock || variant.inventory_policy == "continue") {        
                  $('.product-available').show();
                  $('.product-disable').hide();
                  $('.addtocartqv').attr('id', product.id );
                }
                else {
                  $('.product-available').hide();
                  $('.product-disable').show();
                }

                if (product.available && product.variants.length > 1) {
                  new Shopify.OptionSelectors("product-select-qv", { product: product, onVariantSelected: selectCallbackQv, enableHistoryState: true });

                  if($('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
                    $.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
                      $(this).find('label').text(product.options[index].name);
                    });
                  }
                }
                else {
                  jQuery('.currency .active').trigger('click');
                }
                selectGrid(_parent);

                if($(".spr-badge").length > 0) {
                  $.getScript(window.location.protocol + "//productreviews.shopifycdn.com/assets/v4/spr.js");
                }

                if($(".selector-wrapper label").length) {
                  $(".selector-wrapper label").each(function( index ) {
                    $(this).text(jQuery(this).text() + ":");
                  });
                }

                $(_parent).modal('show');

                if( !( 'ontouchstart' in window ) &&
                   !navigator.msMaxTouchPoints &&
                   !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

                $j('body').css("top", -$j('body').scrollTop());
                $j('body').addClass("no-scroll");
                $j('.close').click(function(){
                  var top = parseInt($j('body').css("top").replace("px", ""))*-1;
                  $j('body').removeAttr("style");
                  $j('body').removeClass("no-scroll");
                  $j('body').scrollTop(top);
                });
              }

              function setParametresText(obj, value) {
                if(value != '') {
                  $(obj).parent().show();
                  $(obj).text(value);
                }
                else {
                  $(obj).parent().hide();
                }
              }

              function changePriceValue (cell, value) {
                $(cell).html(Shopify.formatMoney(value, "<span class=money>RM{{amount}} MYR</span>"));
                                                 };

                                                 });



                             var selectCallbackQv = function(variant, selector) {

                  var _parent = '#quickViewModal';
                  var _parentprice = _parent + ' .price-part';
                  if (!variant) {
                    jQuery(_parent + " .price-box").hide();
                    jQuery(_parent + " .qwt").hide();
                    jQuery(_parent + " .control-console").hide();
                    jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                    jQuery(_parent + ' .addtocartqv').text('Unavailable');
                                                           return false;
                                                           }

                                                           jQuery(_parent + " .price-box").show();
                    jQuery(_parent + " .qwt").show();
                    jQuery(_parent + " .control-console").show();

                    if(variant.price < variant.compare_at_price){
                      jQuery(_parentprice + ' .main').addClass('price-box__old');
                      jQuery(_parentprice + ' .price-box__new').show();
                      changePriceValue(_parentprice + ' .main', variant.compare_at_price);
                      changePriceValue(_parentprice + ' .price-box__new', variant.price);
                    } else {
                      jQuery(_parentprice + ' .price-box__new').hide();
                      jQuery(_parentprice + ' .main').removeClass('price-box__old');
                      changePriceValue(_parentprice + ' .main', variant.price);
                    }

                    newVariantTextDataQv(_parent + ' .product-sku', variant.sku);

                    if(jQuery(_parent + ' .product-sku').length) {
                      var $ava = jQuery(_parent + " .product-info__availabilitu");
                      if(variant.sku != "") {
                        if($ava.hasClass('pull-left')){ $ava.removeClass('pull-left') }
                      } else {
                        if(!$ava.hasClass('pull-left')){ $ava.addClass('pull-left') }
                      }
                    }

                    if (variant.available) {
                      if (variant.inventory_management == null) {
                        jQuery(_parent + " .product-availability").text("Many in stock");
                                                                        } else {
                                                                        jQuery(_parent + " .product-availability").text(" Many in stock");
                                                                                                                        }
                                                                                                                        } else {
                                                                                                                        jQuery(_parent + " .product-availability").text("Sold Out");
      }

	  var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
      var imgurl = "<img class=\"full-width\" alt=\"\" src = \""+shopifyimgurl+"\" >";
	  if(jQuery(_parent+' .product-main-image__item .img_box_1').children().length > 0) {
                          var detach = jQuery(_parent+' .product-main-image__item .img_box_1 img').detach();
                          jQuery(_parent+' .product-main-image__item .img_box_2').empty();
                          jQuery(_parent+' .product-main-image__item .img_box_2').append(detach);
                        }
                        jQuery(_parent+' .product-main-image__item .img_box_1').empty();
                        jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);

                        if (variant && variant.available) {
                          jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
                          jQuery(_parent + ' .addtocartqv').html('Add to Cart');
                                                                 jQuery(_parent + " .control-console").show();
                        } else {
                          jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                          jQuery(_parent + ' .addtocartqv').text('Unavailable');
                                                                 jQuery(_parent + " .control-console").hide();
                        }

                        jQuery('.currency .active').trigger('click');
                        
                        if(typeof ACSCurrency !== "undefined" && typeof ACSCurrency.moneyFormats !== "undefined") { mlvedaload(); }
                      };

                      function changePriceValue (cell, value) {
                        jQuery(cell).html(Shopify.formatMoney(value, "<span class=money>RM{{amount}} MYR</span>"));
                                                              
						if(typeof ACSCurrency !== "undefined" && typeof ACSCurrency.moneyFormats !== "undefined") { mlvedaload(); }
                                                              };

                                                              function newVariantTextDataQv (obj, value) {
                                          if(value != '') {
                          jQuery(obj).parent().show();
                          jQuery(obj).text(value);
                        }
                        else {
                          jQuery(obj).parent().hide();
                        }
                      };


                      function selectGrid(_parent) {
                        setTimeout(timeout, 5);
                        function timeout() {
                          if(jQuery(_parent + " .selector-wrapper").length > 2){
                            jQuery(_parent + " .single-option-selector").addClass("select--wd");
                          } else if(jQuery(_parent + " .selector-wrapper").length == 1){
                            jQuery(_parent + " .single-option-selector").before("<label></label>");
                                                                                jQuery(_parent + " .single-option-selector").addClass("select--wd");
                          }
                        }
                      };
</script>

<!-- END QUICKVIEW PRODUCT -->

<script>
  $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
  $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
  $(".qtybutton").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    $button.parent().find("input").val(newVal);
  });
</script>
<script>
  $('.ajax-spin-cart').on('click', function() {
    $(this).addClass('loading add-item');
    setTimeout(function () {
      $('.ajax-spin-cart').removeClass('loading');
    },1000);
    setTimeout(function () {
      $('.ajax-spin-cart').removeClass("add-item");
    },2000);

  });
</script>

<script src="http://cdn.shopify.com/s/files/1/0167/7895/2758/t/5/assets/wishlist.js?4962"></script>
<script>  
  /* Ajax Wishlist */
  $(".action-wishlist").on('click', function(){
    $(this).addClass("loading-wishlist adding-wishlist");
    setTimeout(function () {
      $(".action-wishlist").removeClass("loading-wishlist");
    },1000);
    setTimeout(function () {
      $(".adding-wishlist").removeClass("adding-wishlist");
    },2000);

  });

  (function() {
    Wishlist.init();
  }());
</script><!-- Recently Viewed Products --><script src="http://cdn.shopify.com/s/javascripts/currencies.js"></script>
<script src="http://cdn.shopify.com/s/files/1/0167/7895/2758/t/5/assets/jquery.currencies.min.js?4962"></script>

<script>

  // Pick your format here:
  // money_format or money_with_currency_format
  Currency.format = 'money_format';

  var shopCurrency = 'MYR';

  /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
  Currency.moneyFormats[shopCurrency].money_with_currency_format = "RM{{amount}} MYR";
  Currency.moneyFormats[shopCurrency].money_format = "RM{{amount}} MYR";

  var cookieCurrency;
  try {cookieCurrency = Currency.cookie.read();} catch (err) {} // ignore errors reading cookies

  // Fix for customer account pages.
  jQuery('span.money span.money').each(function() {
    jQuery(this).parents('span.money').removeClass('money');
  });

  // Saving the current price.
  jQuery('span.money').each(function() {
    jQuery(this).attr('data-currency-MYR', jQuery(this).html());
                      });

    // Select all your currencies buttons.
    var buttons = jQuery('.currency li');

    // If there's no cookie or it's the shop currency.
    if (cookieCurrency == null || cookieCurrency === shopCurrency) {
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
      Currency.currentCurrency = shopCurrency;
      jQuery(".current-currency").text(shopCurrency);
    }
    else {
      Currency.convertAll(shopCurrency, cookieCurrency);
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
      jQuery(".current-currency").text(cookieCurrency);
    }

    // When customer clicks on a currency button.
    buttons.click(function() {
      buttons.removeClass('active');
      var cur = jQuery(this).attr('data-currency');
      jQuery( ".currency li[data-currency='" + cur + "']" ).addClass('active');

      var newCurrency =  jQuery(this).attr('data-currency');
      if(newCurrency == Currency.currentCurrency)
      {
        Currency.convertAll(shopCurrency, newCurrency);
      }
      else
      {
        Currency.convertAll(Currency.currentCurrency, newCurrency);
      }

      jQuery(".current-currency").text(cur);
    });

    // For product options.
    var main_selectCallback = window.selectCallback;
    var selectCallback = function(variant, selector) {
      main_selectCallback(variant, selector);
      Currency.convertAll(shopCurrency, jQuery(".currency .active").attr('data-currency'));
    };
</script><script>
  $('[data-countdown]').each(function() {
    var $this = $(this), finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function(event) {
      $this.html(event.strftime('<div class="countdown-area"><div class="single-countdown"><div class="count-number">%D</div><div class="count-title">days</div></div><div class="single-countdown"><div class="count-number">%H</div><div class="count-title">Hour</div></div><div class="single-countdown"><div class="count-number">%M</div><div class="count-title">Mint</div></div><div class="single-countdown"><div class="count-number">%S</div><div class="count-title">Sec</div></div></div>'));
    });
  });
</script>
    
    <div class="loading-modal compare_modal">translation missing: en.general.search.loading</div>
<div class="ajax-success-compare-modal compare_modal" id="moda-compare" tabindex="-1" role="dialog" style="display:none">
  <div class="overlay"> </div>
  <div class="modal-dialog modal-lg">
    <div class="modal-content content" id="compare-modal">
      <div class="modal-header">
        <div class="modal-close">
          <span class="compare-modal-close"><i class="pe-7s-close"></i></span>
        </div>
        <h4 class="modal-title">Compare Product</h4>
      </div>
      <div class="modal-body">
        <div class="table-wrapper">
          <table class="table table-hover table-responsive">
            <thead>
              <tr class="th-compare">
                <th></th>
              </tr>
            </thead>
            <tbody id="table-compare">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>

<!-- BOOSTFLOWSCRIPT CODE START -->
<script type="text/javascript">




if(typeof Shopify === 'undefined') {
    Shopify = {};
}

if (!Shopify.shop) {
  Shopify.shop = 'hijanahhaul.com';
}
var bfRawUrl = function(){return window.location.href}();
(function (doc, scriptPath) {
    var sc, node, today=new Date(),dd=today.getDate(),mm=today.getMonth()+1,yyyy=today.getFullYear();if(dd<10)dd='0'+dd;if(mm<10)mm='0'+mm;today=yyyy+mm+dd;
    
    sc = doc.createElement("script");
    sc.type = "text/javascript";
    sc.async = !0;
    sc.defer = true;
    sc.src = scriptPath + '?shop=' + Shopify.shop;
    node = doc.getElementsByTagName("script")[0];
    node.parentNode.insertBefore(sc, node);
})(document, 'new-in.html\/\/sdk.boostflow.com\/js\/app.js');
</script>

<!-- BOOSTFLOWSCRIPT CODE END -->
  
  	
		<script src="http://cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>
<script>
  
  window.mlvedaFlagCalled = false;
                

var mlvedaCallUrl = "http://www.mlveda.com/ShopifyApps/ShopifyMultiPricing/getPrices?shop=hijanah-haul.myshopify.com"
function checkShopifyFormatMoney() {
var data = [];
var mlvedaData = {};
  

var dataSet = [];
 
$m("a").each(function() {
  
  if($m(this).attr("href") && $m(this).attr("href").replace(/\?.*/,"").toString().indexOf("../products/index.html") != -1){
    var $mhandleArray = $m(this).attr('href').split("../index.html");
    var $mhandle = $mhandleArray[$mhandleArray.length - 1].split("\?")[0];
    
   dataSet.push($m(this).attr('href').split("\?")[0]);
  }
});
  
  uniqueArray = dataSet.filter(function(item, pos) {
    return dataSet.indexOf(item) == pos;
  })
  

  
  for (var item = 0 ; item < uniqueArray.length ; item++) {

    if(uniqueArray[item].indexOf(".jpeg") == -1 && uniqueArray[item].indexOf(".jpg") == -1) {
      data.push({"url": uniqueArray[item]});
    }
  }


mlvedaData = {"data": data};



    var abcd = $m.ajax({
        url: mlvedaCallUrl,
        type: "POST",
        dataType: "json",
        timeout: 10000,
        data: {data: JSON.stringify(mlvedaData)},
        success: function(response) {
            if (response === "") {
                $m("<style type=\"text/css\">.percent-count,.sale-title,span.money { display: inline; }</style>").appendTo("head");
                mlvedaFlagCalled = true;
                if(typeof ACSCurrency !== "undefined" && typeof ACSCurrency.moneyFormats !== "undefined") {
                  mlvedaload();
                }
            }
            else {
		$m('span.money span.money').each(function() {
                                $m(this).parents('span.money').removeClass('money');
                });
                $m.each(response.data, function(index, element) {
                  if(element.url.indexOf("view=quick") == -1){
                    $m("a").each(function() {
                      if($m(this).attr("href") && $m(this).attr("href").replace(/\?.*/,"") === element.url){
                        if (element.variantId)
                        {
                         //   $m(this).attr("href", element.url + "?variant=" + element.variantId);
                        }
                        
                        $mmlvedamoney = $m(this).find(".money");
                        if(!($mmlvedamoney.html())){
                              $mmlvedamoney = $m(this).parent().find(".money");
                              if (!($mmlvedamoney.html()))
                              {
                                  $mmlvedamoney = $m(this).parent().parent().find(".money");
                              }
                        }
                        
                        if (element.price && $mmlvedamoney.html())
                        {
                          var $mfirstMlvedamoney = null;
                          var $msecondMlvedamoney = null;
                          $mmlvedamoney.each(function() {
                            if($mfirstMlvedamoney == null) {
                              $mfirstMlvedamoney = $m(this);
                            }
                            else if($msecondMlvedamoney == null ) {
                              $msecondMlvedamoney = $m(this);//parseInt($m(this).html().replace(/[^0-9]/g, ""),10);
                            }
                            else {                              
                              return false;//parseInt($m(this).html().replace(/[^0-9]/g, ""),10)                              
                            }                           
                            
                          });
                          
						$m(this).parent().find(".ajax-spin-cart").attr("onclick","Shopify.addItem("+element.variantId+", 1); return false;");                        
                      
                        if($msecondMlvedamoney == null) {
                          $mfirstMlvedamoney.html(Shopify.formatMoney(element.price, "RM{{amount}} MYR"));
							if("undefined" != typeof element.compare_at_price){
	                               $m(this).parent().find(".percent-count").html("-"+(((element.compare_at_price - element.price)*100 )/ element.compare_at_price).toFixed()+"%");
	                        }
	                       else{
	                               $m(this).parent().find(".percent-count,.sale-title").remove();  
	                       }
                        }
                        else {                        var currentPrice = parseInt($msecondMlvedamoney.html().replace(/[^0-9]/g, ""),10);
                        var previousPrice = parseInt($mfirstMlvedamoney.html().replace(/[^0-9]/g, ""),10);
                            if ( currentPrice >= previousPrice ) {
                              if(!(element.compare_at_price) || parseInt(element.compare_at_price) <= parseInt(element.price)) {
                                $mfirstMlvedamoney.html(Shopify.formatMoney(element.price, "RM{{amount}} MYR"));
                                $msecondMlvedamoney.html("");
								$msecondMlvedamoney.removeClass("money");
                                $mfirstMlvedamoney.css("color","#000");
                                $msecondMlvedamoney.parent().hide();
                                $m(this).parent().find(".percent-count,.sale-title").remove();
                              } else {
                                $msecondMlvedamoney.html(Shopify.formatMoney(element.compare_at_price, "RM{{amount}} MYR"));
                                $mfirstMlvedamoney.html(Shopify.formatMoney(element.price, "RM{{amount}} MYR"));
							   $m(this).parent().find(".percent-count").html("-"+(((element.compare_at_price - element.price)*100 )/ element.compare_at_price).toFixed()+"%");
                              }
                              }
                              else if( currentPrice < previousPrice ){
                                if(!(element.compare_at_price) || parseInt(element.compare_at_price) <= parseInt(element.price)) {
                                  $msecondMlvedamoney.html(Shopify.formatMoney(element.price, "RM{{amount}} MYR"));                                            
                                  $mfirstMlvedamoney.html("");
								  $mfirstMlvedamoney.removeClass("money");
                                  $mfirstMlvedamoney.parent().hide();
                                  $msecondMlvedamoney.css("color","#000");
                                  $m(this).parent().find(".percent-count,.sale-title").remove();
                                } else {
                                  $mfirstMlvedamoney.html(Shopify.formatMoney(element.compare_at_price, "RM{{amount}} MYR"));
                                  $msecondMlvedamoney.html(Shopify.formatMoney(element.price, "RM{{amount}} MYR"));
                                  $m(this).parent().find(".percent-count").html("-"+(((element.compare_at_price - element.price)*100 )/ element.compare_at_price).toFixed()+"%");                                            
                                }
                              }
                              
                             }
                        }
					  }                                            
                    });
                            }
                });
                              
                $m("<style type=\"text/css\">.percent-count,.sale-title,span.money{ display: inline; }</style>").appendTo("head");
                mlvedaFlagCalled = true;
                if(typeof ACSCurrency !== "undefined" && typeof ACSCurrency.moneyFormats !== "undefined") {
                  mlvedaload();
                }          
            }
                      //mlvedaload();
        },
        error: function(xhr, textStatus, errorThrown) {
            $m("<style type=\"text/css\">.percent-count,.sale-title,span.money{ display: inline; }</style>").appendTo("head");
            mlvedaFlagCalled = true;
                if(typeof ACSCurrency !== "undefined" && typeof ACSCurrency.moneyFormats !== "undefined") {
                  mlvedaload();
                }          
        }
    });
}

checkShopifyFormatMoney();
              if($){
$(document).ajaxComplete(function(event, xhr, settings) {
     if(settings.url.indexOf("?page=")!=-1 || settings.url.indexOf("search?")!=-1 ) {
       $m("<style type=\"text/css\">.percent-count,.sale-title,span.money{ display: none; }</style>").appendTo("head");
         checkShopifyFormatMoney();
     }
   });              
              }


</script>
<script type="text/javascript" src="http://mlveda.com/ShopifyApps/ShopifyMultiPricing/mlvedaUpdates.js"></script>
  	
  
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script>
      $acs = $.noConflict(true);
     mlflag1 = false;
     mlflag2 = false;
   </script>



<script type="text/javascript">
document.write('<scr'+'ipt src=\"//mlveda-shopifyapps.s3.amazonaws.com/multiCurrencyPricing/js/currencies.js?rnd='+Math.floor((Math.random() * 10000000000) + 1)+'\" type=\"text/javascript\"></scr'+'ipt>');
document.write('<scr'+'ipt src=\"/apps/MultiCurrency/New/jquery.currencies.min.js?rnd='+Math.floor((Math.random() * 10000000000) + 1)+'\" type=\"text/javascript\"></scr'+'ipt>');
</script>

<script>
  
var ACSCurrency = Currency;
function mlvedaCreateCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else
        var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function mlvedaReadCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0)
            return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function mlvedaEraseCookie(name) {
    createCookie(name, "", -1);
}

function roundCurrency() {
  
$acs('.money').each(function(){
       if (ACSCurrency.currentCurrency === "JOD" || ACSCurrency.currentCurrency === "KWD" || ACSCurrency.currentCurrency === "BHD") {
         var moneyraw = parseFloat($acs(this).html().replace(/[^0-9]/g, ""), 10) / 10 ;
       }
       else if( ACSCurrency.currentCurrency === "KRW" || ACSCurrency.currentCurrency === "JPY" || ACSCurrency.currentCurrency === "SEK" || ACSCurrency.currentCurrency === "HUF" || ACSCurrency.currentCurrency === "ISK") {
         var moneyraw = parseFloat($acs(this).html().replace(/[^0-9]/g, ""), 10) * 100 ;
       } else {
         var moneyraw = parseFloat($acs(this).html().replace(/[^0-9]/g, ""), 10)  ;
       }
       var moneyrounded = ((Math.round(moneyraw / 100)) - 1 + 1) * 100 ;
       if(ACSCurrency.format === "money_with_currency_format") {
         var acuree = ACSCurrency.formatMoney(moneyrounded, ACSCurrency.moneyFormats[ACSCurrency.currentCurrency].money_with_currency_format)
       }
       else {
         var acuree = ACSCurrency.formatMoney(moneyrounded, ACSCurrency.moneyFormats[ACSCurrency.currentCurrency].money_format)
       }        $acs(this).html(acuree);
     });    
}



var onetimecallflag = true;

$acs('span.money span.money').each(function() {
  $acs(this).parents('span.money').removeClass('money');
});

function mlvedaload() {

if(mlvedaFlagCalled){

ACSCurrency.format = 'money_with_currency_format';


var shopCurrency = 'MYR';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
ACSCurrency.moneyFormats[shopCurrency].money_with_currency_format = "RM{{amount}} MYR";
ACSCurrency.moneyFormats[shopCurrency].money_format = "RM{{amount}} MYR";
  


/* Default currency */
var defaultCurrency = shopCurrency;
  
/* Cookie currency */
var cookieCurrency = null;//ACSCurrency.cookie.read();
var resetCurrencyCookie = mlvedaReadCookie("resetCurrencyCookie");
if (resetCurrencyCookie == null)
{
    cookieCurrency = null;
    mlvedaCreateCookie("resetCurrencyCookie", 1, 365);
}

  if(cookieCurrency == null) {
	if("undefined" != typeof window.temp_currency_array && window.temp_currency_array[0] !== window.mlvedadefaultcurrency && window.temp_currency_array[1] !== window.mlvedadefaultcurrency) {
  	  cookieCurrency = "MYR";
	}
	else {
  	  cookieCurrency = window.mlvedadefaultcurrency;
	}
  }

/* Fix for customer account pages */
$acs('span.money span.money').each(function() {
  $acs(this).parents('span.money').removeClass('money');
});

/* Saving the current price */
$acs('span.money').each(function() {
if(!$acs(this).attr('data-currency-MYR'))
{
  $acs(this).attr('data-currency-MYR', $acs(this).html());
}
});

// If there's no cookie.
if (cookieCurrency == null || cookieCurrency == shopCurrency) {
  if(cookieCurrency == shopCurrency) {
    ACSCurrency.currentCurrency = shopCurrency;
  }
  else if (shopCurrency !== defaultCurrency) {
    ACSCurrency.convertAll(shopCurrency, defaultCurrency);
  }
  else {
    ACSCurrency.currentCurrency = defaultCurrency;
  }
}

// If the cookie value does not correspond to any value in the currency dropdown.
else if ($acs('[name=currencies]').length && $acs('[name=currencies] option[value=' + cookieCurrency + ']').length === 0) {
  ACSCurrency.currentCurrency = shopCurrency;
  ACSCurrency.cookie.write(shopCurrency);
}
else if (cookieCurrency === shopCurrency) {
  ACSCurrency.currentCurrency = shopCurrency;
}
else {
  ACSCurrency.convertAll(shopCurrency, cookieCurrency);
  $acs(".mlvedaCartNote").css("display","block");
  roundCurrency();
}

$acs('[name=currencies]').val(ACSCurrency.currentCurrency).change(function() {
  var newCurrency = $acs(this).val();
  if(ACSCurrency.currentCurrency!=shopCurrency) {
    ACSCurrency.convertAll(ACSCurrency.currentCurrency, shopCurrency);
    ACSCurrency.convertAll(shopCurrency, newCurrency);
  }
  else {
    ACSCurrency.convertAll(ACSCurrency.currentCurrency, newCurrency);
  }
  
  $acs('.selected-currency').text(ACSCurrency.currentCurrency);
  if(newCurrency != shopCurrency) {
    roundCurrency();
    $acs(".mlvedaCartNote").css("display","block");
  } else {
    $acs(".mlvedaCartNote").css("display","none");
  }});

var original_selectCallback = window.selectCallback;
var selectCallback = function(variant, selector) {
  original_selectCallback(variant, selector);
  ACSCurrency.convertAll(shopCurrency, $acs('[name=currencies]').val());
  $acs('.selected-currency').text(ACSCurrency.currentCurrency);
};

$acs('.selected-currency').text(ACSCurrency.currentCurrency);

  if(onetimecallflag) {
  $acs('.single-option-selector').change(function() {
    mlvedaload();
  });

  $acs('.swatch').change(function() {
    mlvedaload();
  });

  $acs('.single-option-radio').change(function() {
    mlvedaload();
  });

if( typeof $ !== "undefined" ) {
  $(document).ajaxComplete(function(event, xhr, settings) {
     if(settings.url.indexOf("update.js")!=-1 || settings.url.indexOf("cart.js")!=-1 || settings.url.indexOf("add.js")!=-1 || settings.url.indexOf("change.js")!=-1) {
       setTimeout(function() {
         mlvedaload();
       }, 1000);
     }
   });
}

//$acs(".pick_currency:visible").css("height",$acs(".pick_currency").parent(":visible").height());
//$acs(".pick_currency:visible").css("line-height",$acs(".pick_currency").parent(":visible").height());
//$acs("[name=currencies]:visible").css("height",$acs(".pick_currency").parent(":visible").height());
//$acs("[name=currencies]:visible").css("line-height",$acs(".pick_currency").parent(":visible").height());

  $acs("#currencies").niceSelect();
  $acs("#currencies1").niceSelect();
  $acs("#currencies2").niceSelect();

  onetimecallflag = false;
  }

                        }
}
</script>




﻿
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
/*
 * jQuery MiniColors: A tiny color picker built on jQuery
 *
 * Copyright: Cory LaViska for A Beautiful Site, LLC: http://www.abeautifulsite.net/
 *
 * Contribute: https://github.com/claviska/jquery-minicolors
 *
 * @license: http://opensource.org/licenses/MIT
 *
 */
  //jquery.minicolors.min.js

!function(i){"function"==typeof define&&define.amd?define(["jquery"],i):"object"==typeof exports?module.exports=i(require("jquery")):i($acs)}(function($acs){"use strict";function i(i,t){var o=$acs('<div class="minicolors" />'),a=$acs.minicolors.defaults,s=i.attr("data-opacity"),n;i.data("minicolors-initialized")||(t=$acs.extend(!0,{},a,t),o.addClass("minicolors-theme-"+t.theme).toggleClass("minicolors-with-opacity",t.opacity).toggleClass("minicolors-no-data-uris",t.dataUris!==!0),void 0!==t.position&&$acs.each(t.position.split(" "),function(){o.addClass("minicolors-position-"+this)}),n="rgb"===t.format?t.opacity?"25":"20":t.keywords?"11":"7",i.addClass("minicolors-input").data("minicolors-initialized",!1).data("minicolors-settings",t).prop("size",n).wrap(o).after('<div class="minicolors-panel minicolors-slider-'+t.control+'"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite"><div class="minicolors-grid-inner"></div><div class="minicolors-picker"><div></div></div></div></div>'),t.inline||(i.after('<span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color"></span></span>'),i.next(".minicolors-swatch").on("click",function(t){t.preventDefault(),i.focus()})),i.parent().find(".minicolors-panel").on("selectstart",function(){return!1}).end(),t.inline&&i.parent().addClass("minicolors-inline"),r(i,!1),i.data("minicolors-initialized",!0))}function t(i){var t=i.parent();i.removeData("minicolors-initialized").removeData("minicolors-settings").removeProp("size").removeClass("minicolors-input"),t.before(i).remove()}function o(i){var t=i.parent(),o=t.find(".minicolors-panel"),s=i.data("minicolors-settings");!i.data("minicolors-initialized")||i.prop("disabled")||t.hasClass("minicolors-inline")||t.hasClass("minicolors-focus")||(a(),t.addClass("minicolors-focus"),o.stop(!0,!0).fadeIn(s.showSpeed,function(){s.show&&s.show.call(i.get(0))}))}function a(){$acs(".minicolors-focus").each(function(){var i=$acs(this),t=i.find(".minicolors-input"),o=i.find(".minicolors-panel"),a=t.data("minicolors-settings");o.fadeOut(a.hideSpeed,function(){a.hide&&a.hide.call(t.get(0)),i.removeClass("minicolors-focus")})})}function s(i,t,o){var a=i.parents(".minicolors").find(".minicolors-input"),s=a.data("minicolors-settings"),r=i.find("[class$acs=-picker]"),e=i.offset().left,c=i.offset().top,l=Math.round(t.pageX-e),h=Math.round(t.pageY-c),d=o?s.animationSpeed:0,u,p,g,m;t.originalEvent.changedTouches&&(l=t.originalEvent.changedTouches[0].pageX-e,h=t.originalEvent.changedTouches[0].pageY-c),0>l&&(l=0),0>h&&(h=0),l>i.width()&&(l=i.width()),h>i.height()&&(h=i.height()),i.parent().is(".minicolors-slider-wheel")&&r.parent().is(".minicolors-grid")&&(u=75-l,p=75-h,g=Math.sqrt(u*u+p*p),m=Math.atan2(p,u),0>m&&(m+=2*Math.PI),g>75&&(g=75,l=75-75*Math.cos(m),h=75-75*Math.sin(m)),l=Math.round(l),h=Math.round(h)),i.is(".minicolors-grid")?r.stop(!0).animate({top:h+"px",left:l+"px"},d,s.animationEasing,function(){n(a,i)}):r.stop(!0).animate({top:h+"px"},d,s.animationEasing,function(){n(a,i)})}function n(i,t){function o(i,t){var o,a;return i.length&&t?(o=i.offset().left,a=i.offset().top,{x:o-t.offset().left+i.outerWidth()/2,y:a-t.offset().top+i.outerHeight()/2}):null}var a,s,n,r,c,l,d,u=i.val(),p=i.attr("data-opacity"),m,f=i.parent(),v=i.data("minicolors-settings"),b=f.find(".minicolors-swatch"),y=f.find(".minicolors-grid"),C=f.find(".minicolors-slider"),M=f.find(".minicolors-opacity-slider"),x=y.find("[class$acs=-picker]"),I=C.find("[class$acs=-picker]"),S=M.find("[class$acs=-picker]"),z=o(x,y),F=o(I,C),j=o(S,M);if(t.is(".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider")){switch(v.control){case"wheel":r=y.width()/2-z.x,c=y.height()/2-z.y,l=Math.sqrt(r*r+c*c),d=Math.atan2(c,r),0>d&&(d+=2*Math.PI),l>75&&(l=75,z.x=69-75*Math.cos(d),z.y=69-75*Math.sin(d)),s=g(l/.75,0,100),a=g(180*d/Math.PI,0,360),n=g(100-Math.floor(F.y*(100/C.height())),0,100),u=w({h:a,s:s,b:n}),C.css("backgroundColor",w({h:a,s:s,b:100}));break;case"saturation":a=g(parseInt(z.x*(360/y.width()),10),0,360),s=g(100-Math.floor(F.y*(100/C.height())),0,100),n=g(100-Math.floor(z.y*(100/y.height())),0,100),u=w({h:a,s:s,b:n}),C.css("backgroundColor",w({h:a,s:100,b:n})),f.find(".minicolors-grid-inner").css("opacity",s/100);break;case"brightness":a=g(parseInt(z.x*(360/y.width()),10),0,360),s=g(100-Math.floor(z.y*(100/y.height())),0,100),n=g(100-Math.floor(F.y*(100/C.height())),0,100),u=w({h:a,s:s,b:n}),C.css("backgroundColor",w({h:a,s:s,b:100})),f.find(".minicolors-grid-inner").css("opacity",1-n/100);break;default:a=g(360-parseInt(F.y*(360/C.height()),10),0,360),s=g(Math.floor(z.x*(100/y.width())),0,100),n=g(100-Math.floor(z.y*(100/y.height())),0,100),u=w({h:a,s:s,b:n}),y.css("backgroundColor",w({h:a,s:100,b:100}))}if(p=v.opacity?parseFloat(1-j.y/M.height()).toFixed(2):1,v.opacity&&i.attr("data-opacity",p),"rgb"===v.format){var D=k(u),p=""===i.attr("data-opacity")?1:g(parseFloat(i.attr("data-opacity")).toFixed(2),0,1);(isNaN(p)||!v.opacity)&&(p=1),m=i.minicolors("rgbObject").a<=1&&D&&v.opacity?"rgba("+D.r+", "+D.g+", "+D.b+", "+parseFloat(p)+")":"rgb("+D.r+", "+D.g+", "+D.b+")"}else m=h(u,v.letterCase);i.val(m)}b.find("span").css({backgroundColor:u,opacity:p}),e(i,m,p)}function r(i,t){var o,a,s,n,r,c,l,v,y,M,k=i.parent(),x=i.data("minicolors-settings"),I=k.find(".minicolors-swatch"),S=k.find(".minicolors-grid"),z=k.find(".minicolors-slider"),F=k.find(".minicolors-opacity-slider"),j=S.find("[class$acs=-picker]"),D=z.find("[class$acs=-picker]"),T=F.find("[class$acs=-picker]");switch(m(i.val())?(o=b(i.val()),r=g(parseFloat(f(i.val())).toFixed(2),0,1),r&&i.attr("data-opacity",r)):o=h(d(i.val(),!0),x.letterCase),o||(o=h(p(x.defaultValue,!0),x.letterCase)),a=C(o),n=x.keywords?$acs.map(x.keywords.split(","),function(i){return $acs.trim(i.toLowerCase())}):[],c=""!==i.val()&&$acs.inArray(i.val().toLowerCase(),n)>-1?h(i.val()):m(i.val())?u(i.val()):o,t||i.val(c),x.opacity&&(s=""===i.attr("data-opacity")?1:g(parseFloat(i.attr("data-opacity")).toFixed(2),0,1),isNaN(s)&&(s=1),i.attr("data-opacity",s),I.find("span").css("opacity",s),v=g(F.height()-F.height()*s,0,F.height()),T.css("top",v+"px")),"transparent"===i.val().toLowerCase()&&I.find("span").css("opacity",0),I.find("span").css("backgroundColor",o),x.control){case"wheel":y=g(Math.ceil(.75*a.s),0,S.height()/2),M=a.h*Math.PI/180,l=g(75-Math.cos(M)*y,0,S.width()),v=g(75-Math.sin(M)*y,0,S.height()),j.css({top:v+"px",left:l+"px"}),v=150-a.b/(100/S.height()),""===o&&(v=0),D.css("top",v+"px"),z.css("backgroundColor",w({h:a.h,s:a.s,b:100}));break;case"saturation":l=g(5*a.h/12,0,150),v=g(S.height()-Math.ceil(a.b/(100/S.height())),0,S.height()),j.css({top:v+"px",left:l+"px"}),v=g(z.height()-a.s*(z.height()/100),0,z.height()),D.css("top",v+"px"),z.css("backgroundColor",w({h:a.h,s:100,b:a.b})),k.find(".minicolors-grid-inner").css("opacity",a.s/100);break;case"brightness":l=g(5*a.h/12,0,150),v=g(S.height()-Math.ceil(a.s/(100/S.height())),0,S.height()),j.css({top:v+"px",left:l+"px"}),v=g(z.height()-a.b*(z.height()/100),0,z.height()),D.css("top",v+"px"),z.css("backgroundColor",w({h:a.h,s:a.s,b:100})),k.find(".minicolors-grid-inner").css("opacity",1-a.b/100);break;default:l=g(Math.ceil(a.s/(100/S.width())),0,S.width()),v=g(S.height()-Math.ceil(a.b/(100/S.height())),0,S.height()),j.css({top:v+"px",left:l+"px"}),v=g(z.height()-a.h/(360/z.height()),0,z.height()),D.css("top",v+"px"),S.css("backgroundColor",w({h:a.h,s:100,b:100}))}i.data("minicolors-initialized")&&e(i,c,s)}function e(i,t,o){var a=i.data("minicolors-settings"),s=i.data("minicolors-lastChange");s&&s.value===t&&s.opacity===o||(i.data("minicolors-lastChange",{value:t,opacity:o}),a.change&&(a.changeDelay?(clearTimeout(i.data("minicolors-changeTimeout")),i.data("minicolors-changeTimeout",setTimeout(function(){a.change.call(i.get(0),t,o)},a.changeDelay))):a.change.call(i.get(0),t,o)),i.trigger("change").trigger("input"))}function c(i){var t=d($acs(i).val(),!0),o=k(t),a=$acs(i).attr("data-opacity");return o?(void 0!==a&&$acs.extend(o,{a:parseFloat(a)}),o):null}function l(i,t){var o=d($acs(i).val(),!0),a=k(o),s=$acs(i).attr("data-opacity");return a?(void 0===s&&(s=1),t?"rgba("+a.r+", "+a.g+", "+a.b+", "+parseFloat(s)+")":"rgb("+a.r+", "+a.g+", "+a.b+")"):null}function h(i,t){return"uppercase"===t?i.toUpperCase():i.toLowerCase()}function d(i,t){return i=i.replace(/^#/g,""),i.match(/^[A-F0-9]{3,6}/gi)?3!==i.length&&6!==i.length?"":(3===i.length&&t&&(i=i[0]+i[0]+i[1]+i[1]+i[2]+i[2]),"#"+i):""}function u(i,t){var o=i.replace(/[^\d,.]/g,""),a=o.split(","),s;return a[0]=g(parseInt(a[0],10),0,255),a[1]=g(parseInt(a[1],10),0,255),a[2]=g(parseInt(a[2],10),0,255),a[3]&&(a[3]=g(parseFloat(a[3],10),0,1)),t?{r:a[0],g:a[1],b:a[2],a:a[3]?a[3]:null}:"undefined"!=typeof a[3]&&a[3]<=1?"rgba("+a[0]+", "+a[1]+", "+a[2]+", "+a[3]+")":"rgb("+a[0]+", "+a[1]+", "+a[2]+")"}function p(i,t){return m(i)?u(i):d(i,t)}function g(i,t,o){return t>i&&(i=t),i>o&&(i=o),i}function m(i){var t=i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);return t&&4===t.length?!0:!1}function f(i){var i=i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+(\.\d{1,2})?|\.\d{1,2})[\s+]?/i);return i&&6===i.length?i[4]:"1"}function v(i){var t={},o=Math.round(i.h),a=Math.round(255*i.s/100),s=Math.round(255*i.b/100);if(0===a)t.r=t.g=t.b=s;else{var n=s,r=(255-a)*s/255,e=(n-r)*(o%60)/60;360===o&&(o=0),60>o?(t.r=n,t.b=r,t.g=r+e):120>o?(t.g=n,t.b=r,t.r=n-e):180>o?(t.g=n,t.r=r,t.b=r+e):240>o?(t.b=n,t.r=r,t.g=n-e):300>o?(t.b=n,t.g=r,t.r=r+e):360>o?(t.r=n,t.g=r,t.b=n-e):(t.r=0,t.g=0,t.b=0)}return{r:Math.round(t.r),g:Math.round(t.g),b:Math.round(t.b)}}function b(i){return i=i.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i),i&&4===i.length?"#"+("0"+parseInt(i[1],10).toString(16)).slice(-2)+("0"+parseInt(i[2],10).toString(16)).slice(-2)+("0"+parseInt(i[3],10).toString(16)).slice(-2):""}function y(i){var t=[i.r.toString(16),i.g.toString(16),i.b.toString(16)];return $acs.each(t,function(i,o){1===o.length&&(t[i]="0"+o)}),"#"+t.join("")}function w(i){return y(v(i))}function C(i){var t=M(k(i));return 0===t.s&&(t.h=360),t}function M(i){var t={h:0,s:0,b:0},o=Math.min(i.r,i.g,i.b),a=Math.max(i.r,i.g,i.b),s=a-o;return t.b=a,t.s=0!==a?255*s/a:0,0!==t.s?i.r===a?t.h=(i.g-i.b)/s:i.g===a?t.h=2+(i.b-i.r)/s:t.h=4+(i.r-i.g)/s:t.h=-1,t.h*=60,t.h<0&&(t.h+=360),t.s*=100/255,t.b*=100/255,t}function k(i){return i=parseInt(i.indexOf("#")>-1?i.substring(1):i,16),{r:i>>16,g:(65280&i)>>8,b:255&i}}$acs.minicolors={defaults:{animationSpeed:50,animationEasing:"swing",change:null,changeDelay:0,control:"hue",dataUris:!0,defaultValue:"",format:"hex",hide:null,hideSpeed:100,inline:!1,keywords:"",letterCase:"lowercase",opacity:!1,position:"bottom left",show:null,showSpeed:100,theme:"default"}},$acs.extend($acs.fn,{minicolors:function(s,n){switch(s){case"destroy":return $acs(this).each(function(){t($acs(this))}),$acs(this);case"hide":return a(),$acs(this);case"opacity":return void 0===n?$acs(this).attr("data-opacity"):($acs(this).each(function(){r($acs(this).attr("data-opacity",n))}),$acs(this));case"rgbObject":return c($acs(this),"rgbaObject"===s);case"rgbString":case"rgbaString":return l($acs(this),"rgbaString"===s);case"settings":return void 0===n?$acs(this).data("minicolors-settings"):($acs(this).each(function(){var i=$acs(this).data("minicolors-settings")||{};t($acs(this)),$acs(this).minicolors($acs.extend(!0,i,n))}),$acs(this));case"show":return o($acs(this).eq(0)),$acs(this);case"value":return void 0===n?$acs(this).val():($acs(this).each(function(){"object"==typeof n?(n.opacity&&$acs(this).attr("data-opacity",g(n.opacity,0,1)),n.color&&$acs(this).val(n.color)):$acs(this).val(n),r($acs(this))}),$acs(this));default:return"create"!==s&&(n=s),$acs(this).each(function(){i($acs(this),n)}),$acs(this)}}}),$acs(document).on("mousedown.minicolors touchstart.minicolors",function(i){$acs(i.target).parents().add(i.target).hasClass("minicolors")||a()}).on("mousedown.minicolors touchstart.minicolors",".minicolors-grid, .minicolors-slider, .minicolors-opacity-slider",function(i){var t=$acs(this);i.preventDefault(),$acs(document).data("minicolors-target",t),s(t,i,!0)}).on("mousemove.minicolors touchmove.minicolors",function(i){var t=$acs(document).data("minicolors-target");t&&s(t,i)}).on("mouseup.minicolors touchend.minicolors",function(){$acs(this).removeData("minicolors-target")}).on("mousedown.minicolors touchstart.minicolors",".minicolors-swatch",function(i){var t=$acs(this).parent().find(".minicolors-input");i.preventDefault(),o(t)}).on("focus.minicolors",".minicolors-input",function(){var i=$acs(this);i.data("minicolors-initialized")&&o(i)}).on("blur.minicolors",".minicolors-input",function(){var i=$acs(this),t=i.data("minicolors-settings"),o,a,s,n,r;i.data("minicolors-initialized")&&(o=t.keywords?$acs.map(t.keywords.split(","),function(i){return $acs.trim(i.toLowerCase())}):[],""!==i.val()&&$acs.inArray(i.val().toLowerCase(),o)>-1?r=i.val():(m(i.val())?s=u(i.val(),!0):(a=d(i.val(),!0),s=a?k(a):null),r=null===s?t.defaultValue:"rgb"===t.format?u(t.opacity?"rgba("+s.r+","+s.g+","+s.b+","+i.attr("data-opacity")+")":"rgb("+s.r+","+s.g+","+s.b+")"):y(s)),n=t.opacity?i.attr("data-opacity"):1,"transparent"===r.toLowerCase()&&(n=0),i.closest(".minicolors").find(".minicolors-swatch > span").css("opacity",n),i.val(r),""===i.val()&&i.val(p(t.defaultValue,!0)),i.val(h(i.val(),t.letterCase)))}).on("keydown.minicolors",".minicolors-input",function(i){var t=$acs(this);if(t.data("minicolors-initialized"))switch(i.keyCode){case 9:a();break;case 13:case 27:a(),t.blur()}}).on("keyup.minicolors",".minicolors-input",function(){var i=$acs(this);i.data("minicolors-initialized")&&r(i,!0)}).on("paste.minicolors",".minicolors-input",function(){var i=$acs(this);i.data("minicolors-initialized")&&setTimeout(function(){r(i,!0)},1)})});

//jquery.nice-select.js

/*  jQuery Nice Select - v1.0
    https://github.com/hernansartorio/jquery-nice-select
    Made by Hernán Sartorio  */
 
(function($acs) {

  $acs.fn.niceSelect = function() {

    // Hide native select
    this.hide();

    // Create custom markup
    this.each(function() {
      var select = $acs(this);
      
      if (!select.next().hasClass('nice-select')) {
        select.after('<div class="nice-select' +
          (' ' + select.attr('class') || '') +
          (select.attr('disabled') ? ' disabled' : '" tabindex="0') +
          '"><span class="current"></span><ul class="list"></ul></div><i class="fa fa-angle-down mldarrow"></i>');
        
        var dropdown = select.next();
        var options = select.find('option');
        var selected = select.find('option:selected');
        
        dropdown.find('.current').html(selected.data('display') || selected.text());
        
        options.each(function() {
          var display = $acs(this).data('display');
          dropdown.find('ul').append('<li class="option' +
            ($acs(this).is(':selected') ? ' selected' : '') +
            ($acs(this).is(':disabled') ? ' disabled' : '') +
            '" data-value="' + $acs(this).val() + '"' +
            (display ? ' data-display="' + display : '') + '"' +
            '>' + $acs(this).text() + '</li>');
        });
      }
    });
    
    /* Event listeners */
    
    // Unbind existing events in case that the plugin has been initialized before
    $acs(document).off('.nice_select');
    
    // Open/close
    $acs(document).on('click.nice_select', '.nice-select', function(event) {
      var dropdown = $acs(this);
      
      $acs('.nice-select').not(dropdown).removeClass('open');
      dropdown.toggleClass('open');
      
      if (dropdown.hasClass('open')) {
        dropdown.find('.option');  
        dropdown.find('.focus').removeClass('focus');
        dropdown.find('.selected').addClass('focus');
          $(".mldarrow").removeClass("fa-angle-down");
    $(".mldarrow").addClass("fa-angle-up");
      } else {
        dropdown.focus();
          $(".mldarrow").removeClass("fa-angle-up");
    $(".mldarrow").addClass("fa-angle-down");
      }
    });
    
    // Close when clicking outside
    $acs(document).on('click.nice_select', function(event) {
      if ($acs(event.target).closest('.nice-select').length === 0) {
        $acs('.nice-select').removeClass('open').find('.option'); 
          $(".mldarrow").removeClass("fa-angle-up");
    $(".mldarrow").addClass("fa-angle-down");
      }
    });
    

//For mldarrow click
     $acs('.mldarrow').on('click', function(event) {
		$acs(this).parent().find('.nice-select').click();
      // console.log("arrow clicked");
                event.stopImmediatePropagation();
       
     });

    // Option click
    $acs(document).on('click.nice_select', '.nice-select .option:not(.disabled)', function(event) {
      var option = $acs(this);
      var dropdown = option.closest('.nice-select');
      
      dropdown.find('.selected').removeClass('selected');
      option.addClass('selected');
      
      var text = option.data('display') || option.text();
      dropdown.find('.current').text(text);
   //   dropdown.find('.current-flags').css("background","url("+flaglink+text.toLowerCase()+".png) left center no-repeat");
//       dropdown.find('.current-flags').css("background-size","20px 15px");
      
      dropdown.prev('select').val(option.data('value')).trigger('change');
    });

    // Keyboard events
    $acs(document).on('keydown.nice_select', '.nice-select', function(event) {    
      var dropdown = $acs(this);
      var focused_option = $acs(dropdown.find('.focus') || dropdown.find('.list .option.selected'));
      
      // Space or Enter
      if (event.keyCode == 32 || event.keyCode == 13) {
        if (dropdown.hasClass('open')) {
          focused_option.trigger('click');
        } else {
          dropdown.trigger('click');
        }
        return false;
      // Down
      } else if (event.keyCode == 40) {
        if (!dropdown.hasClass('open')) {
          dropdown.trigger('click');
        } else {
          var next = focused_option.nextAll('.option:not(.disabled)').first();
          if (next.length > 0) {
            dropdown.find('.focus').removeClass('focus');
            next.addClass('focus');
          }
        }
        return false;
      // Up
      } else if (event.keyCode == 38) {
        if (!dropdown.hasClass('open')) {
          dropdown.trigger('click');
        } else {
          var prev = focused_option.prevAll('.option:not(.disabled)').first();
          if (prev.length > 0) {
            dropdown.find('.focus').removeClass('focus');
            prev.addClass('focus');
          }
        }
        return false;
      // Esc
      } else if (event.keyCode == 27) {
        if (dropdown.hasClass('open')) {
          dropdown.trigger('click');
        }
      // Tab
      } else if (event.keyCode == 9) {
        if (dropdown.hasClass('open')) {
          return false;
        }
      }
    });

    // Detect CSS pointer-events support, for IE <= 10. From Modernizr.
    var style = document.createElement('a').style;
    style.cssText = 'pointer-events:auto';
    if (style.pointerEvents !== 'auto') {
      $acs('html').addClass('no-csspointerevents');
    }

  };

}($acs));
//mlvedascript.js
 $acs(document).ready( function($acs) {

            $acs('.demo').each( function() {
                //
                // Dear reader, it's actually very easy to initialize MiniColors. For example:
                //
                //  $acs(selector).minicolors();
                //
                // The way I've done it below is just for the demo, so don't get confused
                // by it. Also, data- attributes aren't supported at this time. Again,
                // they're only used for the purposes of this demo.
                //
                $acs(this).minicolors({
                    control: $acs(this).attr('data-control') || 'hue',
                    defaultValue: $acs(this).attr('data-defaultValue') || '',
                    format: $acs(this).attr('data-format') || 'hex',
                    keywords: $acs(this).attr('data-keywords') || '',
                    inline: $acs(this).attr('data-inline') === 'true',
                    letterCase: $acs(this).attr('data-letterCase') || 'lowercase',
                    opacity: $acs(this).attr('data-opacity'),
                    position: $acs(this).attr('data-position') || 'bottom left',
                    swatches: $acs(this).attr('data-swatches') ? $acs(this).attr('data-swatches').split('|') : [],
                    change: function(hex, opacity) {
                        var log;
                        try {
                            log = hex ? hex : 'transparent';
                            if( opacity ) log += ', ' + opacity;
                            console.log(log);
                        } catch(e) {}
                    },
                    theme: 'default'
                });

            });
mlflag1 = true;
        }($acs));


$acs(document).ready(function($acs) {
		 
		 // Positions
		 
		 
		 $acs("#currency").blur(function(){
			var currencyText =  $acs(this).val();
			console.log(currencyText);
			$acs("#lblText").text(currencyText);
		 });
		 $acs("#currency").keyup(function(e){
			if (e.which == 13){
			var currencyText =  $acs(this).val();
			console.log(currencyText);
			$acs("#lblText").text(currencyText);
			}
		 });
		///////////////////////
		 
		 $acs('#alignment input').on('change', function() {
		   var FloatValue = ($acs('input[name=align]:checked', '#alignment').val());
		   $acs(".switchContainer").css("float", FloatValue ); 
		});

		////////////////////////////////
		
		 $acs("#hMargin").blur(function(){
			var hMarginValue =  parseInt($acs(this).val());
			$acs(".switchContainer").css("margin-left", hMarginValue );
			$acs(".switchContainer").css("margin-right", hMarginValue )
		 });
		 $acs("#hMargin").keyup(function(e){
			if (e.which == 13){
				var hMarginValue =  parseInt($acs(this).val());
				$acs(".switchContainer").css("margin-left", hMarginValue );
				$acs(".switchContainer").css("margin-right", hMarginValue )
			}
		 });
		 
		 ////////////////////////////////
		 
		 $acs("#vMargin").blur(function(){
			var vMarginValue =  parseInt($acs(this).val());
			$acs(".switchContainer").css("margin-top", vMarginValue )
			$acs(".switchContainer").css("margin-bottom", vMarginValue )
		 });
		 $acs("#vMargin").keyup(function(e){
			if (e.which == 13){
				var vMarginValue =  parseInt($acs(this).val());
				$acs(".switchContainer").css("margin-top", vMarginValue )
				$acs(".switchContainer").css("margin-bottom", vMarginValue )
			}
		 });
		 
		 ////////////////////////////////
		 
		 $acs("#dropHeight").blur(function(){
			var HeightValue =  parseInt($acs(this).val());
			$acs(".nice-select").css("height", HeightValue )
			$acs(".nice-select").css("line-height", HeightValue + "px")
		 });
		 $acs("#dropHeight").keyup(function(e){
			if (e.which == 13){
				var HeightValue =  parseInt($acs(this).val());
				$acs(".nice-select").css("height", HeightValue )
				$acs(".nice-select").css("line-height", HeightValue + "px")
			}
		 });
		 
		 ////////////////////////////////
		 
		 $acs("#dropWidth").blur(function(){
			var WidthValue =  parseInt($acs(this).val());
			$acs(".nice-select").css("width", WidthValue );
			$acs(".nice-select .list").css("width", WidthValue )
		 });
		 $acs("#dropWidth").keyup(function(e){
			if (e.which == 13){
				var WidthValue =  parseInt($acs(this).val());
				$acs(".nice-select").css("width", WidthValue );
				$acs(".nice-select .list").css("width", WidthValue )
			}
		 });
		 
		 
		 ////////////////////////////////
		  
		  
		 $acs("#dropFont").blur(function(){
			var FontValue =  parseInt($acs(this).val());
			$acs(".nice-select.switch").css("font-size", FontValue );
		 });
		 $acs("#dropFont").keyup(function(e){
			if (e.which == 13){
				var FontValue =  parseInt($acs(this).val());
				$acs(".nice-select.switch").css("font-size", FontValue );
			}
		 });
		 
		 
		 
		 // Styles
		 
		 $acs('#borderContainer input').on('change', function() {
		   var borderValue = ($acs('input[name=border]:checked', '#borderContainer').val());
		   $acs(".nice-select.switch").css("border", borderValue );
		   $acs(".nice-select ul.list").css("border", borderValue );
		   $acs(".nice-select ul.list li").css("border", borderValue ); 
		});
		
		
		$acs('#flagContainer input').on('change', function() {
		   var flagValue = ($acs('input[name=flag]:checked', '#flagContainer').val());
		   console.log(flagValue);
		   $acs(".flags").css("display", flagValue ); 
		});
		
		$acs('#transContainer input').on('change', function() {
		   var transValue = ($acs('input[name=transparentCol]:checked', '#transContainer').val());
		   $acs(".nice-select").css("background-color", transValue );
		   $acs(".nice-select").css("border", "0px solid #e8e8e8" ); 
			if ($acs('#trans2').is(':checked')) {
				$acs(".nice-select").css("border", "1px solid #e8e8e8" ); 
			}
		});
		
		$acs('#displayContainer input').on('change', function() {
		   var displayValue = ($acs('input[name=displayBox]:checked', '#displayContainer').val());
		   $acs(".switchContainer").css("display", displayValue ); 
		});
		 
		 
		 // Colors
		 
		 
		 $acs("#txtColor").blur(function(){
			var txtColorVale =  $acs(this).val();
			$acs(".nice-select").css("color", txtColorVale );
			$acs(".nice-select ul li").css("color", txtColorVale );
			 $acs( "<style type='text/css'>.nice-select:after { border-color: " + txtColorVale + "; }</style>" ).appendTo( "head" )
		 });
		 
		 
		 $acs("#bgColor").blur(function(e){
			var bgColorVale =  $acs(this).val();
			$acs(".nice-select").css("background-color", bgColorVale );
			$acs(".nice-select .option").css("background-color", bgColorVale );
			
		 });
		 
		$acs("#brdrColor").blur(function(e){
			var brdrColorVale =  $acs(this).val();
			$acs(".nice-select").css("border-color", brdrColorVale );
			$acs(".nice-select .option").css("border-color", brdrColorVale );
			$acs(".nice-select .list").css("border-color", brdrColorVale );
		 });
mlflag2 = true;		 
}($acs));



</script>
<style>
.minicolors {
    position: relative;
}

.minicolors-sprite {
    background-image: url(data:image/png;base64,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);
}

.minicolors-no-data-uris .minicolors-sprite {
    background-image: url(jquery.minicolors.png);
}

.minicolors-swatch {
    position: absolute;
    vertical-align: middle;
    background-position: -80px 0;
    border: solid 1px #ccc;
    cursor: text;
    padding: 0;
    margin: 0;
    display: inline-block;
}

.minicolors-swatch-color {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.minicolors input[type=hidden] + .minicolors-swatch {
    width: 28px;
    position: static;
    cursor: pointer;
}

.minicolors input[type=hidden][disabled] + .minicolors-swatch {
    cursor: default;
}

/* Panel */
.minicolors-panel {
    position: absolute;
    width: 173px;
    height: 152px;
    background: white;
    border: solid 1px #CCC;
    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
    z-index: 99999;
    box-sizing: content-box;
    display: none;
}

.minicolors-panel.minicolors-with-swatches {
	height: 182px;
}

.minicolors-panel.minicolors-visible {
    display: block;
}

/* Panel positioning */
.minicolors-position-top .minicolors-panel {
    top: -154px;
}

.minicolors-position-right .minicolors-panel {
    right: 0;
}

.minicolors-position-bottom .minicolors-panel {
    top: auto;
}

.minicolors-position-left .minicolors-panel {
    left: 0;
}

.minicolors-with-opacity .minicolors-panel {
    width: 194px;
}

.minicolors .minicolors-grid {
    position: absolute;
    top: 1px;
    left: 1px;
    width: 150px;
    height: 150px;
    background-position: -120px 0;
    cursor: crosshair;
}

.minicolors .minicolors-grid-inner {
    position: absolute;
    top: 0;
    left: 0;
    width: 150px;
    height: 150px;
}

.minicolors-slider-saturation .minicolors-grid {
    background-position: -420px 0;
}

.minicolors-slider-saturation .minicolors-grid-inner {
    background-position: -270px 0;
    background-image: inherit;
}

.minicolors-slider-brightness .minicolors-grid {
    background-position: -570px 0;
}

.minicolors-slider-brightness .minicolors-grid-inner {
    background-color: black;
}

.minicolors-slider-wheel .minicolors-grid {
    background-position: -720px 0;
}

.minicolors-slider,
.minicolors-opacity-slider {
    position: absolute;
    top: 1px;
    left: 152px;
    width: 20px;
    height: 150px;
    background-color: white;
    background-position: 0 0;
    cursor: row-resize;
}

.minicolors-slider-saturation .minicolors-slider {
    background-position: -60px 0;
}

.minicolors-slider-brightness .minicolors-slider {
    background-position: -20px 0;
}

.minicolors-slider-wheel .minicolors-slider {
    background-position: -20px 0;
}

.minicolors-opacity-slider {
    left: 173px;
    background-position: -40px 0;
    display: none;
}

.minicolors-with-opacity .minicolors-opacity-slider {
    display: block;
}

/* Pickers */
.minicolors-grid .minicolors-picker {
    position: absolute;
    top: 70px;
    left: 70px;
    width: 12px;
    height: 12px;
    border: solid 1px black;
    border-radius: 10px;
    margin-top: -6px;
    margin-left: -6px;
    background: none;
}

.minicolors-grid .minicolors-picker > div {
    position: absolute;
    top: 0;
    left: 0;
    width: 8px;
    height: 8px;
    border-radius: 8px;
    border: solid 2px white;
    box-sizing: content-box;
}

.minicolors-picker {
    position: absolute;
    top: 0;
    left: 0;
    width: 18px;
    height: 2px;
    background: white;
    border: solid 1px black;
    margin-top: -2px;
    box-sizing: content-box;
}

/* Swatches */
.minicolors-swatches,.minicolors-swatches li {
	margin: 0;
	padding: 0;
	list-style: none;
	overflow: hidden;
	position: absolute;
	top: 157px;
	left: 5px;
}

.minicolors-swatches .minicolors-swatch {
	position: relative;
	float: left;
	cursor: pointer;
	margin:0 4px 0 0;
}

.minicolors-with-opacity .minicolors-swatches .minicolors-swatch {
	margin-right:7px;
}

.minicolors-swatch.selected {
	border-color:#000;
}

/* Inline controls */
.minicolors-inline {
    display: inline-block;
}

.minicolors-inline .minicolors-input {
    display: none !important;
}

.minicolors-inline .minicolors-panel {
    position: relative;
    top: auto;
    left: auto;
    box-shadow: none;
    z-index: auto;
    display: inline-block;
}

/* Default theme */
.minicolors-theme-default .minicolors-swatch {
    top: 5px;
    left: 5px;
    width: 18px;
    height: 18px;
}
.minicolors-theme-default .minicolors-swatches .minicolors-swatch {
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
}
.minicolors-theme-default .minicolors-swatches {
	height: 20px;
}
.minicolors-theme-default.minicolors-position-right .minicolors-swatch {
    left: auto;
    right: 5px;
}
.minicolors-theme-default.minicolors {
    width: auto;
    display: inline-block;
}
.minicolors-theme-default .minicolors-input {
    height: 20px;
    width: auto;
    display: inline-block;
    padding-left: 26px;
}
.minicolors-theme-default.minicolors-position-right .minicolors-input {
    padding-right: 26px;
    padding-left: inherit;
}

/* Bootstrap theme */
.minicolors-theme-bootstrap .minicolors-swatch {
    z-index: 2;
    top: 3px;
    left: 3px;
    width: 28px;
    height: 28px;
    border-radius: 3px;
}
.minicolors-theme-bootstrap .minicolors-swatches .minicolors-swatch {
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
}
.minicolors-theme-bootstrap .minicolors-swatch-color {
    border-radius: inherit;
}
.minicolors-theme-bootstrap.minicolors-position-right .minicolors-swatch {
    left: auto;
    right: 3px;
}
.minicolors-theme-bootstrap .minicolors-input {
    float: none;
    padding-left: 44px;
}
.minicolors-theme-bootstrap.minicolors-position-right .minicolors-input {
    padding-right: 44px;
    padding-left: 12px;
}
.minicolors-theme-bootstrap .minicolors-input.input-lg + .minicolors-swatch {
    top: 4px;
    left: 4px;
    width: 37px;
    height: 37px;
    border-radius: 5px;
}
.minicolors-theme-bootstrap .minicolors-input.input-sm + .minicolors-swatch {
    width: 24px;
    height: 24px;
}
.input-group .minicolors-theme-bootstrap:not(:first-child) .minicolors-input {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

/* Semantic Ui theme */
.minicolors-theme-semanticui .minicolors-swatch {
    top: 0;
    left: 0;
    padding: 18px;
}
.minicolors-theme-semanticui input {
    text-indent: 30px;
}
/**
  *
  *
  *mlvedastyle.css
  *
  *
  *
  */
  /* For Admin Side Only */

.canvasContainer{width:100%; font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif; font-size:13px; }
.switchWidth{ width:400px; background:#f6f6f6}
.cellWidth{ width:200px;}
.titleText{ background:#ebebeb; font-size:14px; font-weight:bold; border-bottom:1px solid #ccc;}
.multipleSelect{width:120px; border:1px solid #ebebeb; padding:3px; font-size:14px; font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;}
.singleSelect{width:200px; border:1px solid #ebebeb; padding:3px; font-size:14px; font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;}
.formRaw{ background:#f2f5f9;}
.TextBox{ width:70px; border:1px solid #ebebeb; padding:3px; font-size:14px; font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif; }
.TextBoxLarge{ width:150px; border:1px solid #ebebeb; padding:3px; font-size:14px; font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif; }
.tmpClass{ margin:30px;}
.Button{ background:#f6f6f6; border:1px solid #000; font-size:13px; padding:5px; cursor:pointer; margin-right:10px;}
.ButtonRow td{border-top:2px solid #000; padding:10px 0}

@media only screen and (max-width: 768px) {
 	.canvasContainer{ font-size:12px !important;}
	.switchWidth{ width:200px;}
	.tmpClass{ margin:10px;}
	.cellWidth{ width:150px;}
}

@media only screen and (max-width: 500px) {
 	.canvasContainer{ font-size:11px !important;}
	.switchWidth{ width:160px;}
	.tmpClass{ margin:5px;}
	.cellWidth{ width:100px;}
}


.nice-select .flags{width:20px; height:15px; display:block; width:20px; height:15px; display:block; float:left; margin:7px 5px 0 0;}
.flags-usa{ background:url(../images/usa.png) left center no-repeat;  }
.flags-aus{ background:url(../images/aus.png) left center no-repeat; }
.flags-uk{ background:url(../images/uk.png) left center no-repeat; }



/* Drop Down Css Start */
.currDropDown{ position:relative; font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif; height:30px; line-height:30px; width:120px}
.currDropDown span.selectText{padding:5px 30px 5px 5px; border:1px solid #ccc; cursor:pointer; width:100%; height:30px; line-height:20px; float:left; box-sizing:border-box}
.currDropDown ul{ position:absolute; left:0; top:30px; border:1px solid #ccc; margin:0; padding:0; list-style-type:none; display:none}
.currDropDown ul li{ float:left; width:100%; margin:0; padding:0 5px; border-bottom: 1px dashed #ccc; box-sizing:border-box}
.currDropDown ul li:last-child{ border-bottom:0 none}
.currDropDown ul li span.usa{ background:url(../images/us_flag.gif) left center no-repeat; width:20px; height:30px; display:block; float:left; margin:0 5px 0 0}
.currDropDown ul li a{ color:#000; text-decoration:none; display:block}

.triangle-down { width:0; height:0; border-left:5px solid transparent; border-right:5px solid transparent; border-top:10px solid #8c8c8c; position:absolute; right:10px; top:12px;}

  /*
  *
  *
  *
  *nice-select.css
  *
  *
  */
  select.switch {display: none;}

.nice-select {
  -webkit-tap-highlight-color: transparent;
  background-color: transparent !important;
  border-radius: 0px;
/*  comment this line border: solid 1px; */
  border-color: inherit !important;
  box-sizing: border-box;
  clear: both;
  cursor: pointer;
  display: block;
  /* float: left; */
  font-family: inherit;
  font-size: inherit;
  font-weight: normal;
  height: 30px;
  line-height: 30px;
  outline: none;
  padding-left: 5px;
  padding-right: 20px;
  position: relative;
  text-align: left !important;
  transition: all 0.2s ease-in-out;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  white-space: nowrap;
  width: 90px; }
.nice-select:after {
/*   border-bottom: 2px solid;
  border-right: 2px solid; */
/*  comment this line border-color: inherit !important; */
/*   content: '';
  display: block;
  height: 5px;
  margin-top: -4px;
  pointer-events: none;
  position: absolute;
  right: 12px;
  top: 50%;
  -webkit-transform-origin: 66% 66%;
          transform-origin: 66% 66%;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  transition: all 0.15s ease-in-out;
  width: 5px; */}
.nice-select.open:after {
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg); }
.nice-select.open .list {
  opacity: 1;
  pointer-events: auto;
  -webkit-transform: scale(1) translateY(0);
          transform: scale(1) translateY(0); }
.nice-select.switch {
  font-size: 12px;
  height: 30px;
  width:90px;
  line-height: 30px; 
  display:inline-block;
  }
.nice-select.switch:after {
  height: 4px;
  width: 4px; }
.nice-select.switch .option {
  line-height: 30px;
  min-height: 30px; }
.nice-select .list {
/*   color: #000 !important; */
  background-color:#fff;
  z-index: 999 !important;
  width:92px !important;
  border-radius: 0px;
  border:1px solid #e8e8e8;
  box-sizing: border-box;
  margin-top:0px;
  margin-left:0px !important;
  margin-bottom:0px !important;
  opacity: 0;
  overflow: hidden;
  padding: 0;
  pointer-events: none;
  position: absolute;
  top: 100%;
  left: -1px;
  -webkit-transform-origin: 50% 0;
          transform-origin: 50% 0;
  -webkit-transform: scale(0.75) translateY(-21px);
          transform: scale(0.75) translateY(-21px);
  transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
  z-index: 9; }
.nice-select .option:hover {
  background-color: #f8f8f8; }
.nice-select .option {
  cursor: pointer;
   border-bottom: solid 1px #e8e8e8;
  font-weight: 400;
  line-height: 30px !important;
  list-style: none;
  margin-left: 0px !important;
  margin-right: 0px !important;
  height: 30px !important;
  outline: none;
/*   padding-left: 5px!important; */
  padding-left: 5px;
  padding-right: 5px;
  text-align: left;
  transition: all 0.2s; 
  float: left !important;
  border-left: 0px !important;
    border-top: 0px !important;
    border-right: 0px !important;
  width: 90px !important;
  
}
  .nice-select .option:last-child{ border-bottom:0 none}
.nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
  }
.nice-select .option.selected {
  font-weight: bold; }

/*# sourceMappingURL=nice-select.css.map */

.nice-select.switch .flags{ position:relative; top:50%; margin-top:-7px}

.mldarrow:hover{
	cursor: pointer !important; 
  }

</style>



<style>
  .nice-select .option {
    margin-bottom: 0px;
text-align:center !important;

  }
/* start flag code */

     .nice-select .flags 
      {
        display:none !important;
      }
      .nice-select .option
      {
        text-align:center !important;
        padding-left: 0px;
      }
      span.current 
      {
        display:block !important;
        text-align:center !important;
      }
      .pick_currency 
      {
        padding-right:0px !important;
      }


/* End flag code */
  
  
    /** arroe code **/
.mldarrow{
     position: relative;
    right: 10px;
  }
  .nice-select{
text-align:center !important;
    padding-right:0px !important;
    display:inline-block !important;
    width: 80px;
    
    padding-right:0px !important;
    
  }
   /** end arroe code **/ 
  
      /** position = inline  **/
  
  /** end position = inline  **/
/* start border code */

      .pick_currency 
      {
        border: 0 !important;
        border-color: unset !important;
      }
      .nice-select .list 
      {
        border: 0 !important;
        border-color: unset !important;
      }
      .nice-select .option 
      {
        border: 0 !important;
        border-color: unset !important;
      }

/* end border code */

/* switcher color,Font-size code */

      .pick_currency 
      {
        color: inherit !important;
        background-color: inherit !important;
      }
      .pick_currency:hover
      {
        color: inherit !important;
        background-color: inherit !important;
      }
      .nice-select
      {
        font-size:  !important;
      }
      .nice-select .option 
      {
         color: inherit !important;
         background-color: inherit !important;
      }
      .nice-select .option:hover 
      {
        color: inherit !important;
         background-color: inherit !important;
      }
        .nice-select .list 
      {
         background-color: inherit !important;
      } 
  
/* End switcher color code */
  
  
/* Cart message code */
  .mlvedaCartNote
  {
    max-width: 900px;
    margin: 0 auto;
    margin-top: 25px;
    padding: 40px !important;
    text-align: justify;
  }

  .mlvedaCartNote
  {
    color: inherit !important;
    background-color: inherit !important;
/*     display:block !important; */
  }
 
/* End Cart message code */
  
  /*when backgroundcolor is inherit code */

   .nice-select .list 
      {
         background-color: #fff !important;
/*         color:#000 !important; */
      } 
  
  
/*   
  
   .nice-select .list:hover, .pick_currency:hover 
      {
         background-color: #fff !important;
       
      } 
  
   */
/*End when backgroundcolor is inherit code */
</style>



 <script src='http://cdn.shopify.com/s/files/1/0167/7895/2758/t/5/assets/ndnapps-jslibrary.js?4962' defer='defer'></script>
<script type="text/javascript">
var SOCIAL_LOGIN_CUSTOMER_LOGGED_IN = false;
</script>
</body>

<!-- Mirrored from hijanahhaul.com/collections/new-in by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2019 00:32:44 GMT -->
</html>
