<?php
//random
function random(){
	if(isset($_POST['total']) && isset($_POST['count'])){
		$POST_total = $_POST['total'];
		$POST_count = $_POST['count'];
		$POST_except = $_POST['except'];
		
		$Rand = Array(); //定義陣列	
		$count = $POST_count ; //共產生幾筆
		
		if(isset($_POST['except'])){
			/*文字轉陣列－排除名單*/
			$Rand = explode(",",$POST_except);	
		}
	
		while($count > 0){
			$randval = mt_rand(1,$POST_total); //取亂數
			
			if (!in_array($randval, $Rand)) {
				$count--;
				$Rand[] = $randval; //若無重復則 將亂數塞入陣列
				echo $randval."<br>";
			}	
		}	
	}
}
?>

