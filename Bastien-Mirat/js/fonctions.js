 $(document).ready(function() {
   mail();
   login();
   pass();
   query();


 });

 $(function(){
   $('#date').datepicker({
     inline: true,
     showOtherMonths: true,
     changeMonth: true,
     changeYear: true,
                             yearRange: "-100:+0",
     maxDate: '0',
     dateFormat: 'yy-mm-dd',
     dayNamesMin: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                             monthNames: ['Janvier','F&eacute;vrier','Mars','Avril','Mai','Juin',
     'Juillet','Ao&ucirc;t','Septembre','Octobre','Novembre','D&eacute;cembre'],

       minDate: '-100Y',

   });
 });

function mail(){


  //result texts
  var checking_html = 'Checking...';

  //when submit is clicked
  $('#mail').change(function(){
      $('#mail_result').html(checking_html);
      check_mail();

  });
}

function check_mail(){

   //get the mail
   var mail = $('#mail').val();

   //use ajax to run the check
   $.post("ajax/check_mail.php", { mail: mail },
     function(result){
       //if the result is 1
       if(result == 1){
         //show that the mail is available
         $('#mail_result').html('<p style="color: #66cc66"><b>' +mail + '</b> est disponible</p>');
         document.getElementById("submit").disabled = false;
       }else{
         //show that the mail is NOT available
         $('#mail_result').html('<p style="color: #ff6666"><b>' +mail + "</b> n'est pas disponible</p>");
         document.getElementById("submit").disabled = true;
       }
   });

}

function login(){
		//the min chars for login
		var min_chars = 3;

		//result texts
		var characters_error = '<p style="color: #ff6666">Votre Login doit mesurer au moins 3 caract&egrave;res</p>';
		var checking_html = 'Checking...';

		//when submit is clicked
		$('#login').change(function(){
			//run the character number check
			if($('#login').val().length < min_chars){
				//if it's bellow the minimum show characters_error text
				$('#login_result').html(characters_error);
			}else{
				//else show the cheking_text and run the function to check
				$('#login_result').html(checking_html);
				check_login();
			}
		});


  };

//function to check login availability
function check_login(){

		//get the login
		var login = $('#login').val();

		//use ajax to run the check
		$.post("ajax/check_login.php", { login: login },
			function(result){
				//if the result is 1
				if(result == 1){
					//show that the login is available
					$('#login_result').html('<p style="color: #66cc66"><b>' +login + '</b> est disponible</p>');
          document.getElementById("submit").disabled = false;
				}else{
					//show that the login is NOT available
					$('#login_result').html('<p style="color: #ff6666"><b>' +login + "</b> n'est pas disponible</p>");
          document.getElementById("submit").disabled = true;
				}
		});

}

function pass(){
  //the min chars for password
  var min_chars = 3;

  //result texts
  var characters_error = '<p style="color: #ff6666">Votre mot de passe doit mesurer au moins 3 caract&egrave;res</p>';
  var checking_html = '<p style="color: #66ee66">Mot de passe correct';

  //when submit is clicked
  $('#password').change(function(){
    //run the character number check
    if($('#password').val().length < min_chars){
      //if it's bellow the minimum show characters_error text
      $('#password_result').html(characters_error);
      document.getElementById("submit").disabled = true;
    }else{
      //else show the cheking_text and run the function to check
      $('#password_result').html(checking_html);
      document.getElementById("submit").disabled = false;

    }

  });
};

function checkPass()
{
    //Store the password field objects into variables ...
    var password = document.getElementById('password');
    var password2 = document.getElementById('password2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(password.value == password2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        password2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Mots de passe identiques"
        document.getElementById("submit").disabled = false;
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Mots de passe non identiques!"
        document.getElementById("submit").disabled = true;
    }
}


function query(){


  //result texts

  var checking_html = 'Checking...';

  //when submit is clicked
  $('#query').change(function(){
      $('#query_result').html(checking_html);
      check_query();

  });
}

function check_query(){

   //get the mail
   var query = $('#query').val();

   //use ajax to run the check
   $.post("ajax/check_query.php", { query: query },
     function(result){
       //if the result is 1
       if(result == 1){
         //show that the mail is available
         $('#query_result').html('<p style="color: #66cc66">Requète correcte</p>');
         document.getElementById("submit").disabled = false;
       }else{
         //show that the mail is NOT available
         $('#query_result').html('<p style="color: #ff6666">Requète incorrecte<br>('+ result +')</p>');
         document.getElementById("submit").disabled = true;
       }
   });

}

function verif_champ(champs) 
{
if (mots_cles == "")
{ alert("Un champ n'est pas remplie");
return false;
}
return true;
}
