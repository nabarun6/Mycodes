$(document).ready(function()
{
	$("register_form").on("submit",function()
	{
		var status = false;
		var name = $("#username");
		var email = $("#email");
		var pass1 = $("#password1");
		var pass2 = $("#password2");
		var type = $("#usertype");
		
		var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
		if(name.val() == "" || name.val().length < 6)
		{
			name.addClass("border-danger");
			$("#u_error").html("<span class = 'text-danger'>Please Enter Name and Name should be more than 6 characters</span>");
			status = false;
		}
		else
		{
			name.removeClass("border-danger");
			$("#u_error").html("");
			status = true;
		}
		if (!e_patt.test(email.val()))
		{
			email.addClass("border-danger");
			$("#e_error").html("<span class = 'text-danger'>Please Enter Valid Email Address</span>");
			status = false;
		}
		else
		{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}
		if (pass1.val() == "" || pass1.val().length < 9)
		{
			pass1.addClass("border-danger");
			$("#p1_error").html("<span class = 'text-danger'>Please Enter More Than 9 Digit Password</span>");
			status = false;
		}
		else
		{
			pass1.removeClass("border-danger");
			$("#p1_error").html("");
			status = true;
		}
		if(pass2.val() == "" || pass1.val().length < 9)
		{
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class = 'text-danger'>Please Enter More Than 9 Digit Password</span>");
			status = false;
		}
		else
		{
			pass2.removeClass("border-danger");
			$("#p2_error").html("");
			status = true;
		}
		if (type.val() == "")
		{
			type.addClass("border-danger");
			$("#t_error").html("<span class = 'text-danger'>Please Enter More Than 9 Digit Password</span>");
			status = false;
		}
		else
		{
			type.removeClass("border-danger");
			$("t_error").html("");
			status = true;
		}
		if((pass1.val() == pass2.val()) && status == true){
			$(".overlay").show();
			$.ajax({
					url: DOMAIN+"/includes/process.php",
					method : "POST",
					data : $("register_form").serialize(),
					success : function(data)
						{
							if (data == "EMAIL_ALREADY_EXISTS"){
								$(".overlay").hide();
								alert("It seems that you have used this email address earlier");
							}
							else if(data == "SOME_ERROR")
							{	$(".overlay").show();
								alert("Something Wrong");
							}
							else
							{	$(".overlay").show();
								window.location.href = encodeURI(DOMAIN+"/index.php?msg=You");
							}
						}
					})
		}
		else
		{
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class = 'text-danger'>Password does not matched</span>");
			status = true;
		}
	}

})

///////////////////For login part
	$("#form_login").on("submit", function(){

		var email = $("#log_email");
		var pass = $("#log_password");
		var status = false;
		if (email.val() == "")
		{
			email.addClass("border-danger");
			$("#e_error").html("<span class = 'text-danger'>Please Enter Email Address</span>");
			status = false;
		}
		else
		{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}
		if (pass.val() == "")
		{
			pass.addClass("border-danger");
			$("#p_error").html("<span class = 'text-danger'>Please Enter Password</span>");
			status = false;
		}
		else
		{
			pass.removeClass("border-danger");
			$("#p_error").html("");
			status = true;
		}
		if (status)
		{
			$.ajax({
						url: DOMAIN+"/includes/process.php",
						method : "POST",
						data : $("form_login").serialize(),
						success : function(data)
						{
							if (data == "NOT_REGISTERED") {
								$(".overlay").hide();
								email.addClass("border-danger");
								$("#e_error").html("<span class = 'text-danger'>It seems like ...</span>");
							}else if(data == "PASSWORD_NOT_MATCHED"){
								$(".overlay").hide();
								pass.addClass("border-danger");
								$("#p_error").html("<span class = 'text-danger'>Please Enter ...</span>");
								status = false;
							}else{
								$(".overlay").hide();
								console.log(data);
								window.location.href = DOMAIN+"/dashboard.php";
							}
						}
					})
		}

	})
	//Fetch category
	fetch_category();
	function fetch_category(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {getCategory:1},
			success : function(data){
				var root = "<option value ='0'>Root</option>";
				$("#parent_cat").html(root+data);
			}
		})
	}

})
