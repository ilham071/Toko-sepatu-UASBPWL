<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main1.js"></script>
    <title>Order</title>
</head>
<body>
    <style>
        body {
  background: #efefef;
  font-size: 62.5%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  color: #B6B6B6;
}
body section {
  background: white;
  margin: 60px auto 120px;
  border-top: 15px solid #313A3D;
  text-align: center;
  padding: 50px 0 110px;
  width: 80%;
  max-width: 1100px;
}
body section h1 {
  margin-bottom: 40px;
  font-size: 4em;
  text-transform: uppercase;
  font-family: "Lato", sans-serif;
  font-weight: 100;
}

form {
  width: 58.3333333333%;
  margin: 0 auto;
}
form .field {
  width: 100%;
  position: relative;
  margin-bottom: 15px;
}
form .field label {
  text-transform: uppercase;
  position: absolute;
  top: 0;
  left: 0;
  background: #313A3D;
  width: 100%;
  padding: 18px 0;
  font-size: 1.45em;
  letter-spacing: 0.075em;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field label + span {
  font-family: "SSStandard";
  opacity: 0;
  color: white;
  display: block;
  position: absolute;
  top: 12px;
  left: 7%;
  font-size: 2.5em;
  text-shadow: 1px 2px 0 #cd6302;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type=text],
form .field textarea {
  border: none;
  background: #E8E9EA;
  width: 80.5%;
  margin: 0;
  padding: 18px 0;
  padding-left: 19.5%;
  color: #313A3D;
  font-size: 1.4em;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}
form .field input[type=text]#msg,
form .field textarea#msg {
  height: 18px;
  resize: none;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type=text]:focus, form .field input[type=text].focused,
form .field textarea:focus,
form .field textarea.focused {
  outline: none;
}
form .field input[type=text]:focus#msg, form .field input[type=text].focused#msg,
form .field textarea:focus#msg,
form .field textarea.focused#msg {
  padding-bottom: 150px;
}
form .field input[type=text]:focus + label, form .field input[type=text].focused + label,
form .field textarea:focus + label,
form .field textarea.focused + label {
  width: 18%;
  background: #FD9638;
  color: #313A3D;
}
form .field input[type=text].focused + label,
form .field textarea.focused + label {
  color: #FD9638;
}
form .field:hover label {
  width: 18%;
  background: #313A3D;
  color: white;
}
form input[type=submit] {
  background: #FD9638;
  color: white;
  -webkit-appearance: none;
  border: none;
  text-transform: uppercase;
  position: relative;
  padding: 13px 50px;
  font-size: 1.4em;
  letter-spacing: 0.1em;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form input[type=submit]:hover {
  background: #313A3D;
  color: #FD9638;
}
form input[type=submit]:focus {
  outline: none;
  background: #cd6302;
}
    </style>
<section id="hire">
    
    <form  method="POST" action="<?php echo base_url('index.php/welcome/addorder');?>">
	      <div class="field name-box">
		        <input type="text" id="merek" placeholder="Merek" name="merek"/>
        		<label for="merek">Merek</label>
		        <span class="ss-icon">check</span>
	      </div>

	      <div class="field email-box">
		        <input type="text" id="ukuran" placeholder="Ukuran" name="ukuran"/>
		        <label for="ukuran">Ukuran</label>
		        <span class="ss-icon">check</span>
	      </div>

          <div class="field email-box">
		        <input type="text" id="alamat" placeholder="Alamat" name="alamat"/>
		        <label for="alamat">alamat</label>
		        <span class="ss-icon">check</span>
	      </div>



	      <input class="button" type="submit" value="Send" />
  </form>
</section>
</body>
</html>