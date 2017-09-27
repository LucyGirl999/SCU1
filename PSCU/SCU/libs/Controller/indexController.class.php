<?php
	header('content-type:text/html;charset=utf-8');
	require_once(getcwd().'/../libs/ORG/checkedImage_contact.php');
	//首页的控制器
	class indexController{
		
		//显示首页，为默认
		public function index(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
            
            $arr=$this->getScrollImage();
			if(!empty($arr)){
				VIEW::_assign("arr",$arr);
            }
            $arr2=$this->getAImage();
			if(!empty($arr2)){
				VIEW::_assign("arr2",$arr2);
            }
            $arr3=$this->getAImage1();
			if(!empty($arr2)){
				VIEW::_assign("arr3",$arr3);
            }
            $arr4=$this->getAImage2();
			if(!empty($arr2)){
				VIEW::_assign("arr4",$arr4);
            }
			VIEW::display('main/index.html');
		}
		
		public function showAboutUs(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/aboutUs.html');
		}
		
		public function getCheckedImage_contactUs(){
			createCheckedImage(90,33);
		}
		
		public function contactUs(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/contactUs.html');
		}
		
		public function getScrollImage(){
			$indexmodel=M('index');
			return $indexmodel->getScrollImage();
		}
		
		public function getAImage(){
			$indexmodel=M('index');
			return $indexmodel->getAImage();
		}
		public function getAImage1(){
			$indexmodel=M('index');
			return $indexmodel->getAImage1();
		}
		public function getAImage2(){
			$indexmodel=M('index');
			return $indexmodel->getAImage2();
		}
		
		public function information(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/information-of-club.html');
		}
		
		public function notice(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/new.html');
		}
		
		public function show1(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tr ingle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			//获取当前成员加入该社团的状态
			$isJoin = M('joinSociety');
			$result = $isJoin->isJoin();
			if($result==1)
				VIEW::_assign('isJoin','已加入');
			else if($result==0)
				VIEW::_assign('isJoin','等待审核');
			else
				VIEW::_assign('isJoin','加入社团');
			//获取关注状态
			$isConcern = M('concernSociety');
			$result_concern = $isConcern->isConcern();
			if($result_concern){
				VIEW::_assign('isConcern','1');
			}
			else
				VIEW::_assign('isConcern','0');
			VIEW::display('main/orgMessage1.html');
		}
		
		public function show2(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			//获取当前成员加入该社团的状态
			$isJoin = M('joinSociety');
			$result = $isJoin->isJoin();
			if($result==1)
				VIEW::_assign('isJoin','已加入');
			else if($result==0)
				VIEW::_assign('isJoin','等待审核');
			else
				VIEW::_assign('isJoin','加入社团');
			//获取关注状态
			$isConcern = M('concernSociety');
			$result_concern = $isConcern->isConcern();
			if($result_concern){
				VIEW::_assign('isConcern','1');
			}
			else
				VIEW::_assign('isConcern','0');
			VIEW::display('main/orgMessage2.html');
		}
		
		public function show3(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			//获取当前成员加入该社团的状态
			$isJoin = M('joinSociety');
			$result = $isJoin->isJoin();
			if($result==1)
				VIEW::_assign('isJoin','已加入');
			else if($result==0)
				VIEW::_assign('isJoin','等待审核');
			else
				VIEW::_assign('isJoin','加入社团');
			//获取关注状态
			$isConcern = M('concernSociety');
			$result_concern = $isConcern->isConcern();
			if($result_concern){
				VIEW::_assign('isConcern','1');
			}
			else
				VIEW::_assign('isConcern','0');
			/*
			//获取评论
			$comment = M('comment');
			$result_comment = $comment->getAll();
			if($result)
				VIEW::_assign('comment_arr',$result_comment);
			*/
			VIEW::display('main/orgMessage3.html');
		}
        
        //显示活动具体信息
        public function activityMore(){
            $model=M("index");
            $data=$model->getActivityData();
            VIEW::_assign('content',$data);
            VIEW::display('main/new.html');
        }
	}
?>
