<?php 
  $balance=13245;
if (isset($_POST['Transfer']))
 {
	 $balance+=$_POST['amount'];
	 	
}
 
 else{
 	$balance=$balance;
 }

  
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>btt01</title>
 	<style >
    body{

      background-image:url("hh.jpeg");
      background-size: 1400px 900px;
    }
 		div{ font-size: 40px;
 			text-align: center;
 			
 			display: block;

 		}
 		div img{
		  display: block;
		  margin-left: auto;
		  margin-right: auto;
		  width: 20%;
		  height: 20%;
		  margin-left: 550px;
		}
    input[type=number]{
      height: 40px;
      width: 300px;
    }
		input[type=submit]
		{
			font-size: 25px;
           background-color: skyblue;
           border-radius: 6px;
           padding: 16px 32px;
           text-decoration: none;
           margin: 5px 3px;
           cursor: pointer;
		}
		
		input[type=submit]:hover{
			   background: blue;
       color: white;
		}
		

 	</style>
 </head>
 <body>
 <script >
    function fun(){
      alert("Transaction Successfully completed");
    }

    </script>
    <div>
    	<img src="m.png">
    	<form action="btto1.php" method="POST">
    		<b> <ol>
        Customer ID: bbt01</br></br>
    	Name Of User:Arya</br></br>
        Email ID:arya01@bbt.in</br></br>
        Balance :<?php echo $balance ; ?></br></br>
        Amount To Add:<input type="number" name="amount"  >
           </ol>
           <div>
           	<input type="submit" name="Transfer" value="Transfer" onclick="fun()">
           </div></b>

    	</form>
    </div>
 </body>
 </html>