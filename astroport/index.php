<?php 
	if($_POST["ship"]){
		$ship = $_POST["ship"]; 
	}
?>

<style>
.free { 
    background-color: yellow;
}
.occupied { 
    background-color: red;	
}
.hidden { 
    display: none;
}
</style>

<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	</head>
	<body>
		<p id="astroport-name">Astroport</p>
		<div id="gate-1" class="<?php if(!isset($ship)) echo "free"; else echo "occupied";?>">Gate 1
			<p >Ship 1</p>
			<p id="ship-1" ><?php if(isset($ship)) echo $ship; else echo "free"; ?></p>
		</div>
		<div id="gate-2" class="<?php echo "free";?>">Gate 2
			<p >Ship 2</p>
			<p id="ship-2"></p>
		</div>
		<div id="gate-3" class="<?php echo "free";?>">Gate 3
			<p >Ship 3</p>
			<p id="ship-3"></p>
		</div>
		</br>
		<form name="myform" action="<?php $_PHP_SELF ?>" method="post">
			Ship: 
			<input id="ship" type="text" name="ship" onkeydown="test()"><br>
			<button id="dock" type="submit">Dock</button>
		</form>
	</br>
		<div id="info" class="<?php if(!isset($ship)) echo 'hidden'; else echo '';?>">
			Info : <?php if(isset($ship)) echo $ship; ?> Docked</br>
		</div>
	</body>
</html>

<?php if(isset($ship)){?>
<script>
	function test() {
	    $("#info").attr("class","hidden");
	}
</script>
<?php }?>