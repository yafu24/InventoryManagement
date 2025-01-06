
<html style="height: auto; min-height: 100%;" id="main_html">

<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Alpha POSN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('bootstrap1.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css.map')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css.map')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{ asset('css/alpha.css')}}">

        <script type="text/javascript" src="{{ asset('js/jquery-2.1.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-3.1.0.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/vue.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.scannerdetection.js')}}"></script>

    <script type="text/javascript">


        var checker=false;

        var check= new Array();

        $(document).scannerDetection({timeBeforeScanTest: 200, avgTimeByChar: 40,preventDefault: false, endChar: [13],
            onComplete: function(barcode, qty){ validScan = true; $('#scannerInput').val (barcode);
                console.log(barcode);

                alert(barcode);

                $.ajax({

                    type:'POST',

                    url:"{{ route('new_sale_ajax')}}",

                    data:{item_barcode:barcode},

                    success:function(data){

                        alert(data.success);

                        //alert(data.success+" "+data.unit_price+" "+data.item_id+" "+ data.item_name);

                        //addBarcode(data.item_id,barcode);

                        //insRow( data.item_name,data.unit_price,data.item_id);
                    }
                });


            } ,
            onError: function(string, qty) { $('#userInput').val ($('#userInput').val() + string); }
        });


    </script>


  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
  <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
</style>
</head>

<body class="skin-green sidebar-mini" style="height: auto; min-height: 100%;" id="app">
<div class="wrapper" style="height: auto; min-height: 100%;">

  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>-PO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="float:left;"><b>Alpha POS</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <ul class="dropdown-menu">
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  
</div>

<div class="container" style=" width:95%; padding: 10px; margin-left:20px; margin-right:-10px;">
<div class="row">

<div class="col-sm-8 col-md-7 col-lg-7" style="background-color:#ddd; padding-top:20px; height:800px; overflow: scroll;">

<script>

function searchItem()
{


$doc_item = document.getElementById('select_category');

if($doc_item.value!="")
{
$(".item").hide();
$(".cat_"+$doc_item.value).show();
}else{
  $(".item").show();
}


}
</script>
<div class="row">

<div class="top-search col-sm-5 col-md-5 col-lg-5" style="float:left;" > 
<div class="input-group input-group-sm">
 <select class="form-control" id="select_category" class="categories" onClick="searchItem();">

 <option value=""> Select Category</option>

@foreach($categories as $category)    

<option value="{{$category->id}}">{{$category->category_name}} </option>

@endforeach
 </select>

              <br/>
 </div>
 </div>


<div class="top-search col-sm-5 col-md-5 col-lg-5" style="float:right;" > 
<div class="input-group input-group-sm">
                <input type="text" placeholder="Search" class="form-control" onclick="searchItem();">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-fw fa-search"></i></button>
                    </span>
                    <br/>
              </div>
              <br/>
 </div>

 <br/>

</div>

<div class="items" style="width:100%; padding-left: -3px; margin-right:10px; padding-right: -30px;">
          @foreach($products as $product )    
   <?php       
   $product->item_name;

   if($product->image!=null)
   {
     // there is image
    $variables =asset('images/products/')."/".$product->image;
    ?>

    <div id="cat_{{$product->category}}" class="item thumbnail cat_{{$product->category}}" style="width:170px; height:170px; float:left; border:1px green; font-family:Cambria; margin-left:3px; font-size:12.5pt;border:0.1px solid green;"> 
    <div class="item-image"><img src="{{$variables }}" id="{{$product->barcode}}" width=160 height=120 
    onclick= "

    addToListBarcode('Fuuuu', {{$product->id}}, '{{$product->barcode_main}}',
     '{{$product->barcode_main}}', '{{$product->barcode}}','{{$product->barcode_id}}',             
            @if($product->unit_price_variant)
            {{$product->unit_price_variant}}
            @else($product->unit_price)
              {{$product->unit_price}}
            @endif
            , {{$product->package_tracking}},0,'pos','not_identified_package',{{$product->unit_price_variant}});"
            onclick="calc_subtotal();"
            @click='check_qty_all(); UpdatePackages()' >
            <div class="item-footer" style="text-align:center;">{{$product->item_name}} {{$product->size}} {{$product->color}}</div>
            <div class="item-footer" style="text-align:center;">

            @if($product->unit_price)
              {{$product->unit_price}}
            @endif
            @if($product->unit_price_variant)
            {{$product->unit_price_variant}} 
            @endif
                        Nkf</div>
    </div>
    </div>
    <?php
    }else{
?>
    <div id="cat_{{$product->category}}" class="item item_icon thumbnail cat_{{$product->category}}" name="{{$product->id}}" style="width:170px; height:170px; float:left; margin-left:3px; background-color:#bcf; font-family:Cambria; font-size:12.8pt;border:0.1px solid green;" 
          id="{{$product->barcode}}" width=120 height=130
            onclick= " 
            addToListBarcode('{{$product->item_name}} {{$product->size}} {{$product->color}}', {{$product->id}}, '{{$product->barcode_main}}', '{{$product->barcode_main}}', '{{$product->barcode}}',
            '{{$product->barcode_id}}',
            {{$product->unit_price}}
            {{--@if($product->variants)--}}
            {{--{{$product->unit_price_variant}} --}}
            {{--@else--}}
              {{--{{$product->unit_price}}--}}
            {{--@endif--}}
            , {{$product->package_tracking}},0,'pos','not_identified_package',{{$product->unit_price_variant}})
            getPackages({{$product->id}},{{$product->package_tracking}},{{$product->barcode_id}});"
            onclick="calc_subtotal();"
            @click='check_qty_all();UpdatePackages()' >
            <div style="margin-top:40%; text-align:center;">{{$product->item_name}} {{$product->size}} {{$product->color}}</div>
            <div style="text-align:center;">
            @if($product->variants)
            {{$product->unit_price_variant}}
            @else
              {{$product->unit_price}}
            @endif
            Nkf</div>
    </div>
<?php
}
    ?>

        @endforeach
      </div>            
</div>

<script>

var checker=false;

var check= new Array();

    $(document).scannerDetection({timeBeforeScanTest: 200, avgTimeByChar: 40,preventDefault: false, endChar: [13], 
    onComplete: function(barcode, qty){ validScan = true; $('#scannerInput').val (barcode);
    console.log(barcode);

    $.ajax({

        type:'GET',

        url:"{{ route('new_sale_ajaxs')}}",

        data:{item_barcode:barcode},

        success:function(data)
        {
        console.log(data.success+" "+data.unit_price+" "+data.item_id+" "+ data.item_name+ " "+data.package_name);

        if(data.package!=null || data.package>0){
          addToListBarcode(data.item_name, data.item_id,barcode,data.barcode_main,data.barcode_variant,data.variant,data.unit_price,0,data.package,'barcode_scanned',data.package_name,data.unit_price_variant);
        }else{
          addToListBarcode(data.item_name, data.item_id,barcode,data.barcode_main,data.barcode_variant,data.variant,data.unit_price,1,data.package,'barcode_scanned',data.package_name,data.unit_price_variant);
        }
        
        //addToListBarcode(item_name_passed, item_id_passed,barcode_passed,barcode_main_passed, barcode_variant_passed,barcode_id_passed,unit_price_passed,package_tracking_passed,unit_price_variant_passed)

        console.log(data.item_name+'*'+data.item_id,barcode+'*'+data.barcode_main+'*'+data.barcode_variant+'*'+data.variant+'*'+data.unit_price+'*'+data.unit_price_variant)
        
        //this.calc_subtotal();
        this.app.check_qty_all();
        this.calculateTotalAmount();
        }
        });
     } , 
    onError: function(string, qty) { $('#userInput').val ($('#userInput').val() + string); } 
});

</script> 

<div class="col-md-5">

<div class="row">

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <div class="modal-content animate" action="#">

    <div class="container" style='width:100%;'>
    <table class='table table-striped' id='POITable'>
    <tr><td>item: <input type="text" class="form-control" v-model="sale.item_name" name="item_name" id="item_name" disabled></td>  
    <input type=hidden id="item_id" v-model="sale.item">
    </td> </tr>
    <tr><td>Qty:<input type="text" name="item_name" class="form-control"></td>
    <td>Price:
    <input type="text" v-model="sale.unit_price" class="form-control" name="unit_price" id="unit_price" disabled></td>
    </table>
    <div>
      <button @click="addNote();showItems();">Submit</button>       
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
    </div>
  </div>
</div>



<form class="form-horizontal" action="{{route('new_sale')}}" method="post">
@csrf

<br/>
    <div class="col-md-4 col-md-4 col-lg-4">

    <label for="name">Customer</label>

    <select class="form-control" name="customer" id="customer">   
                                                @foreach ($customers as $customer)
                                                    <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                                @endforeach
    </select>
</div>

<div class="col-md-3 col-md-3 col-lg-3">
<label for="name">Payment</label>
<select class="form-control" id="payment" name="payment">
     <option value="Cash">Cash</option>
     <option value="Credit">Credit</option>                                          
</select>
</div>
<div class="col-md-5 col-md-5 col-lg-">
<label for="name">Date</label>
<input type="date" id="date" name="date" class="form-control" >
<br/><br/>
</div>
</div>

<div id="apper">
<?php 
echo "
  <table class='table' id='POITable'>

  <tr>
  <th>Item</th>
  <th>Qty</th>
  <th>Price</th>
  <th>Discount</th>
  <th>Subtotal</th>
  <th>Package</th>
  </tr>

  <tr id='table_row{{index}}' v-for='(index, i) in sales'>
  <td>{{ i.item_name}}</td>
  <td><input type='text' id='qty_id{{index}}' class='form-control' value='{{i.qty}}' onchange='getChangedResults({{index}}); setTimeout(calculateTotalAmount, 100); ' @leave = 'check_qty(index)' name='hi[]' @click='check_qty(index)'/> </td>
  <td><input type='text' name='unit_price' value='{{i.unit_price}}' disabled class='form-control' id='unit_price{{index}}' onchange='getChangedResults({{index}});setTimeout(calculateTotalAmount, 100);' @click='check_qty(index)'></td>
  <td><input type='text' name='discount' id='discount{{index}}' value='{{i.discount}}' class='form-control' onchange='getChangedDiscount({{index}});getChangedResults({{index}});setTimeout(calculateTotalAmount, 100);' @click='check_qty(index)'></td>
  <td><input type='text' name='subtotal' id='subtotal{{index}}' disabled class='form-control' onchange='getChangedResults({{index}});setTimeout(calculateTotalAmount, 100);'; @click='check_qty(index)'></td>
  <td>
  <div v-if= i.package_tracking > 
  <div name='package_{{i.item}}_{{i.barcode_id}}' class='package_{{index}}' id='package_{{i.item}}_{{i.barcode_id}}'>
  </div>
  </div>
  </td>
  <td><button class='btn btn-danger' @click='removeNote(index);'><i class='fa fa-fw fa-trash'></i></button></td>
  </tr>
  </table>"; 
?>
</div>


</div>

<div style="background-color:#ccc; display:block; width:40%; float:right;">

<span  style="font-size:18px; float:right; background-color:#ccc; margin-right:160px;" id="total">0.00</u></span>

<span style="font-size:18px; background-color:#ccc; float:right;">Total: &nbsp;&nbsp;&nbsp;</span>

<br/>

</div>

</form>

<div style='float:right'>
<br/>

<button class="btn btn-success submit_test" id="submit_test" >

<i class="fa fa-fw fa-money"></i>

Check Out</button>
</div>

</div>

<div id='success-message' style='color:green'>
</div>
<div id="test102">
</div>
</div>
</div>
</div>
</div>

</body>


<script type="text/javascript">

// update the view
// For loop

var all_sales;
var item_sales;

function calc_subtotal()
{
  index_id = 1;
  var variable_qty = document.getElementById(index_id).value;
  var variable_unit_price = document.getElementById('unit_price'+index).value;
  var variable_discount = document.getElementById('discount'+index).value;
  var subtotal = (variable_qty*variable_unit_price)-variable_discount;
  document.getElementById('subtotal'+index).value=subtotal;
}

function calculateTotalAmount()
{
  total = 0.00;
  for(var i=0;i<this.app.sales.length;i++)
  {
    subtotal=this.app.sales[i].qty*this.app.sales[i].unit_price-this.app.sales[i].discount;
    total += Number(subtotal);
  }
  document.getElementById('total').innerHTML = total.toString();
  
}


function calculateTotalAmount_test(index)
{
  total = 0.00;
  for(var i=0;i<=this.app.sales.length;i++)
  {
    subtotal=this.app.sales[i].qty*this.app.sales[i].unit_price-this.app.sales[i].discount;
    total += Number(subtotal);
  }
  subtotal=this.app.sales[index].qty*this.app.sales[index].unit_price-this.app.sales[index].discount;
  total -= Number(subtotal);
  document.getElementById('total').innerHTML = total.toString();
}

//addToListBarcode(data.item_name, data.item_id,barcode,data.barcode_main,data.barcode_variant,data.variant,data.unit_price,data.package,'barcode_scanned',data.package_name,data.unit_price_variant);

function addToListBarcode(item_name_passed, item_id_passed,barcode_passed,barcode_main_passed, barcode_variant_passed,barcode_id_passed,unit_price_passed,package_tracking_passed,package_id_passed,barcode_type,package_name_passed,unit_price_variant_passed)
{
  console.log('edit package id:'+package_id_passed);
  console.log('edit barcode type:'+barcode_type);
  console.log('edit package type:'+package_name_passed);
flag = false;

item_index = 0;

  if(!all_sales){
    console.log('no sales')
  }else{
    for (var i = 0; i < this.app.sales.length; i++) {
      if(this.app.sales[i].barcode==barcode_passed && this.app.sales[i].item==item_id_passed && this.app.sales[i].item==item_id_passed && this.app.sales[i].barcode_id == barcode_id_passed){
        //console.log('hekljlkfdsj')
        flag = true;
        item_index = i;
      }
   } 
  }

if (flag == false) {  
  //console.log('inside false');
  this.app.addToList(item_name_passed, item_id_passed,barcode_passed,barcode_main_passed, barcode_variant_passed,barcode_id_passed,unit_price_passed,unit_price_variant_passed,package_tracking_passed,barcode_type,package_name_passed);
  addItemToList(item_name_passed,item_id_passed,barcode_passed,barcode_main_passed, barcode_variant_passed,barcode_id_passed,unit_price_passed,unit_price_variant_passed,package_tracking_passed,barcode_type,package_name_passed);
  setTimeout(this.app.check_qty(1), 100);
  this.calculateTotalAmount();
  //check_qty(1);
  
var subtotal = (1*unit_price_passed)-0.00;

document.getElementById('subtotal1').value=subtotal;

}

  if (flag == true) 
  {  
      this.app.increase_qty(item_index);
      getChangedResults(item_index);
      var x=document.getElementById('POITable');
      var first_row = x.rows[0];
      first_row.hidden=true;
  }
}


function addItemToList(item_name_passed,item_id_passed,barcode_passed,barcode_main_passed, barcode_variant_passed,barcode_id_passed,unit_price_passed,unit_price_variant_passed,package_tracking_passed,barcode_type,package_name_passed)
{
  console.log("add to list type: "+barcode_type)
  console.log("add to list package name: "+package_name_passed)
  index_id = this.app.sales.length-1;
  index=index_id;

  var x=document.getElementById('table_row0');
  x.hidden=true;

  if(unit_price_variant_passed==null){
    document.getElementById('unit_price'+index_id).value=unit_price_variant_passed;
  }else{
    document.getElementById('unit_price'+index_id).value=unit_price_passed;
  }
    document.getElementById('qty_id'+index_id).value=1;
    document.getElementById('discount'+index_id).value=0.00;
    document.getElementById('subtotal'+index_id).value=unit_price_passed;

//    console.log("wonderful to see u 01001");

if(barcode_type="barcode_scanned"){
  console.log("wonderful to see u");
} 

 
}

function getChangedResults(index)
{
  this.app.check_qty(index);
  this.calculateTotalAmount();
}

function getChangedDiscount(index)
{
this.app.update_discount(index);
}


var app = new Vue({
	el: '#app',
	data: {
    sale: {
      item_name:'',
      item:'',
      qty:'',
      unit_price:'',
      barcode:'',
      barcode_id:'',
      discount:'',
      package_tracking:'',
      package:''
	},
		sales:[
		{
    item_name:'',
    item:'',
    qty:'',
    unit_price:'',
    barcode:'',
    barcode_id:'',
    discount:'',
    package_tracking:'',
    package:''
		}
		]
},

methods:{

removeNote(index){
this.sales.splice(index,1);
all_sales = this.sales;
this.calculateTotalAmount_test(index-1);
setTimeout(calculateTotalAmount, 100);
//this.check_qty_all();
//this.calculateTotalAmount(index);
},

calculateTotalAmount(index)
{
total = 0.00;
for(var i=0;i<=this.sales.length;i++){
subtotal=this.sales[i].qty*this.sales[i].unit_price-this.sales[i].discount;
total += Number(subtotal);
}
subtotal=this.sales[index].qty*this.sales[index].unit_price-this.sales[index].discount;
total -= Number(subtotal);
document.getElementById('total').innerHTML = total.toString();
},

calculateTotalAmount_test(index)
{
total = 0.00;
for(var i=0;i<this.sales.length;i++){
subtotal=this.sales[i].qty*this.sales[i].unit_price-this.sales[i].discount;
total += Number(subtotal);
}
subtotal=this.sales[index].qty*this.sales[index].unit_price-this.sales[index].discount;
total -= Number(subtotal);
document.getElementById('total').innerHTML = total.toString();
},

UpdateNote(index){
this.sales[index].qty = 3
},


UpdatePackages(){
  count = this.sales.length-1;
  setTimeout(getPackagestimed(this.sales[count].item,this.sales[count].package_tracking,this.sales[count].barcode_id,count), 100);
},

update_package(index){
  if(this.sales[index].barcode_id!=null){
    this.sales[index].package = document.getElementById('package_'+this.sales[index].item+'_'+this.sales[index].barcode_id).value;
    console.log(this.sales[index].package);
    console.log('shklfdjlsf:'+this.sales[index].item);
  }else{
    this.sales[index].package = document.getElementById('package_'+this.sales[index].item+'_').value;
    console.log(this.sales[index].package);
    console.log('shklfdjlsf:'+this.sales[index].item);
  }
},

check_qty(index)
{
//alert(index)
var index_id = 'qty_id'+index;
var variable_qty = document.getElementById(index_id).value;
var variable_unit_price = document.getElementById('unit_price'+index).value;
var variable_discount = document.getElementById('discount'+index).value;
var subtotal = (variable_qty*variable_unit_price)-variable_discount;

document.getElementById('subtotal'+index).value=subtotal;

this.sales[index].qty = document.getElementById(index_id).value;
this.sales[index].unit_price = document.getElementById('unit_price'+index).value;

setTimeout(calculateTotalAmount, 100);

},

check_qty_all()
{
  for(var index=0; index< this.sales.length; index++)
{

var index_id = 'qty_id'+index;
//var variable_qty = document.getElementById(index_id).value;
var variable_qty = document.getElementById(index_id).value;
var variable_unit_price = document.getElementById('unit_price'+index).value;
var variable_discount = document.getElementById('discount'+index).value;
var subtotal = (variable_qty*variable_unit_price)-variable_discount;

document.getElementById('subtotal'+index).value=subtotal;

this.sales[index].qty = document.getElementById(index_id).value;
this.sales[index].unit_price = document.getElementById('unit_price'+index).value;
}
calculateTotalAmount();
this.UpdatePackages()
}
,

check_qty_all_test(index)
{
  for(var index=0; index< this.sales.length; index++)
{
var index_id = 'qty_id'+index;
//var variable_qty = document.getElementById(index_id).value;
var variable_qty = document.getElementById(index_id).value;
var variable_unit_price = document.getElementById('unit_price'+index).value;
var variable_discount = document.getElementById('discount'+index).value;
var subtotal = (variable_qty*variable_unit_price)-variable_discount;

document.getElementById('subtotal'+index).value=subtotal;

this.sales[index].qty = document.getElementById(index_id).value;
this.sales[index].unit_price = document.getElementById('unit_price'+index).value;
}
//calculateTotalAmount();
},

increase_qty(index)
{
  var index_id = 'qty_id'+index;
  this.sales[index].qty =Number(this.sales[index].qty)+1;
  document.getElementById('qty_id'+index).value = this.sales[index].qty;
},

update_discount(index)
{
  var index_id = 'qty_id'+index;
  this.sales[index].discount =document.getElementById('discount'+index).value;
},

addNote(){
	let {item_name, item, qty,unit_price,barcode,barcode_id,discount,package_tracking,package} = this.sale
	this.sales.push({
  item_name,
  item,
  qty,
  unit_price,
  barcode,
  barcode_id,
  discount,
  package_tracking,
  package
  })
  all_sales = this.sales;
  },
  
addToList(item_name_passed, item_id_passed,barcode_passed,barcode_main_passed, barcode_variant_passed,barcode_id_passed,unit_price_passed,unit_price_variant_passed,package_tracking_passed,barcode_type,package_name_passed)
{
  console.log(barcode_type);
  console.log("am i the bitch");
    this.sale.item_name = item_name_passed;
    this.sale.item = item_id_passed;
    this.sale.qty = 1;

  if(barcode_id_passed==null){
    this.sale.unit_price =unit_price_variant_passed;
  }else{
    this.sale.unit_price =unit_price_passed;
  }
    this.sale.barcode = barcode_passed;
    this.sale.barcode_id = barcode_id_passed;
    this.sale.discount = 0.00;
    this.sale.package_tracking = package_tracking_passed;

  let {item_name, item, qty,unit_price,barcode,barcode_id,discount,package_tracking,package} = this.sale
  
  this.sales.push({
  item_name,
  item,
  qty,
  unit_price,
  barcode,
  barcode_id,
  discount,
  package_tracking,
  package
  })
  all_sales = this.sales;
  },
}
});


function setSuccessMessage(){
  document.getElementById('success-message').innerHTML='Data Saved Successfully';
}

function clearSuccessMessage()
{
  document.getElementById('success-message').innerHTML='';
}

$.ajaxSetup({

headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}

});



$(".submit_test").click(function(e){
  date1=document.getElementById('date').value;
  
  if (date1==""){
    // alert('in')
    // return(false);
    
  }
  else{
   

var customer = document.getElementById('customer');
customer_id = customer.value;

// Get payment
var payment = document.getElementById('payment');
payment_id = payment.value;

// Get Date
var date_sale_id = document.getElementById('date');
date_sale = date_sale_id.value;

var items_list= new Array();
var qty_list= new Array();
var items_list= new Array();
var qty_list= new Array();
var unit_price_list= new Array();
var barcode_main_list= new Array();
var barcode_id_list= new Array();
var discount_list= new Array();
var package_list= new Array();


for(var i=0; i< all_sales.length; i++)
{
  items_list[i]=all_sales[i].item;
  qty_list[i]=all_sales[i].qty;
  unit_price_list[i]=all_sales[i].unit_price;
  barcode_main_list[i]=all_sales[i].barcode;
  barcode_id_list[i]=all_sales[i].barcode_id;
  discount_list[i]=all_sales[i].discount;
  package_list[i]=all_sales[i].package;
}

$.ajax({

type:'GET',

url:"{{ route('create_pos_sale_post') }}",

data:{customer_id:customer_id,date_sale:date_sale,items_list:items_list, qty_list:qty_list,unit_price_list:unit_price_list,barcode_main_list:barcode_main_list,
barcode_id_list:barcode_id_list,discount_list:discount_list,payment_id:payment_id,package_list:package_list},

success:function(data){

  console.log(data.success);
  console.log(data.package_list);
  console.log(data.qty_store);
  clearData();
  setTimeout(setSuccessMessage, 100);
  setTimeout(clearSuccessMessage, 1500);
}
});
}})

function clearData(){
  all_sales =[];
  this.app.sales=[
		{
    item_name:'',
    item:'',
    qty:'',
    unit_price:'',
    barcode:'',
    barcode_id:'',
    discount:'',
    package_tracking:'',
    package:''
		}
		];
  calculateTotalAmount();
}


function update_item_package(index){

console.log("lskdjklsdjflsdfj"+index);


if(this.app.sales[index].barcode_id!=null)
{
  console.log('package_'+this.app.sales[index].item+'_'+this.app.sales[index].barcode_id);
  console.log(document.getElementById(index).value);
  this.app.sales[index].package = document.getElementById(index).value;
  console.log(this.app.sales[index].package);
}else{
  //console.log('package_'+item_id+'_'+'wonder');
  //document.getElementById('package_'+item_id+'_').value="hey";
}

//console.log(document.getElementById('package_'+item_id+'_'+variant_id).value);


}

function getPackages(item_id,package_tracking,variant_id){

 // alert('be4track')
 
//  setTimeout(getPackagestimed(item_id,package_tracking,variant_id,index), 100);
 
}

function getPackagestimed(item_id,package_tracking,variant_id,index)
{
console.log(item_id);
console.log(package_tracking);
console.log(variant_id);
console.log('index: '+index);

// Get packages list from item and variant id

//alert('be4track')

if(package_tracking==1){

  //alert('track')

if(variant_id!=null)
{
  //alert('sjdkldsfsdsdfsfsd')

  console.log('package_'+item_id+'_'+variant_id);
  document.getElementById('package_'+item_id+'_'+variant_id).value="helow";
}else{

  //alert('sjdkldsf')

  console.log('package_'+item_id+'_'+'wonder');
  document.getElementById('package_'+item_id+'_').value="hey";

}
}
//document.getElementById('package_'+item_id+'_'+variant_id).value="<option>";

$.ajax({

type:'GET',

url:"{{ route('find_item_packages') }}",

data:{item_id:item_id,variant_id:variant_id,package_tracking:package_tracking,index:index},

success:function(data)
{  
  console.log(data.success);
  console.log(data.select_options);
  console.log(data.variant_id);

  console.log('Package id '+'package_'+item_id+'_'+variant_id);
  console.log('count '+data.select_count);

  if(data.select_count>0)
  {
  document.getElementById('package_'+item_id+'_'+variant_id).innerHTML=data.select_options;
  }
}
});
}

</script>


<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('bower_components/chart.js/Chart.js')}}"></script>

<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>

<div class="jvectormap-label"></div></body></html>