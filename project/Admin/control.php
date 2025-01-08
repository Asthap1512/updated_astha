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
					$path='upload/categories/'.$image;     // path
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

  
			case '/edit_Categories':
				if(isset($_REQUEST['editbtn']))
				{
					$id=$_REQUEST['editbtn'];
					
					$where=array("cate_id"=>$id);
					$res=$this->select_where('categories',$where);
					$fetch=$res->fetch_object();
					include_once('edit_Categories.php');

					if(isset($_REQUEST['save']))
					{
						$tital=$_REQUEST['tital'];
						
						if($_FILES['image']['size']>0)
						{
							$image=$_FILES['image']['name'];
							// upload img in folder
							$path='upload/categories/'.$image;     // path
							$dupimage=$_FILES['image']['tmp_name'];  // duplicate imag get
							move_uploaded_file($dupimage,$path);  // move duplicate img in path
							
							$arr=array("tital"=>$tital,"image"=>$image);
							unlink('upload/categories/'.$old_image);
						}
						else
						{
							$arr=array("tital"=>$tital);
						}
						
						$res=$this->update('categories',$arr,$where);
						if($res)
						{
							echo "<script>
								alert('Categories Update suuccessfully');
								window.location='Manage_Categories';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					

				}
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
					$path='upload/categories/'.$image;    // path
					$dupcourse_image=$_FILES['image']['tmp_name'];  // duplicate imag get
					move_uploaded_file($dupcourse_image,$path);  // move duplicate img in path
					
					
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
		 
			case '/edit_product':
				if(isset($_REQUEST['editbtn']))
				{
					$id=$_REQUEST['editbtn'];
					
					$where=array("product_id"=>$id);
					$res=$this->select_where('product',$where);
					$fetch=$res->fetch_object();
					include_once('edit_product.php');

					
					if(isset($_REQUEST['save']))
					{
						
						$cate_id=$_REQUEST['cate_id'];
						$productname=$_REQUEST['productname'];
						$tital=$_REQUEST['tital'];
						$description=$_REQUEST['description'];
						
						
						if($_FILES['image']['size']>0)
						{
							$image=$_FILES['image']['name'];
							// upload img in folder
							$path='upload/categories/'.$image;     // path
							$dupimage=$_FILES['image']['tmp_name'];  // duplicate imag get
							move_uploaded_file($dupimage,$path);  // move duplicate img in path
							
							$arr=array("cate_id"=>$cate_id,"productname"=>$productname,"tital"=>$tital,"description"=>$description,"image"=>$image);
							unlink('upload/categories/'.$old_image);
						}
						else
						{
							$arr=array("cate_id"=>$cate_id,"productname"=>$productname,"tital"=>$tital,"description"=>$description);
						}
						
						$res=$this->update('product',$arr,$where);
						if($res)
						{
							echo "<script>
								alert('Product Update suuccessfully');
								window.location='manage_product';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					
				}
			break;
			
			
			case '/manage_inquiry':
				$inq_arr=$this->select('inquiry');
				include_once('manage_inquiry.php');
			break;

			case '/edit_inquiry':
				if(isset($_REQUEST['editbtn']))
				{
					$id=$_REQUEST['editbtn'];
					
					$where=array("id"=>$id);
					$res=$this->select_where('inquiry',$where);
					$fetch=$res->fetch_object();
					
					// $del_img=$fetch->img;
					
					$arr_country=$this->select('country');
					include_once('edit_inquiry.php');
					
					
					if(isset($_REQUEST['save']))
					{
						$name=$_REQUEST['name'];
						$email=$_REQUEST['email'];
						$phonenumber=$_REQUEST['phonenumber'];
						
						$message=$_REQUEST['message'];
						
						
						
						if($_FILES['img']['size']>0)
						{
							//$img=$_FILES['img']['name'];
							// upload img in folder
							//$path='../PSQUAREEnterprise/img/customer/'.$img;     // path
							//$dupimg=$_FILES['img']['tmp_name'];  // duplicate imag get
							//move_uploaded_file($dupimg,$path);  // move duplicate img in path
							
							$arr=array("name"=>$name,"email"=>$email,"phonenumber"=>$phonenumber,"message"=>$message);
							
							// unlink('../PSQUAREEnterprise/img/customer/'.$del_img);
						}
						else
						{
							$arr=array("name"=>$name,"email"=>$email,"phonenumber"=>$phonenumber,"message"=>$message);
						}
						
						$res=$this->update('inquiry',$arr,$where);
						if($res)
						{
							echo "<script>
								alert('Update Data suuccessfully');
								window.location='manage_inquiry';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					
				}
			break;

			case '/manage_customer':
				$cust_arr=$this->select('customer');
				include_once('manage_customer.php');
			break;

			case '/edit_customer':
				if(isset($_REQUEST['editbtn']))
				{
					$id=$_REQUEST['editbtn'];
					
					$where=array("id"=>$id);
					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();
					
					$del_img=$fetch->img;
					
					$arr_country=$this->select('country');
					include_once('edit_customer.php');
					
					
					if(isset($_REQUEST['save']))
					{
						$name=$_REQUEST['name'];
						$email=$_REQUEST['email'];
						$gender=$_REQUEST['gender'];
						
						$lag_arr=$_REQUEST['lag'];
						$lag=implode(",",$lag_arr);
						
						$cid=$_REQUEST['cid'];
						
						
						if($_FILES['img']['size']>0)
						{
							$img=$_FILES['img']['name'];
							// upload img in folder
							$path='../PSQUAREEnterprise/img/customer/'.$img;     // path
							$dupimg=$_FILES['img']['tmp_name'];  // duplicate imag get
							move_uploaded_file($dupimg,$path);  // move duplicate img in path
							
							$arr=array("name"=>$name,"email"=>$email,"gender"=>$gender,"lag"=>$lag
							,"cid"=>$cid,"img"=>$img);
							
							unlink('../PSQUAREEnterprise/img/customer/'.$del_img);
						}
						else
						{
							$arr=array("name"=>$name,"email"=>$email,"gender"=>$gender,"lag"=>$lag
							,"cid"=>$cid);
						}
						
						$res=$this->update('customer',$arr,$where);
						if($res)
						{
							echo "<script>
								alert('Update Data suuccessfully');
								window.location='manage_customer';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					
				}
			break;



			case '/delete':
				
				if(isset($_REQUEST['del_Categories']))
				{
					$id=$_REQUEST['del_Categories'];
					$where=array("cate_id"=>$id);
					
					// image get for delete
					$sel_sel=$this->select_where('categories',$where);
					$fetch=$sel_sel->fetch_object();
					$del_img=$fetch->image;
					
					$res=$this->delete_where('categories',$where);
					if($res)
					{
						unlink('upload/img/'.$del_img); // del image
						echo "<script>
							alert('Categories Deleted suuccessfully');
							window.location='Manage_Categories';
						</script>";
					}
				}

				if(isset($_REQUEST['del_product']))
				{
					$id=$_REQUEST['del_product'];
					$where=array("product_id"=>$id);
					
					// image get for delete
					$sel_sel=$this->select_where('product',$where);
					$fetch=$sel_sel->fetch_object();
					$del_img=$fetch->image;
					
					$res=$this->delete_where('product',$where);
					if($res)
					{
						unlink('upload/img/'.$del_img); // del image
						echo "<script>
							alert('Categories Deleted suuccessfully');
							window.location='manage_product';
						</script>";
					}
				}

				if(isset($_REQUEST['del_inquiry']))
				{
					$id=$_REQUEST['del_inquiry'];
					$where=array("id"=>$id);
					
					$res=$this->delete_where('inquiry',$where);
					if($res)
					{
					
						echo "<script>
							alert('inquiry Deleted suuccessfully');
							window.location='manage_inquiry';
						</script>";
					}
				}

				if(isset($_REQUEST['del_customer']))
				{
					$id=$_REQUEST['del_customer'];
					$where=array("id"=>$id);

					$sel_sel=$this->select_where('customer',$where);
					$fetch=$sel_sel->fetch_object();
					$del_img=$fetch->img;
					
					$res=$this->delete_where('customer',$where);
					if($res)
					{
						unlink('../PSQUAREEnterprise/img/customer/'.$del_img); // del image
						echo "<script>
							alert('customer Deleted suuccessfully');
							window.location='manage_inquiry';
						</script>";
					}
				}

				break;

				case '/status':
				
					if(isset($_REQUEST['status_customer']))
					{
						$id=$_REQUEST['status_customer'];
						$where=array("id"=>$id);
						
						// status get for delete
						$sel_sel=$this->select_where('customer',$where);
						$fetch=$sel_sel->fetch_object();
						$status=$fetch->status;
						
						if($status=="Block")
						{
							$arr=array("status"=>"Unblock");
							$res=$this->update('customer',$arr,$where);
							if($res)
							{
								
								echo "<script>
									alert('Customer Unblock suuccessfully');
									window.location='manage_customer';
								</script>";
							}
						}
						else
						{
							$arr=array("status"=>"Block");
							$res=$this->update('customer',$arr,$where);
							if($res)
							{
								unset($_SESSION['userid']);
								unset($_SESSION['username']);
								echo "<script>
									alert('Customer Block suuccessfully');
									window.location='manage_customer';
								</script>";
							}
						}
						
					}
					
					
					if(isset($_REQUEST['status_product']))
					{
						$id=$_REQUEST['status_product'];
						$where=array("product_id"=>$id);
						
						// status get for delete
						$sel_sel=$this->select_where('product',$where);
						$fetch=$sel_sel->fetch_object();
						$status=$fetch->status;
						
						if($status=="Not Available")
						{
							$arr=array("status"=>"Available");
							$res=$this->update('product',$arr,$where);
							if($res)
							{
								
								echo "<script>
									alert('Product Available suuccessfully');
									window.location='manage_product';
								</script>";
							}
						}
						else
						{
							$arr=array("status"=>"Not Available");
							$res=$this->update('product',$arr,$where);
							if($res)
							{
								echo "<script>
									alert('Product Not Available suuccessfully');
									window.location='manage_product';
								</script>";
							}
						}
						
					}
					
					
				break;
			
				
			
			default:
			include_once('404.php');
			break;
		}
	}		
	
}
$obj= new control;

?>