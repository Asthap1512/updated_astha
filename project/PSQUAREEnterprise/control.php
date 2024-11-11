
<?php

include_once('../Admin/model.php');  // step 1 load model 


class control extends model  // step 2 extends model class

{
		function __construct(){ // magic function call automatic when we declare class object
		
			model::__construct();  // step 3 call model __construct
		
		$url=$_SERVER['PATH_INFO'];

		
		switch($url)
		{
			case '/index':
				include_once('index.php');
			break;
			
			case '/about':
				include_once('about.php');
			break;
			
			case '/Product':
				include_once('Product.php');
			break;

			case '/Kraft paper':
				include_once('Kraft paper.php');
			break;
			
			case '/paper_view':
				$arr_paper=$this->select('product');
				if(isset($_REQUEST['btn_paper']))
				{
					$product_id=$_REQUEST['btn_paper'];
					$where='product_id='.$product_id;
					$arr_paper=$this->select_where('product',$where);
				}
				include_once('paper_view.php');
			break;

			case '/paper':
				$arr_product=$this->select('product');
				include_once('paper.php');
			break;

			case '/categories':
				$arr_categories=$this->select('categories');
				include_once('categories.php');
			break;

				
			case '/categories_view':
				if(isset($_REQUEST['btn_categories']))
				{
					$cate_id=$_REQUEST['btn_categories'];
					$where=array("cate_id"=>$cate_id);
					$res=$this->select_where('product',$where);
					while($fetch=$res->fetch_object()) // fetch all data
					{
						 $product_arr[]=$fetch;
					}
				}
				include_once('categories_view.php');
			break;
			case '/product_details':
				if(isset($_REQUEST['btn_product']))
				{
					$product_id=$_REQUEST['btn_product'];
					$where=array("product_id"=>$product_id);
					$res=$this->select_where('product',$where);
					while($fetch=$res->fetch_object()) // fetch all data
					{
						 $product_arr[]=$fetch;
					}
				}
				include_once('product_details.php');
			break;

			case '/CorrugatedBox':
				include_once('CorrugatedBox.php');
			break;
			
			case '/PaperBeg':
				include_once('PaperBeg.php');
			break;
			
			case '/CorruationRoll':
				include_once('CorruationRoll.php');
			break;

			case '/A4paper':
				include_once('A4paper.php');
			break;
			
			case '/StrapingPatti':
					
				include_once('StrapingPatti.php');
			break;
			
			case '/Selotep':
				include_once('Selotep.php');
			break;
			
			case '/StrachFilm':
				include_once('StrachFilm.php');
			break;

			case '/BubbleRoll':
				include_once('BubbleRoll.php');
			break;

			case '/getquote':
				$arr_inq=$this->select('inquiry');
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$phonenumber=$_REQUEST['phonenumber'];
					$message=$_REQUEST['message'];
					
					  $arr=array("name"=>$name,"email"=>$email,"phonenumber"=>$phonenumber,"message"=>$message);
					
					$res=$this->insert('inquiry',$arr);
					if($res)
					{
						echo "<script>
							alert('getquote submited suuccessfully');
							window.location='getquote';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
				include_once('getquote.php');
			break;

			case '/contact':
				$cust_arr=$this->select('customer');
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$phonenumber=$_REQUEST['phonenumber'];
					$address=$_REQUEST['address'];
					$city=$_REQUEST['city'];
					
					$arr=array("name"=>$name,"email"=>$email,"phonenumber"=>$phonenumber,"address"=>$address,"city"=>$city);
					
					 echo $res=$this->insert('customer',$arr);
					if($res)
					{
						echo "<script>
							alert('contact submited suuccessfully');
							window.location='contact';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
				include_once('contact.php');
			break;
			
			default:
				include_once('404.php');
			break;
		}
		
	}
	
}

$obj=new control;

?>