<script src="<?php echo base_url();?>/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/lib/jqueryui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>/lib/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url();?>/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>/lib/js-cookie/js.cookie.js"></script>
    <script src="<?php echo base_url();?>/lib/jquery.flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>/lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>/lib/jquery.flot/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url();?>/lib/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="<?php echo base_url();?>/lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="<?php echo base_url();?>/lib/prismjs/prism.js"></script>

    <script src="<?php echo base_url();?>/assets/js/cassie.js"></script>
    <script src="<?php echo base_url();?>/assets/js/flot.sampledata.js"></script>
		<script src="<?php echo base_url();?>/lib/select2/js/select2.min.js"></script>

    <script src="<?php echo base_url();?>/lib/js-cookie/js.cookie.js"></script>
		<script src="<?php echo base_url();?>/lib/parsleyjs/parsley.min.js"></script>
    <script src="<?php echo base_url();?>/lib/jquery-steps/build/jquery.steps.min.js"></script>

    <script src="<?php echo base_url();?>/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>

		<script src="<?php echo base_url();?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
		

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyC2UeAkWponwGldkcV9BP24ljl2v81Zvos",
    authDomain: "delnix-eproject.firebaseapp.com",
    projectId: "delnix-eproject",
    storageBucket: "delnix-eproject.appspot.com",
    messagingSenderId: "1091007505591",
    appId: "1:1091007505591:web:f1493697965fd101345932",
    measurementId: "G-BT9K9NYTQH"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>


		<script>
			$(function () {
    $('table.table1 tr').click(function () {
        window.location.href = $(this).data('url');
    });
})
		</script>


<script>
	    $(document).ready(function(){
          
		

          $("#confirm_password1").bind('keyup change', function(){
			// alert('f');

            check_Password1( $("#password1").val(), $("#confirm_password1").val() )
            
          })

        //   $("#sign_in_btn").click(function(){

        //     check_Password( $("#password").val(), $("#confirm_password").val() )

        //   })
        })

        function check_Password1(Pass, Con_Pass){
			// alert(1);

			if(Con_Pass === ""){
				document.getElementById("btnChange").disabled = true;
			}
          if(Pass === ""){

			document.getElementById("btnChange").disabled = true;
          }
		  if(Pass !== Con_Pass){
			document.getElementById("btnChange").disabled = true;
		  }
		  
		  else if( Pass === Con_Pass){
			// alert(2);

            // $("#sign_in_btn").removeAttr("onclick")
            $('#confirm_password_msg1').show()
            $("#confirm_password_msg1").html('<div class="alert alert-success">Password matched</div>')
			document.getElementById("btnChange").disabled = false;
            setTimeout(function() {
                $('#confirm_password_msg1').fadeOut('slow');
            }, 3000);

          }else{
            $("#confirm_password1").focus()
            $('#confirm_password_msg1').show()
            $("#confirm_password_msg1").html('<div class="alert alert-danger">Password didnot matched</div>')
			document.getElementById("btnChange").disabled = true;
            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            });

          }

        }
</script>
<script>
	function checkValidPwd(){

		var x = document.getElementById("password1").value;
		var y = document.getElementById("confirm_password1").value;

		if(x != y){
			document.getElementById("btnChange").disabled = true;
			$("#confirm_password_msg1").html('<div class="alert alert-danger">Password didnot matched</div>')
		}

		if(x  == ""){
			$('#new_password').html("<h6>*Password cannot be empty</h6>");
			document.getElementById("btnChange").disabled = true;

		}

		if(x.length < 8){
			document.getElementById("btnChange").disabled = true;
		}
		else if(y == ""){
			document.getElementById("btnChange").disabled = true;
		}


		

	}
</script>
<script>
	 $(document).ready(function(){
          
		var email_state = false;

          $("#password1").bind('keyup change', function(){

			// alert($("#username_client").val());

            checkPwd( $("#password1").val())
            
          })
					function checkPwd(password){

						$.ajax({

							type:'POST',
							url: '<?php echo base_url();?>index.php/ClientInfo/checkPassword',
							data: 'password=' + password,
							// success:function(html)
							success: function (response){
	
							// alert(response);
								if(response == 'exit' ){
									$('#new_password').html("<h6>*Password already taken</h6>");
									document.getElementById("btnChange").disabled = true;

									// document.getElementById("email1").setAttribute('required','');
									// alert('hoi');
									
								}
								else{
									document.getElementById("new_password").innerHTML = '';
									document.getElementById("btnChange").disabled = false;
								}
								$('#service').html(html);
							}
						});

					}
         
        })
</script>


	<script>
// $(document).ready(function(){
// 	$('#pwd2').on('blur', function() {
//     alert("This input field has lost its focus.");
//   });
// });

$("#password1").on('blur', function(){
			// alert('f');

            check_Password1( $("#password1").val(), $("#confirm_password1").val() )
            
	})

	function check_Password1(Pass, Con_Pass){
			// alert(1);

          if(Pass === ""){

        
          }else if( Pass === Con_Pass){
			// alert(2);

            // $("#sign_in_btn").removeAttr("onclick")
            $('#confirm_password_msg1').show()
            $("#confirm_password_msg1").html('<div class="alert alert-success">Password matched</div>')
			document.getElementById("btnChange").disabled = false;
            setTimeout(function() {
                $('#confirm_password_msg1').fadeOut('slow');
            }, 3000);

          }else{
            $("#confirm_password1").focus()
            $('#confirm_password_msg1').show()
            $("#confirm_password_msg1").html('<div class="alert alert-danger">Password didnot matched</div>')
			document.getElementById("btnChange").disabled = true;
            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            });

          }

        }
</script>


		<script>
			
$(function() {

$(".progress").each(function() {

	var value = $(this).attr('data-value');
	var left = $(this).find('.progress-left .progress-bar');
	var right = $(this).find('.progress-right .progress-bar');

	if (value > 0) {
		if (value <= 50) {
			right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
		} else {
			right.css('transform', 'rotate(180deg)')
			left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
		}
	}

})

function percentageToDegrees(percentage) {

	return percentage / 100 * 360

}

});
</script>


<script>
	$(document).ready(function(){

		$(document).on('click', '#next1', function () {
		
			var email = $('#email1').val();
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();

			// alert(email);
			// alert(firstname);
			// alert(lastname);
			
				if(firstname == "") {

					document.getElementById("next1").disabled = true;
					$('#fmsg').html("<h6>*Please Enter First Name</h6>");

				}

				if(lastname == "") {

						document.getElementById("next1").disabled = true;
						$('#lmsg').html("<h6>*Please Enter Last Name</h6>");

						// return false;
					}

					if (email.length == 0) {

						document.getElementById("next1").disabled = true;

						$('#message1').html("<h6>*Please Enter Email</h6>");

			 }

		});

	});




</script>

<!-- <script>
	$(document).ready(function(){

		var email = $('#email1').val();
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();

			if(email !== "" && firstname !== "" && lastname !== ""){
				alert('ok');
			 	document.getElementById("next1").disabled = false;
			 }
	});
</script> -->

<script>

	$(document).ready(function(){

		$(document).on('click', '#next5', function () {

				// alert(document.getElementById("country").value);
				// alert($('#country').val());
				var company = $('#company').val();
				var industry = $('#industry').val();
				var noEmp = $('#noEmp').val();
				var country = $('#country').val();
				var mobile = $('#mobile-client').val();
				// var selectErr = $('#Comsg').val();
				
				// if((company == "") || (industry == "") || (noEmp == "") || (mobile.length == 0) || (country == 0) ){
				// 	alert('empty all');
				// 	alert(mobile);
				// 	document.getElementById("next5").disabled = true;
				// }
				if(company == "") {
				// alert(company);

					
					$('#Cmsg').html("<h6>*Please Enter Company</h6>");
					document.getElementById("next5").disabled = true;
					
				}
				

				if(industry == "") {

				
					$('#Imsg').html("<h6>*Please Enter Industry</h6>");
					document.getElementById("next5").disabled = true;

				}

				if(noEmp == "") {

					
					$('#Emsg').html("<h6>*Please Enter number of employees</h6>");
					document.getElementById("next5").disabled = true;

				}

				if(mobile == "") {

					$('#message3').html("<h6>*Please Enter phone number</h6>");
					document.getElementById("next5").disabled = true;

				}

				if(country == 0) {
					// alert('d');
					document.getElementById("next5").disabled = true;
					$('#Comsg').html("<h6>*Please Select Country</h6>");

				}




		});

	});
</script>

<script>
	 $(document).ready(function(){
          
					var email_state = false;

						$("#firstname").bind('keyup change', function(){

							if($("#firstname").val() != "" ){
								$('#fmsg').html("<h6></h6>");
								document.getElementById("next1").disabled = false;
							}

						})

						$("#lastname").bind('keyup change', function(){

							if($("#lastname").val() != "" ){
								$('#lmsg').html("<h6></h6>");
								document.getElementById("next1").disabled = false;
								
							}

						})

					$("#email1").bind('keyup change', function(){

									if($("#email1").val() != "" ){
											$('#lmsg').html("<h6></h6>");

											var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

											if( $("#email1").val().match(mailformat))
											{	

												checkEmail( $("#email1").val());
								
											}
											else{

												$('#message1').html("<h6>*Please Valid Enter Email</h6>");
												document.getElementById("next1").disabled = true;
											}
									}

									else{
										$('#message1').html("<h6>*Please Enter Email</h6>");
										document.getElementById("next1").disabled = true;
									}

									function checkEmail(email){

											$.ajax({

												type:'POST',
												url: '<?php echo base_url();?>index.php/Client/validEmail',
												data: 'email=' + email,
												// success:function(html)
												success: function (response){

													
												// alert(response);
													if(response == 'taken' ){

														$('#message1').html("<h6>*Email Exit</h6>");
														document.getElementById("next1").disabled = true;
														
														
													}
													else{

														
														document.getElementById("message1").innerHTML = '';
														document.getElementById("next1").disabled = false;
													}
													// $('#service').html(html);
												}
											});

}

					})

					
         
        })
</script>

<script>
	 $(document).ready(function(){


		$("#company").bind('keyup change', function(){

			if($("#company").val() != "" ){
				$('#Cmsg').html("<h6></h6>");
				document.getElementById("next5").disabled = false;
			}
			else{
				$('#Cmsg').html("<h6>Please enter Company</h6>");
				document.getElementById("next5").disabled = true;
			}

		})

		$("#industry").bind('keyup change', function(){

			if($("#industry").val() != "" ){
				$('#Imsg').html("<h6></h6>");
				document.getElementById("next5").disabled = false;
			}
			else{
				$('#Imsg').html("<h6>Please enter Industry</h6>");
				document.getElementById("next5").disabled = true;
			}

		})

		$("#noEmp").bind('keyup change', function(){

		if($("#noEmp").val() != "" ){
			$('#Emsg').html("<h6></h6>");
			document.getElementById("next5").disabled = false;
		}else{
			$('#Emsg').html("<h6>Please enter Number of Employee</h6>");
			document.getElementById("next5").disabled = true;
		}

		})

		// if((document.getElementById("country").selectedIndex) > 0){

		// 	$('#Comsg').html("<h6></h6>");
		// 	document.getElementById("next5").disabled = false;
		// }

		$("#country").bind('change', function(){

			if($("#country").val() > 0){
				$('#Comsg').html("<h6></h6>");
				document.getElementById("next5").disabled = false;
			}
			else{
				$('#Comsg').html("<h6>Please select Country</h6>");
				document.getElementById("next5").disabled = true;
			}
			
			// document.getElementById("next5").disabled = false;

		})
		
		$("#mobile-client").bind('keyup change', function(){

		if($("#mobile-client").val() != "" ){
			$('#message3').html("<h6></h6>");
			document.getElementById("next5").disabled = false;
		}else{
			$('#message3').html("<h6>Please enter  Conatct number</h6>");
			 document.getElementById("next5").disabled = true;
		}

		})

								var email_state = false;
								$("#mobile-client").bind('keyup change', function(){
			
									if($("#mobile-client").val() ==""){

										$('#message3').html("<h6>*Please enter Contact Number</h6>");
										document.getElementById("next5").disabled = true;
									}
									else{
										checkEmail( $("#mobile-client").val());
									}
									
									
								})
			
								function checkEmail(mobile){
			
								if(mobile.length != 10){

									$('#message3').html("<h6>*Contact not valid</h6>");
									document.getElementById("next5").disabled = true;
								}
								else{
									$('#message3').html("<h6></h6>");
									document.getElementById("next5").disabled = false;

								}
			
								}
							 
							})
</script>



<!-- <script>

$(document).ready(function(){

		var company = $('#company').val();
		var industry = $('#industry').val();
		var noEmp = $('#noEmp').val();
		// var country = $('#country').val();
		var mobile = $('#mobile-client').val();



	
});
</script> -->
<script>
	 $(document).ready(function(){
          
				var email_state = false;

          $("#username_client").bind('keyup change', function(){

			// alert($("#username_client").val());
            checkEmail1( $("#username_client").val())
            
          })
					function checkEmail1(username){

						$.ajax({

							type:'POST',
							url: '<?php echo base_url();?>index.php/Client/validUsername',
							data: 'username=' + username,
							// success:function(html)
							success: function (response){
	
							// alert(response);
								if(response == 'taken' ){
									$('#message2').html("<h6>*Username Exit</h6>");
									document.getElementById("btnSignup").disabled = true;

									// document.getElementById("email1").setAttribute('required',''); 
									// alert('hoi');
									
								}
								else{
									document.getElementById("message2").innerHTML = '';
									document.getElementById("btnSignup").disabled = false;
								}
								// $('#service').html(html);
							}
						});

					}
         
        })
</script>

		<script>
	        $(document).ready(function(){
          
          $("#confirm_password").bind('keyup change', function(){

            check_Password( $("#password").val(), $("#confirm_password").val() )
            
          })

          $("#sign_in_btn").click(function(){

            check_Password( $("#password").val(), $("#confirm_password").val() )

          })
        })

        function check_Password( Pass, Con_Pass){

          if(Pass === ""){

        
          }else if( Pass === Con_Pass){

            $("#sign_in_btn").removeAttr("onclick")
            $('#confirm_password_msg').show()
            $("#confirm_password_msg").html('<div class="alert alert-success">Password matched</div>')
			document.getElementById("btnSignup").disabled = false;
            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            }, 3000);

          }else{
            $("#confirm_password").focus()
            $('#confirm_password_msg').show()
            $("#confirm_password_msg").html('<div class="alert alert-danger">Password didnot matched</div>')
			document.getElementById("btnSignup").disabled = true;
            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            });

          }

        }
	</script>


<script>
	function checkEmpty(){

				
	if(company == "") {

	document.getElementById("next2").disabled = true;
	$('#Cmsg').html("<h6>*Please Enter Company</h6>");

	}
	
}
</script>

<script>

$(document).ready(function(){

	
});

</script>

<script>
    $(document).ready(function(){
			$("#btnCheck").click(function () {
		
            //Reference the CheckBoxes and determine Total Count of checked CheckBoxes.
            var checked = $("input[type=checkbox]:checked").length;
			// alert(checked);
 
            if (checked > 0) {
							var a = document.getElementById('my'); //or grab it by tagname etc
							a.href = "#modal6";
                // alert(checked + " CheckBoxe(s) are checked.");
                return true;
            } else {
                alert("Please select CheckBoxe(s).");
                return false;
            }
        });
				
    });
</script>

<script>
$(document).ready(function(){
		$("#btnCheck1").click(function () {
						// alert('df');
            //Reference the CheckBoxes and determine Total Count of checked CheckBoxes.
            var checked = $("input[type=checkbox]:checked").length;
						

            if (checked > 0) {

						// var selected = new Array();
						// var tblFruits = document.getElementById("tblFruits");
						// var chks = document.getElementsByTagName("INPUT");
						// let no = chks.length;
						// alert(no);

						// for (var i = 0; i < chks.length; i++) {
						// 	if (chks[i].checked) {
						// 			selected.push(chks[i].value);
						// 	}
        		// }

						
						// alert("Selected values: " + selected.join(","));

							var a = document.getElementById('link2'); //or grab it by tagname etc
							a.href = "#modal7";
							
              return true;

            } else {
                alert("Please select CheckBoxe(s).");
                return false;
            }
        });

			});
</script>

<script>
		$(document).ready(function(){

			$('#project_i').on('change',function(){

						var project_id = $(this).val();
						// alert(project_id);

						var selected = [];
						var tblFruits = document.getElementById("tblFruits");
						var chks = document.getElementsByTagName("INPUT");
						// alert(chks);
						// let no = chks.length;
						// alert(no);

						for (var i = 0; i < chks.length; i++) {
							if (chks[i].checked) {
									selected.push(chks[i].value);
							}
						}
						// alert(selected);
						// alert("Selected values: " + selected.join(","));
						// document.getElementById("check2").innerHTML = selected;
				
						$.ajax({

							type:'POST',
							url: '<?php echo base_url();?>index.php/ClientPackage/checkPackage',
							data: {

									'project_id': project_id,
									'selected': selected,

							},
							
							success: function(html) {
               	// alert(html.length);
										var err = html;
										
										if (err.length < 10){
											// alert(err.length);
											$('#check3').html("");
											document.getElementById("btnAdd").disabled = false;
										}
										else{
											// alert(err);
											$('#check3').html(err);
											document.getElementById("btnAdd").disabled = true;
										}
										
                    // $('#check3').html(html);
										
									
										
										// if()
										
                    //  $('#subcat').html('<option value="">'+html+'</option>'); 
              }
							
						});

			});
			// function checkMsg(){
			// 				var errorMsg = document.getElementById("check3");
			// 							if(errorMsg){
			// 								alert('ho');
			// 							}
			// 							else{
			// 								alert('null');
			// 							}
			// 			}
		});


</script>

<script>
	$(document).ready(function(){

		$("#btnClear").click(function() {
			let color_select = $('select#project_i');
			color_select.val("");
			var msg = "";
			$('#check3').html(msg);

		});

	});
</script>

<script>
		$(document).ready(function(){

			$('#service_i').on('change',function(){

						var project_id = $(this).val();
						// alert(project_id);

						var selected = [];
						var tblFruits = document.getElementById("servicecard");
						var chks = document.getElementsByTagName("INPUT");
						// let no = chks.length;
						// alert(no);

						for (var i = 0; i < chks.length; i++) {
							if (chks[i].checked) {
									selected.push(chks[i].value);
							}
						}
						// alert(selected);
						// alert("Selected values: " + selected.join(","));
						// document.getElementById("check4").innerHTML = selected;
				
						$.ajax({

							type:'POST',
							url: '<?php echo base_url();?>index.php/ClientService/checkService',
							data: {

									'project_id': project_id,
									'selected': selected,

							},
							
							success: function(html) {
               	// alert(html);

										var err = html;
										// alert(err.length);
										if(err.length < 10){
											
											$('#errorService').html("");
											document.getElementById("btnAddService").disabled = false;
										}
										else{
											// alert(err);
											$('#errorService').html(err);
											document.getElementById("btnAddService").disabled = true;
										}
										
                    // $('#check3').html(html);
										
									
										
										// if()
										
                    //  $('#subcat').html('<option value="">'+html+'</option>'); 
              }
							
						});

			});
			// function checkMsg(){
			// 				var errorMsg = document.getElementById("check3");
			// 							if(errorMsg){
			// 								alert('ho');
			// 							}
			// 							else{
			// 								alert('null');
			// 							}
			// 			}
		});


</script>

<script>
	$(document).ready(function(){

		$("#btnClearService").click(function() {
			let color_select = $('select#service_i');
			color_select.val("");
			var msg = "";
			$('#errorService').html(msg);

		});

	});
</script>

<script>
	$(document).ready(function(){
		
		var i=1;

		$("#btnClearService1").click(function() {
			let color_select = $('select#service_id_'+i);
			let team = $('select#teams_no_'+i);
			color_select.val("");
			team.val("");
			team.css({ 'color': 'black', 'background-color': 'white' });
			color_select.css({ 'color': 'black', 'background-color': 'white' });


			$.ajax({

				type:'POST',
				url: '<?php echo base_url();?>index.php/ClientProject/getTeams',
				// data: 'category_id=' + category_id,
				success:function(html){

					color_select.val("");
					$('#teams_no_'+i).html(html);
					$('#service_id_'+i).html("<option disabled selected>-- Choose Service --</option>");


				}
			});

			
			
			var msg = "";
			$('#errorService').html(msg);

		});

	});
</script>
<script>
		$(document).ready(function(){
		
		var i=1;

		$("#btnClearService4").click(function() {
			let color_select = $('select#service');
			let team = $('select#category');
			color_select.val("");
			team.val("");
			team.css({ 'color': 'black', 'background-color': 'white' });
			color_select.css({ 'color': 'black', 'background-color': 'white' });


			$.ajax({

				type:'POST',
				url: '<?php echo base_url();?>index.php/ClientProject/getTeams',
				// data: 'category_id=' + category_id,
				success:function(html){

					color_select.val("");
					
					$('#category').html(html);
					$('#service').html("<option disabled selected>-- Choose Service --</option>");

					


				}
			});

			
			
			var msg = "";
			$('#errorService').html(msg);

		});

	});
</script>

<script>
	$(document).ready(function(){
		
		var i=1;

		$("#btnClearPackage4").click(function() {
			let color_select1 = $('select#package');
			let team1 = $('select#team2');
			color_select1.val("");
			team1.val("");
			team1.css({ 'color': 'black', 'background-color': 'white' });
			color_select1.css({ 'color': 'black', 'background-color': 'white' });

			$.ajax({

				type:'POST',
				url: '<?php echo base_url();?>index.php/ClientProject/getTeams',
				// data: 'category_id=' + category_id,
				success:function(html){

					color_select1.val("");
					$('#team2').html(html);
					$('#package').html("<option disabled selected>-- Choose Package --</option>");


				}
			});
			var msg = "";
			$('#errorService').html(msg);

		});

	});
</script>
<script>
	$(document).ready(function(){
		
		var i=1;

		$("#btnClearPackage1").click(function() {
			let color_select1 = $('select#package_id_'+i);
			// alert(color_select1);
			let team1 = $('select#teams_no1_'+i);
			color_select1.val("");
			team1.val("");
			team1.css({ 'color': 'black', 'background-color': 'white' });
			color_select1.css({ 'color': 'black', 'background-color': 'white' });

			$.ajax({

				type:'POST',
				url: '<?php echo base_url();?>index.php/ClientProject/getTeams',
				// data: 'category_id=' + category_id,
				success:function(html){

					color_select1.val("");
					$('#teams_no1_'+i).html(html);
					$('#package_id_'+i).html("<option disabled selected>-- Choose Package --</option>");


				}
			});
			var msg = "";
			$('#errorService').html(msg);

		});

	});
</script>

<script>
	$(document).ready(function() {
		var i=1;

		$('#teams_no_'+i).on('change', function() {
		
		var category_id = $(this).val();
		//    alert(category_id);

		$.ajax({
		type: 'POST',
		url: '<?php echo base_url();?>index.php/ClientProject/selectServices',
		data: 'category_id=' + category_id,
		success: function(html) {
		// alert(html);

				
					$('#service_id_'+i).html(html);

			// $('#service_'+i).html(html);
			//  $('#subcat').html('<option value="">'+html+'</option>'); 
		}
		});

		});
});
</script>

<script>
	$(document).ready(function() {
		var i=1;

		$('#teams_no1_'+i).on('change', function() {
		
		var team_id = $(this).val();
		//    alert(category_id);

		$.ajax({
		type: 'POST',
		url: '<?php echo base_url();?>index.php/ClientProject/selectPackages',
		data: 'team_id=' + team_id,
		// alert(data);
		success: function(html) {
		// alert(i);

				
				$('#package_id_'+i).html(html);

			// $('#service_'+i).html(html);
			//  $('#subcat').html('<option value="">'+html+'</option>'); 
		}
		});

		});
});
</script>

<!-- <script>
$(document).ready(function(){
	

	$("#check3").bind('keyup change', function(){
			const span = document.getElementById('check3');
			// alert(span);
			alert(span.childNodes.length);
								if (span.childNodes.length === 0) {
									document.getElementById("btn-addto").disabled = true;
								}
								// if((document.getElementById("check3").value)==""){
									
								// }
								else{
									document.getElementById("btn-addto").disabled = true;
						}
					});
				});
</script> -->
<script>



// $(document).ready(function(){
	

	

// 			$("#btn-addto").click(function () {


// 				alert('d');

// 				var errorMsg = document.getElementById("check3");

// 				if(errorMsg){
// 					alert('Please remove exiting package');
// 					document.getElementById("btn_addtoproj").disabled = true;
// 				}
// 				else{
// 					document.getElementById("btn_addtoproj").disabled = false;
// 				}


// 			});
// 		});	


// </script>

<script>
        $('#wizard2').steps({
			
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var lname = $('#lastname').parsley();
								var email = $('#email').parsley();
								// var email = $('#email_address').parsley();
								// alert(email);
                if(fname.isValid() && lname.isValid()  && email.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
									email.validate();
                }
								
               

              }

              // Step 2 form validation
              if(currentIndex === 1) {
               
              }
							if(currentIndex === 2) {
                $('a[href^="http://localhost/eproject/index.php/Client/#finish"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("http://", "http://localhost/eproject/index.php/Client/save"); // Create new url
            $(this).attr("href", newUrl); // Set herf value
        });
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });
  </script>

<script>

	function check(){

		var x = document.getElementById("datepicker5");
		if(x.style.display === "none"){
			x.style.display = "block";
		}
		else{
			x.style.display = "none";
		}
		
	}
</script>

<script>
	function check1(){
		var y = document.getElementById("datepicker5");
		if(y.style.display === "block"){
			y.style.display = "none";
		}
		else{
			y.style.display = "none";
		}
	}
</script>


<script>
      $(function(){
        'use strict'

        // File Browser
        $('#customFile').on('change', function(){
          var va = $(this).val().split('\\');
          $(this).next().text(va[2]);
        })

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

      });
    </script>

    <script>
      $(function(){

        'use strict'

        // $.plot('#flotChart1', [{
        //   data: df1,
        //   color: '#38c4fa'
        // }], {
        //   series: {
        //     shadowSize: 0,
        //     lines: {
        //       show: true,
        //       lineWidth: 1.5,
        //       fill: true,
        //       fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
        //     },
        //     points: {
        //       show: false,
        //       radius: 2,
        //       lineWidth: 1.5
        //     }
        //   },
        //   grid: {
        //     borderWidth: 0,
        //     labelMargin: 0,
        //   },
        //   yaxis: { show: false },
        //   xaxis: {
        //     show: false,
        //     min: 40,
        //     max: 80
        //   }
        // });

        // $.plot('#flotChart2', [{
        //   data: df1,
        //   color: '#22d273'
        // }], {
        //   series: {
        //     shadowSize: 0,
        //     lines: {
        //       show: true,
        //       lineWidth: 1.5,
        //       fill: true,
        //       fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
        //     },
        //     points: {
        //       show: false,
        //       radius: 2,
        //       lineWidth: 1.5
        //     }
        //   },
        //   grid: {
        //     borderWidth: 0,
        //     labelMargin: 0,
        //   },
        //   yaxis: { show: false },
        //   xaxis: {
        //     show: false,
        //     min: 20,
        //     max: 60
        //   }
        // });

        // $.plot('#flotChart3', [{
        //   data: df1,
        //   color: '#e83e8c'
        // }], {
        //   series: {
        //     shadowSize: 0,
        //     lines: {
        //       show: true,
        //       lineWidth: 1.5,
        //       fill: true,
        //       fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
        //     },
        //     points: {
        //       show: false,
        //       radius: 2,
        //       lineWidth: 1.5
        //     }
        //   },
        //   grid: {
        //     borderWidth: 0,
        //     labelMargin: 0,
        //   },
        //   yaxis: { show: false },
        //   xaxis: {
        //     show: false,
        //     min: 60,
        //     max: 100
        //   }
        // });

        // $.plot('#flotChart4', [{
        //   data: df1,
        //   color: '#fd7e14'
        // }], {
        //   series: {
        //     shadowSize: 0,
        //     lines: {
        //       show: true,
        //       lineWidth: 1.5,
        //       fill: true,
        //       fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
        //     },
        //     points: {
        //       show: false,
        //       radius: 2,
        //       lineWidth: 1.5
        //     }
        //   },
        //   grid: {
        //     borderWidth: 0,
        //     labelMargin: 0,
        //   },
        //   yaxis: { show: false },
        //   xaxis: {
        //     show: false,
        //     min: 100,
        //     max: 140
        //   }
        // });

        // card-calendar-one widget
        $('#datepicker1').datepicker({
          showOtherMonths: true
        });

        const scroll1 = new PerfectScrollbar('#scroll1', {
          suppressScrollX: true
        });
        const scroll2 = new PerfectScrollbar('#scroll2', {
          suppressScrollX: true
        });

		const scroll3 = new PerfectScrollbar('#scroll3', {
          suppressScrollX: true
        });

		$('.select2').select2({
          placeholder: 'Choose one',
          searchInputPlaceholder: 'Search options'
        });

        // Disable search
        $('.select2-no-search').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one'
        });

        // Clearable selection
        $('.select2-clear').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          allowClear: true
        });

        // Limit selection
        $('.select2-limit').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one',
          maximumSelectionLength: 2
        });

        // $('#example11').DataTable({
        //   language: {
        //     searchPlaceholder: 'Search...',
        //     sSearch: '',
        //     lengthMenu: '_MENU_ items/page',
        //   }
        // });

       

        // // Select2
        // $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      })
     
     
    </script>

<script>
	$(document).ready(function(){

		// var $y = $('#category').val();
		// alert($y);

		$('#category').on('change',function(){

			var category_id = $(this).val();

			$.ajax({

				type:'POST',
				url: '<?php echo base_url();?>index.php/ClientProject/selectServices',
				data: 'category_id=' + category_id,
				success:function(html){
					$('#service').html(html);
				}
			});
		});
	});
</script>
<script>
	$(document).ready(function(){
		// var i=1;
		// var $y = $('#team').val();
		// alert($y);

		$('#team2').on('change',function(){

			var team_id = $(this).val();

			$.ajax({

				type:'POST',
				url: '<?php echo base_url();?>index.php/ClientProject/selectPackages',
				data: 'team_id=' + team_id,
				success:function(html){
					$('	#package').html(html);
				}
			});
		});
	});
</script>

<script>
$(document).ready(function(){
	var i=1;
	var b = 1;
	$('#add').click(function(){
	i++;
	b++;
	
	

	$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="hidden" id="data_id_'+b+'" value="'+b+'"></td><td><select class="custom-select m-input" style="border-radius:10px;width:26rem;margin-left:-30.5rem !important;font-size:13px;" name="service" id="category_'+i+'"><option selected>-- Choose Team --</option><?php foreach ($teams as $item){?><option value="<?php echo $item->team_id?>"><?php echo $item->name?></option><?php } ?></select></td><td><select class="custom-select m-input" style="border-radius:10px;width:26rem;margin-left:-32rem !important;font-size:13px;" id="service_'+i+'" name="service_id[]"><option selected>-- Choose Services --</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-dark text-white btn_remove" style="margin-left:-4.5rem !important;font-size:13px;"><span class="fa fa-trash"></button></td></tr>');
	var id = $('#data_id_'+b).val();
	$('#add').hide();
	$('#addS').show();

	$(document).ready(function() {
			$('#category_'+i).on('change', function() {
				
            var category_id = $(this).val();
			
           	// alert(id);

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>index.php/ClientProject/selectServices',
                data: 'category_id=' + category_id,
                success: function(html) {
               // alert(html);
					// alert(i);
					// alert(b);
						// alert(id);
					$('#service_'+id).html(html);
						// if(b == i){

						// 	alert('yes');
						// 	b = b - 1;
						// 	$('#service_'+b).html(html);
							

						// }

						// else{
						// 	// alert('no');
						// 	if(i > b ){
								
						// 		// alert(b);
						// 		// // alert(i);
						// 		// alert('yes');
						// 		alert('i wedi bt');
						// 		b = b + 1;
						// 		$('#service_'+b).html(html);
						// 		// b = b + 1;
						// 	}
						// 	else{
								
						// 		alert('i adui bt');
						// 		b = b - 1;
						// 		alert(b);
							
						// 		$('#service_'+b).html(html);
						// 	}
						// }
                    // $('#service_'+i).html(html);
                    //  $('#subcat').html('<option value="">'+html+'</option>'); 
                }
            });

        });
			});
				$('tbody').append(html);

});


				// $('tbody').append(html);

		
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});
});


</script>

<script>
$(document).ready(function(){
	var i=1;
	var b = 1;
	$('#addS').click(function(){
	i++;
	b++;
	
	

	$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="hidden" id="data_id_'+b+'" value="'+b+'"></td><td><select class="custom-select m-input" style="border-radius:10px;width:26rem;margin-left:-30.5rem !important;font-size:13px;" name="service" id="category_'+i+'"><option selected>-- Choose Team --</option><?php foreach ($teams as $item){?><option value="<?php echo $item->team_id?>"><?php echo $item->name?></option><?php } ?></select></td><td><select class="custom-select m-input" style="border-radius:10px;width:26rem;margin-left:-32rem !important;font-size:13px;" id="service_'+i+'" name="service_id[]"><option selected>-- Choose Services --</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-dark text-white btn_remove" style="margin-left:-4.5rem !important;font-size:13px;"><span class="fa fa-trash"></button></td></tr>');
	var id = $('#data_id_'+b).val();
	$('#add').hide();
	$('#addS').show();

	$(document).ready(function() {
			$('#category_'+i).on('change', function() {
				
            var category_id = $(this).val();
			
           	// alert(id);

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>index.php/ClientProject/selectServices',
                data: 'category_id=' + category_id,
                success: function(html) {
               // alert(html);
					// alert(i);
					// alert(b);
						// alert(id);
					$('#service_'+id).html(html);
						// if(b == i){

						// 	alert('yes');
						// 	b = b - 1;
						// 	$('#service_'+b).html(html);
							

						// }

						// else{
						// 	// alert('no');
						// 	if(i > b ){
								
						// 		// alert(b);
						// 		// // alert(i);
						// 		// alert('yes');
						// 		alert('i wedi bt');
						// 		b = b + 1;
						// 		$('#service_'+b).html(html);
						// 		// b = b + 1;
						// 	}
						// 	else{
								
						// 		alert('i adui bt');
						// 		b = b - 1;
						// 		alert(b);
							
						// 		$('#service_'+b).html(html);
						// 	}
						// }
                    // $('#service_'+i).html(html);
                    //  $('#subcat').html('<option value="">'+html+'</option>'); 
                }
            });

        });
			});
				$('tbody').append(html);

});


				// $('tbody').append(html);

		
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});
});


</script>

<script>
$(document).ready(function(){

	
	var i=1;
	var b = 1;
	$('#add1').click(function(){

	i++;
	b++;

	$('#dynamic_field1').append('<tr id="row'+i+'"><td><input type="hidden" id="data_id1_'+b+'" value="'+b+'"></td><td><select class="custom-select m-input" style="border-radius:10px;width:26rem;margin-left:-30.5rem !important;font-size:13px;" name="packages[]" id="team2_'+i+'">'+
	'<option selected>-- Choose Team --</option><?php foreach ($teams as $item){?><option value="<?php echo $item->team_id?>"><?php echo $item->name?></option><?php } ?></select></td><td><select class="custom-select m-input mx-4" style="border-radius:10px;width:26rem;margin-left:-32rem !important;font-size:13px;" id="package_'+i+'" name="package_id[]"><option  selected><span style="margin-left:-5rem !important;">-- Choose Packages --</span></option></select>'+
	'</td><td><button type="button" name="remove" id="'+i+'" class="btn btn-dark text-white btn_remove" style="margin-left:-4.5rem !important;font-size:13px;"><span class="fa fa-trash"></button></td></tr>');
	
	$('#add1').hide();
	$('#addP').show();
	
	
	var id = $('#data_id1_'+b).val();

	$(document).ready(function() {
			$('#team2_'+i).on('change', function() {
				
				
            var team_id = $(this).val();
			

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>index.php/ClientProject/selectPackages',
                data: 'team_id=' + team_id,
                success: function(html) {

					$('#package_'+id).html(html);
               // alert(html);
					// if(b == i){

					// 	// alert('yes');
					// 	$('#package_'+i).html(html);
						

					// }
					
					// else{
					// 	// alert('no');
					// 	if(i > b ){
							
					// 		// alert(b);
					// 		$('#package_'+b).html(html);
					// 		b = b + 1;
					// 	}
					// 	else{
					// 		b = b - 1;
					// 		// alert(b);
					// 		$('#package_'+b).html(html);
					// 	}
					// 	// // b = b + 1;
					// 	// alert(b);
						
					
						
						
					// }
					// i = i - 1;
                   

                    //  $('#subcat').html('<option value="">'+html+'</option>'); 
                }
				// b++;
				
            });
			
			

        });
			});


				$('tbody').append(html);
				// $('button').append('<button>Add</button>');



});


				// $('tbody').append(html);

		
$(document).on('click', '.btn_remove1', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});
});


</script>

<script>
	$(document).ready(function(){

	
var i=1;
var b = 1;
$('#addP').click(function(){

i++;
b++;

$('#dynamic_field1').append('<tr id="row'+i+'"><td><input type="hidden" id="data_id1_'+b+'" value="'+b+'"></td><td><select class="custom-select m-input" style="border-radius:10px;width:26rem;margin-left:-30.5rem !important;font-size:13px;" name="packages[]" id="team2_'+i+'">'+
'<option selected>-- Choose Team --</option><?php foreach ($teams as $item){?><option value="<?php echo $item->team_id?>"><?php echo $item->name?></option><?php } ?></select></td><td><select class="custom-select m-input mx-4" style="border-radius:10px;width:26rem;margin-left:-32rem !important;font-size:13px;" id="package_'+i+'" name="package_id[]"><option  selected><span style="margin-left:-5rem !important;">-- Choose Packages --</span></option></select>'+
'</td><td><button type="button" name="remove" id="'+i+'" class="btn btn-dark text-white btn_remove" style="margin-left:-4.5rem !important;font-size:13px;"><span class="fa fa-trash"></button></td></tr>');

$('#add1').hide();
$('#addP').show();


var id = $('#data_id1_'+b).val();

$(document).ready(function() {
		$('#team2_'+i).on('change', function() {
			
			
		var team_id = $(this).val();
		

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>index.php/ClientProject/selectPackages',
			data: 'team_id=' + team_id,
			success: function(html) {

				$('#package_'+id).html(html);
		   // alert(html);
				// if(b == i){

				// 	// alert('yes');
				// 	$('#package_'+i).html(html);
					

				// }
				
				// else{
				// 	// alert('no');
				// 	if(i > b ){
						
				// 		// alert(b);
				// 		$('#package_'+b).html(html);
				// 		b = b + 1;
				// 	}
				// 	else{
				// 		b = b - 1;
				// 		// alert(b);
				// 		$('#package_'+b).html(html);
				// 	}
				// 	// // b = b + 1;
				// 	// alert(b);
					
				
					
					
				// }
				// i = i - 1;
			   

				//  $('#subcat').html('<option value="">'+html+'</option>'); 
			}
			// b++;
			
		});
		
		

	});
		});


			$('tbody').append(html);
			// $('button').append('<button>Add</button>');



});


			// $('tbody').append(html);

	
$(document).on('click', '.btn_remove1', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
});
});
</script>

<!-- <script>

	var i = 1;

	$(document).on('click', '.btn_remove2', function(){
		i++;

		// alert(4);

		var button_id = $(this).attr("id"); 
		
		$('#package_id_'+i).remove();
		$('#teams_no1_'+i).remove();

		// var b = i +1;
		$('#btn_remove1_'+i).remove();
		// $('#btnClearService1').css({'margin-left' : '-10rem;'});
		

	});

</script> -->
<!-- <script>



	$(document).ready(function(){
		

		var i = 2;

		$('#btn_remove_'+i).click(function(){

		i++;


			alert(4);

			var button_id = $('#btn_remove_'+b).val();
			$('#service_id_'+button_id).remove();
			$('#teams_no_'+button_id).remove();

			// var b = i +1;
			$('#btn_remove_'+button_id).remove();
			// $('#btnClearService1').css({'margin-left' : '-10rem;'});
	});

	});


</script> -->
<script>

	var i = 1;

	$(document).on('click', '.btn_remove2', function(){
		i++;

		// alert(4);

		var button_id = $('#btn_remove_'+i).val(); 
		$('#service_id_'+button_id).remove();
		$('#teams_no_'+button_id).remove();

		// var b = i +1;
		$('#btn_remove_'+button_id).remove();
		// $('#btnClearService1').css({'margin-left' : '-10rem;'});
		

	});

</script>
<script>

	var i = 1;

	$(document).on('click', '.btn_remove22', function(){
		

		// alert(4);

		// var b = $('#count').val(); 
		// b++;
		
		// alert(b);

		var button_id = $('#btn_remove22_'+i).val(); 

		// var x = button_id - 1;
		// alert(button_id);

		$('#service_id1_'+button_id).remove();
		$('#teams_no2_'+button_id).remove();

		// var b = i +1;
		$('#btn_remove22_'+button_id).remove();
		// $('#btnClearService1').css({'margin-left' : '-10rem;'});

		i++;

	});

</script>

<script>

	var i = 1;

	$(document).on('click', '.btn_remove3', function(){
		i++;

		// alert(4);

		var button_id = $('#btn_remove1_'+i).val(); 
		$('#package_id_'+button_id).remove();
		$('#teams_no1_'+button_id).remove();

		// var b = i +1;
		$('#btn_remove1_'+button_id).remove();
		// $('#btnClearService1').css({'margin-left' : '-10rem;'});
		

	});

</script>
<script>

	var i = 1;

	$(document).on('click', '.btn_remove33', function(){
		

		// alert(4);

		var button_id = $('#btn_remove33_'+i).val(); 
		$('#package_id33_'+button_id).remove();
		$('#teams_no33_'+button_id).remove();

		// var b = i +1;
		$('#btn_remove33_'+button_id).remove();
		// $('#btnClearService1').css({'margin-left' : '-10rem;'});
		i++;


	});

</script>

<!-- <script>
	$(document).ready(function() {

			});
</script> -->
<script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
        $('#datepicker5').datepicker({
          showButtonPanel: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

				var citynames = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: '../assets/data/citynames.json',
			filter: function(list) {
			return $.map(list, function(cityname) {
				return { name: cityname }; });
			}
			}
		});

		citynames.initialize();

		$('#input2').tagsinput({
		typeaheadjs: {
			name: 'citynames',
			displayKey: 'name',
			valueKey: 'name',
			source: citynames.ttAdapter()
		}
		});

      });

      // addmoreFunction
      $("#rowAdder").click(function () {
            newRowAdd = 
            '<div id="row"> <div class="input-group m-3">' +
            '<div class="input-group-prepend">' +
            '<button class="btn btn-primary" id="DeleteRow" type="button">' +
            '<i class="bi bi-trash"></i>  Delete</button> </div>' +
            '<input type="text" class="form-control m-input"> '+
            ' <select class="custom-select m-input">'+
            '<option selected>Open this select menu</option>' +
            ' <option value="1">One</option>'+'<option value="2">Two</option></div> </div>';
  
            $('#newinput').append(newRowAdd);
        });
  
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
      
        // addmoreFunction
        $(function () {
            $(document).on('click', '.btn-add', function (e) {
                e.preventDefault();

                var controlForm = $('.controls:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash"></span>');
            }).on('click', '.btn-remove', function (e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
        });


        // addmoreFunction
        $(function () {
            $(document).on('click', '.btn-add1', function (e) {
                e.preventDefault();

                var controlForm = $('.controls1:first'),
                    currentEntry = $(this).parents('.entry1:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry1:not(:last) .btn-add1')
                    .removeClass('btn-add1').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash"></span>');
            }).on('click', '.btn-remove', function (e) {
                $(this).parents('.entry1:first').remove();

                e.preventDefault();
                return false;
            });
        });

        // addmoreFunction
        $(function () {
            $(document).on('click', '.btn-add2', function (e) {
                e.preventDefault();
								var firstP = document.getElementById("team_");
								$i=2;
								// firstP.setAttribute("id","team_".$i.);
                var controlForm = $('.controls2:first'),
                    currentEntry = $(this).parents('.entry2:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry2:not(:last) .btn-add2')
                    .removeClass('btn-add2').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash"></span>');
            }).on('click', '.btn-remove', function (e) {
                $(this).parents('.entry2:first').remove();

                e.preventDefault();
                return false;
            });
        });

        // addmoreFunction
        $(function () {
            $(document).on('click', '.btn-add3', function (e) {
                e.preventDefault();

                var controlForm = $('.controls3:first'),
                    currentEntry = $(this).parents('.entry3:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry3:not(:last) .btn-add3')
                    .removeClass('btn-add3').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash"></span>');
            }).on('click', '.btn-remove', function (e) {
                $(this).parents('.entry3:first').remove();

                e.preventDefault();
                return false;
            });
        });


    </script>

<script>
	https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
$("input#password1").on("focus keyup", function () {
         
});
 
$("input#password1").blur(function () {
         
});
$("input#password1").on("focus keyup", function () {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();
 
        // strength desc
        desc[0] = "Too short";
    desc[1] = "Weak";
    desc[2] = "Good";
    desc[3] = "Strong";
    desc[4] = "Best";
         
});
 
$("input#password1").blur(function () {
 
});
$("input#password1").on("focus keyup", function () {
        var score = 0;
        var a = $(this).val();
        var desc = new Array();
 
        // strength desc
        desc[0] = "Too short";
        desc[1] = "Weak";
        desc[2] = "Good";
        desc[3] = "Strong";
        desc[4] = "Best";
         
        // password length
        if (a.length >= 6) {
            $("#length").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#length").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 digit in password
        if (a.match(/\d/)) {
            $("#pnum").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#pnum").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 capital & lower letter in password
        if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
            $("#capital").removeClass("invalid").addClass("valid");
            score++;
        } else {
            $("#capital").removeClass("valid").addClass("invalid");
        }
 
        // at least 1 special character in password {
        if ( a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
                $("#spchar").removeClass("invalid").addClass("valid");
                score++;
        } else {
                $("#spchar").removeClass("valid").addClass("invalid");
        }
 
 
        if(a.length > 0) {
                //show strength text
                $("#passwordDescription").text(desc[score]);
                // show indicator
                $("#passwordStrength").removeClass().addClass("strength"+score);
        } else {
                $("#passwordDescription").text("Password not entered");
                $("#passwordStrength").removeClass().addClass("strength"+score);
			}
	});
	
	$("input#password1").blur(function () {
	
	});
	$("input#password1").on("focus keyup", function () {
			var score = 0;
			var a = $(this).val();
			var desc = new Array();
	
			// strength desc
			desc[0] = "Too short";
			desc[1] = "Weak";
			desc[2] = "Good";
			desc[3] = "Strong";
			desc[4] = "Best";
	
			$("#pwd_strength_wrap").fadeIn(400);
			
			// password length
			if (a.length >= 8) {
				$("#length").removeClass("invalid").addClass("valid");
				score++;
			} else {
				$("#length").removeClass("valid").addClass("invalid");
				document.getElementById("btnChange").disabled = true;
			}
	
			// at least 1 digit in password
			if (a.match(/\d/)) {
				$("#pnum").removeClass("invalid").addClass("valid");
				score++;
			} else {
				$("#pnum").removeClass("valid").addClass("invalid");
			}
	
			// at least 1 capital & lower letter in password
			if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
				$("#capital").removeClass("invalid").addClass("valid");
				score++;
			} else {
				$("#capital").removeClass("valid").addClass("invalid");
			}
	
			// at least 1 special character in password {
			if ( a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
					$("#spchar").removeClass("invalid").addClass("valid");
					score++;
			} else {
					$("#spchar").removeClass("valid").addClass("invalid");
			}
	
	
			if(a.length > 0) {
					//show strength text 
					$("#passwordDescription").text(desc[score]);
					// show indicator
					$("#passwordStrength").removeClass().addClass("strength"+score);
			} else {
					$("#passwordDescription").text("Password not entered");
					$("#passwordStrength").removeClass().addClass("strength"+score);
			}
	});
	
	$("input#password1").blur(function () {
			$("#pwd_strength_wrap").fadeOut(400);
	});
</script>

<script>
	var btn_save = $(".save-profile"),

	btn_edit = $(".edit-profile"),

	img_object = $(".img-object"),

	overlay = $(".media-overlay"),

	media_input = $("#media-input");



	btn_save.hide(0);

	overlay.hide(0);



	btn_edit.on("click", function() {

	$(this).hide(0);

	overlay.fadeIn(300);

	btn_save.fadeIn(300);

	});
	btn_save.on("click", function() {

	$(this).hide(0);

	overlay.fadeOut(300);

	btn_edit.fadeIn(300);

	});



	media_input.change(function() {

	if (this.files && this.files[0]) {

	var reader = new FileReader();

	

	reader.onload = function(e) {

		img_object.attr("src", e.target.result);
	};

	

	reader.readAsDataURL(this.files[0]);

	}

	});
</script>

<script>

</script>
<script>

  

	 $("input[type=checkbox]").change(function(){
		var selected = [];
		var chks = document.getElementsByTagName("INPUT");
						let no = chks.length;
						var total = 0;
						for (var i = 0; i < chks.length; i++) {

							
							

							if (chks[i].checked) {

								

								// alert(chks[i].value);
								total += parseInt($('#amount_'+chks[i].value).val());

								// alert(total);
								// alert ($('#amount_'+chks[i].value).val());
								// total += parseInt($('#amount_'+chks[i].value).val());
								// alert(total);
								

								// $('.calc1').each(function(){
								// 	if($(this).val() != '')
								// 	{
								// 		total += parseInt($(this).val());
								// 	}
								// });
								// alert(total);
								// document.getElementById("total1").value = total;
								// var new_total = document.getElementById("sub_total").value;
								// var balance = new_total - total;
								// document.getElementById("balance1").value = balance;
								
								// var new_total = document.getElementById("sub_total").value;
								// var balance = new_total - a;
								// document.getElementById("balance1").value = balance;
								
								// 	// alert(chks[i].value);
								// 	if(chks[i].value == 14){
								// 		// alert('d');
								// 	}
								// 	selected.push(chks[i].value);
							}
							// else{
							// 	var total = document.getElementById("sub_total").value;


							// 	document.getElementById("balance1").value = total;
							// }
						}
						var new_total = document.getElementById("sub_total").value;
						var balance = new_total - total;
						document.getElementById("balance1").value = balance;
						document.getElementById("balance2").value = balance;
						
						// alert(selected);

	// 	var b = $("input[type=hidden]").val();
	// alert(b); 
		
		var i =  document.getElementById(b);
	// alert(i);
	
		var i = $('#data_id').val();0
		// alert(i);
		// var x = documnent.getElementByName("amount");
		// alert(x);
		var a  = $('#amount_'+i).val();
		// alert(a);

		var y =  $("#amount").val();
	});
	
	$(document).ready(function() {
		var chks = document.getElementsByTagName("INPUT");
						let no = chks.length;
						// alert(no);


// document.getElementById("total1").value = total;

// var chks=document.getElementsByName('chk'); 


// for (var i = 0; i < chks.length; i++) {
// 							if (chks[i].checked) {
//                 $('.calc1').change(function(){

                              
//                         var total = 0;

//                         $('.calc1').each(function(){
//                             if($(this).val() != '')
//                             {
//                                 total += parseInt($(this).val());
//                             }
//                         });
//                         document.getElementById("total1").value = total;
//                         var new_total = document.getElementById("sub_total").value;
//                         var balance = new_total - total;
//                         document.getElementById("balance1").value = balance;
//                         // $('#total').html(total);
//                         });
// 							}
//               else
// 			  {
                
// 				var new_total = document.getElementById("sub_total").value;
//                 document.getElementById("balance1").value = new_total;
//               }
// 						}

  // for(var i=0; i<ele.length; i++){  
  //               if(ele[i].type=='checkbox')  
  //                   ele[i].checked=true;  
  //           }  





		
 

	});	

//     $(document).ready(function(){


// });
	
// $('tbody').append(html);


</script>
	
