<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Форма</title>
	<script type="text/javascript">
		function validate(){
   		//Считаем значения из полей в переменные
   			var name=document.forms["form"]["name"].value;
   			var password=document.forms["form"]["password"].value;
   			var email=document.forms["form"]["email"].value;
   			var gender=document.forms["form"]["gender"].value;
   			var credit_card=document.forms["form"]["credit_card"].value;
   		//Если поле name пустое выведем сообщение и предотвратим отправку формы
   			if (name.length==0){
      			document.getElementById("namef").innerHTML="*данное поле обязательно для заполнения";
      			return false;
   			}
   		//Если поле password пустое выведем сообщение и предотвратим отправку формы
   			if (password.length==0){
   				document.getElementById("passwordf").innerHTML="*данное поле обязательно для заполнения";
   				return false;
   			}
   		//Если поле email пустое выведем сообщение и предотвратим отправку формы
   			if (email.length==0){
      			document.getElementById("emailf").innerHTML="*данное поле обязательно для заполнения";
      			return false;
   			}
   		//Если поле gender пустое выведем сообщение и предотвратим отправку формы
   			if (gender.length==0){
   				document.getElementById("genderf").innerHTML="*данное поле обязательно для заполнения";
   				return false;
   			}
   		//Если поле credit_card пустое выведем сообщение и предотвратим отправку формы
   			if (credit_card.length==0){
   				document.getElementById("credit_cardf").innerHTML="*данное поле обязательно для заполнения";
   				return false;
   			}
   		//Проверим содержит ли значение введенное в поле name от 6 до 100 символов
   			if (name.length<=5 || name.length>=101){
   				document.getElementById("namef").innerHTML="*name введен не верно, min 6 символов - max 100";
   				return false;
   			}
   		//Проверим содержит ли значение введенное в поле password от 6 до 100 символов
   			if (password.length<=5 || password.length>=101){
   				document.getElementById("passwordf").innerHTML="*password введен не верно, min 6 символов - max 100";
   				return false;
   			}
   		//Проверим содержит ли значение введенное в поле email символы @ и .
   			var at=email.indexOf("@");
   			var dot=email.indexOf(".");
   		//Если поле не содержит эти символы знач email введен не верно
   			if (at<1 || dot <1){
      			document.getElementById("emailf").innerHTML="*email введен не верно";
      			return false;
   			}
   		//Если поле не содержит эти символы значение gender введено не верно
   			if (gender!="М" && gender!="Ж"){
      			document.getElementById("genderf").innerHTML="*Введите пол в формате М или Ж";
      			return false;
   			}
		}

		var xhr = new XMLHttpRequest();
		xhr.open("GET", "file:///C:/OpenServer/domains/localhost/index.html", true);
		xhr.timeout = 15000;
		xhr.ontimeout = function() {
			console.log("Out time");
		}
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4) {
				if (xhr.status == 200) {
					console.log(xhr.responseText);
				}
			}
		}
		xhr.send(null);

</script>
</head>
<body>
	<form name="form" onsubmit="return validate()" style="margin: 50px">
		<h1>Заполните форму</h1>
		Имя: <input type="text" name="name" style="margin-left: 40px"><span style="color:red" id="namef"></span><br><br>
		Пароль: <input type="text" name="password" style="margin-left: 20px"><span style="color:red" id="passwordf"></span><br><br>
		e-mail: <input type="text" name="email" style="margin-left: 30px"><span style="color:red" id="emailf"></span><br><br>
		Ваш пол: <input type="text" name="gender" style="margin-left: 12px"><span style="color:red" id="genderf"></span><br><br>
		Credit card: <input type="text" name="credit_card"><span style="color:red" id="credit_cardf"></span><br><br>
		<input type="submit" value="Отправить форму">
	</form>
</body>
</html>