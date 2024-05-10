<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['403']['GET'] = 'PageController/accessdenied';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//FORM LOADER FOR REGISTER, LOG IN AND SELLER 
$route['login']['GET'] = 'FormController/login';
$route['register']['GET'] = 'FormController/register';
$route['Seller']['GET'] = 'FormController/Seller';


$route['register']['POST'] = 'Auth/RegisterController/register'; //Register form function
$route['login']['POST'] = 'Auth/LoginController/login'; //login form function
$route['logout']['GET'] = 'Auth/LogoutController/logout';

$route['userpage']['GET'] = 'PageController/userpage'; //to load user oage
$route['croptype']['GET'] = 'PageController/croptype';      //  Map sorting
$route['livestock']['GET'] = 'PageController/livestock';    //  Map sorting
$route['ferti']['GET'] = 'PageController/ferti';            //  Map sorting

$route['perform_search']['POST'] = 'PageController/perform_search';//search fnction
$route['search/perform_search/(:num)'] = 'PageController/perform_search/$1';
//pagination function


$route['userpage']['POST'] = 'UserController/index';
$route['myCart/(:any)'] = 'UserController/myAccount/$1'; // user monitor orders and edit profile info
$route['editMyAccount/(:any)'] = 'UserController/editMyAccount/$1';


//$route['myAccount/(:any)'] = 'UserController/displayUser/$1';
$route['updated/Info/(:any)']['POST'] = 'UserController/updatedInfo/$1'; 
$route['updated/Address/(:any)']['POST'] = 'UserController/Address/$1';

$route['order/delete/(:any)']['GET'] = 'UserController/delete/$1';
$route['cancel/(:any)']['GET'] = 'UserController/orderDelete/$1';


// userpage requirements
$route['productDetails/(:any)'] ['GET'] = 'Products/ProductController/productDetails/$1';//product details
$route['feedbacks/(:any)'] = 'Products/ProductController/productDetails/$1';

$route['checkout/(:any)'] ['GET']= 'Products/ProductController/checkout/$1'; //TO CHECKOUT ORDER HANDLER FORM
$route['ordered/(:any)'] ['POST']= 'Products/ProductController/ordered/$1';    //SAVING FORM
$route['orderedCod/(:any)'] ['POST'] = 'Products/ProductController/orderedCod/$1';
$route['cart/(:any)'] ['POST'] = 'Products/ProductController/cart/$1'; 

$route['checkoutCart/(:any)'] = 'Products/ProductController/checkoutCart/$1'; 
$route['orderedCart/(:any)'] = 'Products/ProductController/orderedCart/$1'; 


$route['adminpage']['GET'] = 'AdminController/index'; //to load admin page
$route['adminapproval'] = 'AdminController/approval';
$route['adminforecast'] = 'AdminController/forecast';
$route['admindatamapping']= 'AdminController/data';
$route['adminproduct'] = 'AdminController/product';
$route['adminclient'] = 'AdminController/client';
$route['adminUser'] = 'AdminController/adminUser';
$route['adminseller'] = 'AdminController/seller';
$route['adminfloat/(:any)'] = 'AdminController/floatapproval/$1';
$route['clientfloat/(:any)'] = 'AdminController/clientfloat/$1';
$route['sellerfloat/(:any)'] = 'AdminController/sellerfloat/$1';
$route['update_seller/(:any)'] = 'AdminController/update_seller/$1';
$route['delete/(:any)'] = 'AdminController/delete/$1';
$route['status/(:any)'] ['POST'] = 'AdminController/status/$1';
$route['adminmonth'] = 'AdminController/month';
$route['adminweek'] = 'AdminController/week';

$route['PrfDlvry/(:any)'] ['POST'] = 'AdminController/PrfDlvry/$1';


$route['sellerpage']['GET'] = 'SellerController/sellerdash';
//$route['sellerpage']['GET'] = 'PageController/sellerpage';  //to load seller page
//Seller form
//$route['Sellerindex']  = 'SellerController/sellerdash';
//for seller page
$route['sellerdash']  = 'SellerController/sellerdash';

$route['getProduct']['GET'] = 'SellerController/CropProducts';  //  Map sorting
$route['getLivestock']['GET'] = 'SellerController/Livestock';   //  Map sorting
$route['getFertilizer']['GET'] = 'SellerController/Fertilizer'; //  Map sorting

$route['myAccounts'] = 'SellerController/myAccounts';
$route['sellerAccounts/(:any)']['POST'] = 'SellerController/update_seller/$1'; 
$route['sellerAddress/(:any)'] = 'SellerController/sellerAddress/$1';

$route['sellerproduct']  = 'SellerController/sellerproduct';
$route['sellerdataUser']= 'SellerController/sellerdataUser'; //gamit ng userpage
$route['sellerdata']= 'SellerController/sellerdata';          //gamit ng sellerpage
$route['sellerorder'] = 'SellerController/order';
$route['sellerforecast']= 'SellerController/sellerforecast'; 
$route['sellerdatalist']= 'SellerController/sellerdatalist';
$route['sellerdelete/(:any)'] = 'SellerController/delete/$1';
$route['sellerweek']  = 'SellerController/sellerweek';
$route['sellermonth']  = 'SellerController/sellermonth';

$route['shipment/(:any)'] = 'SellerController/shipment/$1';

$route['shipping']  = 'SellerController/shipping';
$route['com']  = 'SellerController/com';
$route['cancelled']  = 'SellerController/cancelled';
$route['preparing']  = 'SellerController/preparing';
$route['model/(:any)'] = 'SellerController/model/$1';
$route['changeone/(:any)'] = 'SellerController/change1/$1';
$route['change2/(:any)'] = 'SellerController/change2/$1';
$route['change3/(:any)'] = 'SellerController/change3/$1';


//CRUD products w/image
$route['products']['GET'] = 'Products/ProductController/index';

//view ngh buyer
$route['products/view']['GET'] = 'Products/ProductController/view';

$route['products/add']['GET'] = 'Products/ProductController/create'; 
$route['products/add']['POST'] = 'Products/ProductController/store'; 

$route['products/edit/(:any)']['GET'] = 'Products/ProductController/edit/$1'; 

$route['products/update/(:any)']['POST'] ='Products/ProductController/update/$1';

$route['products/delete/(:any)']['GET'] = 'Products/ProductController/delete/$1'; 
//VIEW ALL PRODUCTS
$route['Product'] = 'welcome/Product';

//Use to load and insert feedbacks and ratings
//$route['rate/(:any)'] = 'UserController/rateMe/$1';
$route['rate/(:any)']['GET'] = 'Products/ProductController/rate/$1';
$route['addRate/(:any)']['POST'] = 'Products/ProductController/inserRate/$1';


//FEATURE PAGE
$route['dataMaping'] = 'welcome/feauture1';
$route['userdelete/(:any)'] = 'SellerController/userMapDeletion/$1';

$route['admindatamapping']= 'AdminController/data';

$route['forecast_view'] = 'welcome/feauture2';
$route['CropView'] = 'ForecastController';
$route['demand'] = 'demandForecast';

$route['fetchImage'] = 'welcome/fetch';

$route['joined'] = 'welcome/joined';

/* AGRO-CASH */
$route['agrocash'] = 'welcome/agrocash';
$route['cashIn']['POST'] = 'Welcome/cashIn'; 
$route['activate']['POST'] = 'Welcome/activate';

$route['Approved/(:any)']['POST'] = 'Welcome/Approved/$1'; //admin panels
$route['Noted/(:any)']['POST'] = 'Welcome/Noted/$1';