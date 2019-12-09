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
      


      <span>About Us</span>

      
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
            <div class="create-custom-page">
  <div class="container">
    <div><meta charset="utf-8"></div>
<p> </p>
<h1 style="text-align: center; font-size: 70px; margin-bottom: 50px">PPSK Haul</h1>
<div style="text-align: center;">
<meta charset="utf-8">
<p>The idea of <strong>PPSK HAUL</strong> was founded i<span>n July 2019 </span>by the lovely married couple Aisyah Hijanah and Alif Teega. Primarily is based in Kuala Lumpur, Malaysia. The name ppskhaul originates from the name of our own founders an co founder which we are from Perak, Perlis, Sabah and Kelantan.</p>
<p>-</p>
<p><strong>PPSK HAUL </strong>anticipates to contribute as one of the shariah compliance fashion brands with suitable, acceptable and exclusive designs. We expect to meet the demand of muslimah fashion worldwide in line with its theme 'Syarie, modesty, beauty'. We provides contemporary modest clothing while keeping up with the rapidity of current style. As image is a reflection of Deen, we aim to contribute as a dakwah Medium through fashion industry.</p>
<p><b>-</b></p>
<p><b>We </b>believe that 0ur quality control system will guarantee that immaculate clothings that we have created, We assure that our products are tailored exclusively from high premium quality fabrics and sewn with great care and high-end tailoring. <strong>We </strong>﻿provide exclusive designs of the highest standards at affordable price ranges. </p>
</div>
<div class="is-divider divider clearfix" style="text-align: left;">
<p> </p>
</div>
  </div>
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

var mlvedaCallUrl = "//www.mlveda.com/ShopifyApps/ShopifyMultiPricing/getLocation?shop=ppsk-haul.myshopify.com&rnd=" + Math.floor((Math.random() * 10000000000) + 1);
      
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
<?php include '../footer.php' ?>