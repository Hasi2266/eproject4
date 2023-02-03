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

    <script src="<?php echo base_url();?>/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>

		<script src="<?php echo base_url();?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
		

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
    $('table.table1 tbody tr').click(function () {
        window.location.href = $(this).data('url');
    });
})
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
	// Add active class to the current button (highlight it)
	var header = document.getElementById("myDIV");
	var btns = header.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
		});
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

       

        // card-calendar-one widget
        $('#datepicker1').datepicker({
          showOtherMonths: true
        });
		$('#datepicker6').datepicker({
          showOtherMonths: true
        });
		$('#datepicker7').datepicker({
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
        const scroll10 = new PerfectScrollbar('#scroll10', {
          suppressScrollX: true
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
	// alert('hi');
	var i=1;
	
	$('#add3').click(function(){
	i++;
	$('#dynamic_field2').append('<tr id="row'+i+'"><td><input type="text" name="milestone_name[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" style="border-radius:10px">'+
	'</td><td><input type="text" name="milestone_weight[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Weight" style="border-radius:10px">'+
	'</td><td><input type="text" name="milestone_progress[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Progress" style="border-radius:10px">'+
	'</td><td><input type="text" name="milestone_description[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" style="border-radius:10px">'+
	'</td><td><input type="text" name="start_date[]" class="form-control" id="datepicker6_'+i+'" aria-describedby="emailHelp" placeholder="Start date" style="border-radius:10px">'+
	'</td><td><input type="text" name="end_date[]" class="form-control" id="datepicker7_'+i+'" aria-describedby="emailHelp" placeholder="End date" style="border-radius:10px">'+
	'</td><td><input type="text" name="amount[]" class="form-control calc"  aria-describedby="emailHelp" placeholder="Amount" style="border-radius:10px">'+
	
	'</td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><span class="fa fa-trash"></button></td></tr>');


	$(document).ready(function() {
		$('#datepicker7_'+i).datepicker({
          showOtherMonths: true
        });
		$('#datepicker6_'+i).datepicker({
          showOtherMonths: true
        });
			});

			$(document).ready(function(){
        $('.calc').change(function(){
            var total = 0;
            $('.calc').each(function(){
                if($(this).val() != '')
                {
                    total += parseInt($(this).val());
                }
            });
            document.getElementById("total").value = total;
          // $('#total').html(total);
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
    $('.calc').change(function(){
        var total = 0;
        $('.calc').each(function(){
            if($(this).val() != '')
            {
                total += parseInt($(this).val());
            }
        });
				document.getElementById("total").value = total;
        // $('#total').html(total);
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
	$('#add1').click(function(){
	i++;
	$('#dynamic_field1').append('<tr id="row'+i+'"><td><select class="custom-select m-input" style="border-radius:10px" name="packages[]" id="team2_'+i+'">'+
	'<option selected>-- Choose Category --</option><?php foreach ($teams as $item){?><option value="<?php echo $item->team_id?>"><?php echo $item->name?></option><?php } ?></select></td><td><select class=" custom-select m-input px-5 mx-4" style="border-radius:10px" id="package_'+i+'" name="package_id[]"><option selected>-- Choose Services --</option></select>'+
	'</td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');


	$(document).ready(function() {
			$('#team2_'+i).on('change', function() {
            var team_id = $(this).val();
          //  alert(category);

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>index.php/ClientProject/selectPackages',
                data: 'team_id=' + team_id,
                success: function(html) {
               // alert(html);
                    $('#package_'+i).html(html);
                    //  $('#subcat').html('<option value="">'+html+'</option>'); 
                }
            });

        });
			});
				$('tbody').append(html);

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
	$('#add2').click(function(){
	i++;
	$('#dynamic_field2').append('<tr id="row'+i+'"><td><select class="custom-select m-input" style="border-radius:10px" name="packages[]" id="team2_'+i+'">'+
	'<option selected>-- Choose Category --</option><?php foreach ($teams as $item){?><option value="<?php echo $item->team_id?>"><?php echo $item->name?></option><?php } ?></select></td><td><select class=" custom-select m-input px-5 mx-4" style="border-radius:10px" id="package_'+i+'" name="package_id[]"><option selected>-- Choose Services --</option></select>'+
	'</td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');


	
				$('tbody').append(html);

});


				// $('tbody').append(html);

		
$(document).on('click', '.btn_remove1', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
	});
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
				$('#customFile').on('change', function(){
          var va = $(this).val().split('\\');
          $(this).next().text(va[2]);
        })
				$( function() {
    $( "#datepicker" ).datepicker();
  } );
        $('#datepicker5').datepicker({
          showButtonPanel: true
        });
		$('#datepicker6').datepicker({
          showButtonPanel: true
        });
		$('#datepicker7').datepicker({
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
        $(document).on('click', '.edit', function() {
            $(this).parent().siblings('td.data').each(function() {
                var content = $(this).html();
                $(this).html('<input value="' + content + '" />');
            });
            $(this).siblings('.save').show();
            $(this).siblings('.delete').hide();
            $(this).hide();
        });
        $(document).on('click', '.save', function() {
            $('input').each(function() {
                var content = $(this).val();
                $(this).html(content);
                $(this).contents().unwrap();
            });
            $(this).siblings('.edit').show();
            $(this).siblings('.delete').show();
            $(this).hide();
        });
        $(document).on('click', '.delete', function() {
            $(this).parents('tr').remove();
        });
        $('.add').click(function() {
            $(this).parents('table').append('<tr><td class="data"></td><td class="data"></td><td class="data"></td><td><button class="save">Save</button><button class="edit">Edit</button> <button class="delete">Delete</button></td></tr>');
        });
    </script>

<script>
$(document).ready(function(){
    $('.calc1').change(function(){
        var total = 0;
        $('.calc1').each(function(){
            if($(this).val() != '')
            {
                total += parseInt($(this).val());
            }
        });
				document.getElementById("total1").value = total;
        // $('#total').html(total);
    });
});

</script>

<script>

$(document).ready(function(){

	// alert('hi');
	var i=1;
	
	$('#invoice_add').click(function(){
		
	i++;
	$('#dynamic_field3').append('<tr style="padding-left:1rem;" id="row'+i+'"><td >'+
	'<input type="text" name="invoice_des[]" required class="form-control mr-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Desciption" style="border-radius:10px;">'+
	'</td><td><input type="text" name="date_value[]" class="form-control" placeholder="Choose date1" id="datepicker7_'+i+'"  style="border-radius:10px;">'+
  '</td><td><input type="text" name="weight[]" class="form-control"  aria-describedby="emailHelp" placeholder="Weight" style="border-radius:10px">'+
  '</td><td><input type="text" name="amount[]" required class="form-control calc1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Amount" style="border:1px solid #d9dfe7 ;border-radius:10px">'+
  '</td><td><label class="switch"> <input type="checkbox" name = "chk" id="ch1" > <span class="slider round"></span></label>'+
	
	
	'</td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove1">X</button></td></tr>');

	$(document).ready(function() {

                
		$('#datepicker7_'+i).datepicker({
          showOtherMonths: true
        });
		$('#datepicker6_'+i).datepicker({
          showOtherMonths: true
        });
			});


  });	
  

	$(document).ready(function() {

    // document.getElementById("total1").value = total;

    // var chks=document.getElementsByName('chk'); 

    for (var i = 0; i < chks.length; i++) {
							if (chks[i].checked) {
                $('.calc1').change(function(){

                              
                        var total = 0;

                        $('.calc1').each(function(){
                            if($(this).val() != '')
                            {
                                total += parseInt($(this).val());
                            }
                        });
                        document.getElementById("total1").value = total;
                        var new_total = document.getElementById("sub_total").value;
                        var balance = new_total - total;
                        document.getElementById("balance1").value = balance;
                        // $('#total').html(total);
                        });
							}
              else{
                var new_total = document.getElementById("sub_total").value;
                document.getElementById("balance1").value = new_total;
              }
						}
    
      // for(var i=0; i<ele.length; i++){  
      //               if(ele[i].type=='checkbox')  
      //                   ele[i].checked=true;  
      //           }  


  

  
			
     
    
		});	
    
//     $(document).ready(function(){

   
// });
		
	$('tbody').append(html);

});
</script>