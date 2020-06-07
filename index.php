<?php
// declare (strict_types=1);
include('section1.php');
// spl_autoload_register(function ($class_name) {
    // include $class_name . '.php';
// });

// $obj  = new section1();
// $obj2 = new section2(); 
 


 
 
 
 // - Может лучше самому пытаться понять все? прочитал немного и дальше сам пытаешься понять чем полностью пытаться понять все,
 // то есть сразу же после чтения захоидить  и делать практику, а то 2-3 часа просто уходит смотришь читаешь и ничего не понять куча примеров
 // и бред какой то, а так сам начинаешь искать смысл и уходит минут 20-30 и быстрее гораздо ведь.
 // - Нужно 50% читать и 50% пытатсья понять самому и читать снова и снова и собирать кучу записей и комбинировать все вместе потом искать общую суть
 // вещей которые пытаешься понять
 
 // А что толку что ты мало знаешь о языках програмирования? ну основы знаешь в PHP или в Java а другие знают все  и что? 
 // больше зарабатывать не будешь, почему? потому что в рисовании ты знаешь вообще нахрен все и что толку? больше ведь не зарабаываешь,
 // зарабатываешь потолок и все, в итоге какая нибудь баба едет жить в другие страны из за того что она баба а ты все равно 
 // изза своего общения не можешь ехать так как дело не в умениях которые направленны на работу уже а уже в умении общаться так 
 // что програмист которые умеет только програмировать он не будет зарабаывать миллионы, он будет иметь потолок ну милион в месяц
 // и все , а знать нужно другие вещи чтобы зарабатывать. связи всякие иметь нужно а не только владеть умениями.
 
 
 
 
 interface abc {
	  const ABC = 135;
 }
 class users implements abc{
		
 }
 
 
 
	// foreach ($this->productAttributes as $attribute) {
		// if (!isset($product[$attribute])) {
			// throw new \Exception(sprintf('Import fail: the product attribute %s is missing', $attribute));
		// }
	// }
	
	
	// if (!isset($product['color'])) {
        // throw new \Exception('Import fail: the product attribute color is missing');
    // }

    // if (!isset($product['size'])) {
        // throw new \Exception('Import fail: the product attribute size is missing');
    // }

    // if (!isset($product['type'])) {
        // throw new \Exception('Import fail: the product attribute type is missing');
    // }
	
	
 // echo gettype(  $products );
  $xArr = ['color', ['as','xx','dfy'],'size','type','45r',];
  $products = ['blue','red','green','red','t','j','x','v','fghj','color','xx', 'size',];
  
 
 // echo $k1 = array_search ('color', $products); //выдает ключ массива
  // echo $k2 = array_search ('size', $products); //выдает ключ массива
   // echo $k3 = array_search ('type', $products); //выдает ключ массива
 
 
 
  	foreach ($xArr as $elem){
		// $x = 'name' or 'password' or 'mail' or 'surname';
		// echo "<br>".  $elem;
		$k1 = array_search ($elem, $products); //выдает ключ массива
		
			if($products[$k1]){
				echo "<br>". 'there is no elements in array!';
			}
	}
	
 
	echo "<br>". "<br>"."<br>"."<br>"."<br>";
  
  	foreach ($products as $elem){
		// $x = 'name' or 'password' or 'mail' or 'surname';
		// echo "<br>".  $elem;
		// $k1 = array_search ($elem, $products); //выдает ключ массива
		
			foreach($xArr as $elem_2){
				if($elem_2 == $elem){
					echo "<br>". 'there is no elements in array!';
				}
			}
			
	}

 	// foreach ($products as $value){
			// $x = 'name' or 'password' or 'mail' or 'surname';
			// $x = 'john';
			// if(isset($products[$x])){
				// echo "<br>". 'there is no elements in array!';
			// }
		// }

 
 
 		// foreach ($products as $value){
 
			// if(isset($products[$x])){
				// echo "<br>". 'there is no elements in array!';
			// }
		// }
 
 

// class user{
 
	// public $name;
	// public $pass;
	// public $maill;
	// public function __construct($a, $b, $c){
		// $this->name = $a;
		// $this->pass = $b;
		// $this->maill = $c;
	// }
	
	// public function call (){
		// echo  "<br>". $this->name. "<br>". $this->pass . "<br>". $this->maill. "<br>" ;
	// }
 // }
 
 
 
// class admin extends user {}
// class moderator extends user {}
// class editor extends user {}
// class guest extends user {}



// $editor = new editor('Mike - editor','8953','hgsdf@mail.ru');
// $guest = new guest('Guest - guest','N',' @mail.ru');
// $moderator = new moderator('Aaron - moderator','78jh','qgr4@mail.ru');
// $admin = new admin('John - admin','12345', 'qwerty@mail.ru');

 // $admin->call();
 // $moderator->call();
 // $guest->call();
 // $editor->call();


 // echo serialize($moderator);
 
 
 
 // interface Iinterface{
	
	// public function Iuser();
// }

// class Fruit implements  Iinterface{
  // public $name;
  // public $color;
  // public function __construct($name, $color) {
    // $this->name = $name;
    // $this->color = $color;
  // }
  // public function intro() {
    // echo "The fruit is {$this->name} and the color is {$this->color}.";
  // }
// }

// class berry1 extends Fruit {
  // public function message() {
	// $this->name = 'YAGODA - 1';
	// $this->color = 'RED';
    // echo "Am I a fruit or a berry? ";
  // }
// }
 // class berry2 extends Fruit {

  // public function message() {
	 // $this->name = 'YAGODA - 2';
	// $this->color = 'BLUE';
    // echo "Am I a fruit or a berry? ";
  // }
// }

// $berry1 = new berry1(); 
// $berry2 = new berry2(); 
// $berry1->message(); 
// $berry1->intro(); 

// $berry2->message(); 
// $berry2->intro(); 

 


 
 


  


// $var;
// $test = !empty($var) ? 'empty' : 'no empty' ;
// echo $test;



 ?>
 
 
 
<!DOCTYPE html>
<html>
<head>

</head>
<body>


 
 

 

<form method="get" > 
<br><br><br>
<input type='text' name = 'name' value=''> - name<br>
<input type='text' name = 'email' value=''> - email<br>
<input type='text' name = 'pass' value=''> - pass<br>

</form>
 

 



<script> 


for (i in  navigator){
	console.log(i);
}
 navigator.serviceWorker? console.log(123): alert(123);














class User {

  // constructor(name) {
    // this.name = name;
  // }

  sayHi() {
    // alert(123);
  }

}

let user = new User("Вася");
user.sayHi(); // Вася








// var rty = document.createElement("div");
// function cxvfd(){
	// document.body.appendchsild(rty);
	
	// rty.innerHTML = '<?php echo $cla->z ?>';

// }
 
// setTimeout(cxvfd,2030);

 
 // let promise = fetch('https://www.php.net/manual/ru/language.generators.overview.php', {method: "GET", headers: {},});
 
 // fetch('https://cors-proxy.htmldriven.com/?url=https://www.php.net/manual/ru/language.generators.overview.php', {
  // method: "GET",  
  // headers: {
 
  // },
	// referrer: "https://www.php.net",
	// referrerPolicy: "origin", 
    // mode: 'cors', 
 
  
// });

 // function loadDoc() {
  // var content = document.getElementById("demo").innerHTML;
  // var xhttp = new XMLHttpRequest();
  // xhttp.open("GET", "ajax_info.xml", true);
  // xhttp.send();
    // xhttp.onreadystatechsange = function() {
    // if (this.readyState == 4 && this.status == 200) {
     // document.getElementById("demo").innerHTML = content + this.responseText;
	  
    // }
  // };
// }

 


</script>

</body>
</html>