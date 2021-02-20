<!doctype html>
<html lang ="en">
<title>SparkDonation-Form</title>
	<style>
	body{
		background:  url("img/donation.jpg");
		background-size: cover;
        font-family: Poppins;
        font-size: 16px;
        line-height: 1.4em;
        margin: 0px;
		height: 100vh;
        min-height: 600px;
        padding: 0px;
		overflow: hidden;
    }
	.container {
		margin-top: 100px;
		margin-left: auto;
		margin-right: auto;
		align-items: center;
		text-align: center;
		width: 400px;
		border-radius: 5px;
		background-color:#ff ffff;
		padding: 20px;
    }
	 h3 {
        color: lightblue;
        font-size: 50px;
        font-weight: bold;
        margin-top: 30px;
		text-align: center;
    }
	  input {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
    }


    .button {
       background-color: darkblue;
        border-radius: 4px;
        border: 1px solid #FDFEFE;
        color: white;
        cursor: pointer;
        display: block;
        font-weight: bold;
        height: 46px;
        margin-top: 17px;
        min-width: 50px;
        padding: 0;
        text-align: center;
        text-decoration: none;
        width: 100%;
        -webkit-font-smoothing: antialiased;
       	font-size: 15px;
    	text-transform: uppercase;
    }

    .button:hover {
        background-color: salmon;
        border: 1px solid #FDFEFE;
    }

    a.lnk {
        color: #00b894;
        display: block;
        font-size: 14px;
        line-height: 44px;
    }

    form {
        margin-top: 50px;
    }
	
	@media (max-width:600px){
	.wrapper {
		width: 100%;
	}
	.container{
		width: 70%;
		margin-left: 50px;
		margin-right: auto;
		align-items: center;
		height: auto;
		margin: 30% 10%;
	}
	h3{
		font-size: 30px;
	}
	}
    </style>
	<meta name="viewport" content="width=device-width,user-scalable=no"></meta>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favi-index.png">
	</head>
	<body>
			<div class="wrapper">
				<div class="container">
						<h3>DONATE NOW!</h3>
			<form action="payment.php" method="post">
			    <input type="text" name="name" maxlength="30" placeholder="Name" required>
				<input type="email" name="email" maxlength= "50" placeholder="E-mail" required>
				<input type="tel" name="phone" size="10" maxlength="10" placeholder="Phone Number" required>
				<input type="number" name="amount" min="50" placeholder="Amount" required>
				<input type="submit" name="submit" class="button" value="PAY NOW" />
				<input type="reset" name="reset" class="button" value="Reset" onclick="return confirmReset();" />
			</form>

			</div>	
		</div>
		<script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>
	</body>
	
</html>