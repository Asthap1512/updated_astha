<?php

include_once('model.php');   // step 1 load model 


class control extends model  // step 2 extends model class
{
	
	function __construct(){ // magic function call automatic when we declare class object
		
		session_start();
		model::__construct(); // step 3 call model __construct
				
		$url=$_SERVER['PATH_INFO'];
	
		switch($url)
		{
			case '/admin-login':
				if(isset($_REQUEST['login']))
				{
					$Email=$_REQUEST['Email'];
					$password=md5($_REQUEST['password']);
					
					$where=array("Email"=>$Email,"password"=>$password);
					
					$res=$this->select_where('admin',$where);
					$chk=$res->num_rows; //check row wise condition
					
					if($chk==1) // 1 true 0 false
					{

						 $fetch=$res->fetch_object();
						
						$_SESSION['adminname']=$fetch->name;
						$_SESSION['adminid']=$fetch->admin_id;
						
						echo "<script>
							alert('login Succesfull');
							window.location='admin-login';
						</script>";
					
					}

					else
					{
						echo "<script>
						alert('login not suuccessfully');
						window.location='admin-login';
					</script>";
					}
				}
				include_once('index.php');
			break;

			case '/adminlogout':
			
				unset($_SESSION['adminid']);
				unset($_SESSION['adminname']);
				echo "<script>
							alert('Logout Succesfull');
							window.location='admin-login';
						</script>";
				
			break;
			
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			case '/add_Categories':
				if(isset($_REQUEST['submit']))
				{
					$tital=$_REQUEST['tital'];
					
					$image=$_FILES['image']['name'];
	
					// upload img in folder
					$path='upload/img/'.$image;     // path
					$dupcate_image=$_FILES['image']['tmp_name'];  // duplicate imag get
					move_uploaded_file($dupcate_image,$path);  // move duplicate img in path
					
					
					$arr=array("tital"=>$tital,"image"=>$image);
					
					$res=$this->insert('categories',$arr);
					if($res)
					{
						echo "<script>
							alert('Categories add suuccessfully');
							window.location='add_Categories';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
				include_once('add_Categories.php');
			break;

			case '/Manage_Categories':
				$Cate_arr=$this->select('categories');
				include_once('Manage_Categories.php');
			break;


			case '/add_product':
				$cate_arr=$this->select('categories');
				//print_r($cate_arr);
				if(isset($_REQUEST['submit']))
				{
					$cate_id=$_REQUEST['cate_id'];
					$productname=$_REQUEST['productname'];
					$tital=$_REQUEST['tital'];
					$description=$_REQUEST['description'];
				
					$image=$_FILES['image']['name'];
	
					 //upload img in folder
					$path='upload/img/'.$image;    // path
					$dupcourse_img=$_FILES['image']['tmp_name'];  // duplicate imag get
					move_uploaded_file($dupcourse_img,$path);  // move duplicate img in path
					
					
					$arr=array("cate_id"=>$cate_id,"productname"=>$productname,"tital"=>$tital,"description"=>$description,"image"=>$image);
					
					$res=$this->insert('product',$arr);
					if($res)
					{
						echo "<script>
							alert('product add suuccessfully');
							window.location='add_product';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
				include_once('add_product.php');
			break;
			
			case '/manage_product':
				// select * from product on product.cate_id=categories.cate_id
				$prod_arr=$this->select_join('product','categories','tital','product.cate_id=categories.cate_id');
				include_once('manage_product.php');
			break;
		
			
			
			case '/manage_inquiry':
				$inq_arr=$this->select('inquiry');
				include_once('manage_inquiry.php');
			break;
			

			case '/manage_customer':
				$cust_arr=$this->select('customer');
				include_once('manage_customer.php');
			break;

			
			default:
			include_once('404.php');
			break;
		}
	}		
	
}
$obj= new control;

?>