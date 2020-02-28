$(document).ready(function(){
	var base_url = window.location.origin+'/tryout/';

	// --------Verifikasi Kode Voucher---------//
	$('#submit-voucher').click(function(event){
		event.preventDefault();
		var kodepin = $("[name='pin']").val();
		$.ajax({
			type:'POST',
			data:'kodepin='+kodepin,
			url:base_url+'index.php/dashboard/dashboard/checkpin',
			dataType:'json',
			success:function(hasil){
				if(hasil.message=='success'){
					//alert('a');
					window.location = base_url+'index.php/dashboard/dashboard/tryout/1';
				}else{
					alert(base_url);
					$('#message').html(hasil.message);
				}
			}
		});
	});

	// --------/.Verifikasi Kode Voucher---------//

	//------- Next-Prev Button Try Out --------
	$('.arrow').click(function(event){
		event.preventDefault();
		$link = $(this).attr('href').split('-');
		$arrowKey = $(this).children('button').attr('title');
			if($arrowKey=='Next'){
				if($link[1]<='3'){
				$('.page').removeClass('active');
				$('.page-'+(Number($link[1])).toString()).addClass('active');
				$('#soal-'+(Number($link[1])-1).toString()).hide();
				$('#soal-'+(Number($link[1])).toString()).show();
				}
			}else{
				if($link[1]>=1){
				$('.page').removeClass('active');
				$('.page-'+(Number($link[1])).toString()).addClass('active');
				$('#soal-'+(Number($link[1])+1).toString()).hide();
				$('#soal-'+(Number($link[1])).toString()).show();
				}
			}
	});
	//------- /.Next-Prev Button Try Out --------//

	// --------Number Page---------- //

	$('.page').click(function(event){
		event.preventDefault();
		$link = $(this).attr('href').split('-');
		$('.tab-pane').hide();
		$('#soal-'+(Number($link[1])).toString()).show();
	});

	// --------/.Number Page---------- //
	
	//------ Ragu Button Try Out ------//
	$('.ragu').click(function(event){
		event.preventDefault();
		var i= 0;
		$('input[name^=answer-]').each(function(){
			console.log($('input[name=answer-'+i).val());
			i++;
			return i;
		});
	});

	//------ /.Ragu Button Try Out ------//

	// --------- UnCheck Button Try Out ------//
	function uncheckAll(elements){
		for(i=0;i<elements.length;i++){
			elements[i].checked = false;
		}
	}
	$('.uncheck').click(function(event){
		event.preventDefault();
		var name=$(this).attr('href');
		uncheckAll($('input[name='+name+']'));
	});

	// --------- /.UnCheck Button Try Out ------//
	
	//------ Coundown Timer ------ //
	startTimer();
	function leaveTryOut(){
		Swal.fire({
			title: 'Anda Yakin ingin Mengakhiri?',
			text: "",
			icon: 'question',
			showCancelButton: true,
			cancelButtonText: 'Batal',
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, Saya Yakin!'
		}).then((result) => {
			if (result.value) {
				window.location = 'http://google.com';
			}
		});
	}
	function startTimer() {
		var presentTime = document.getElementById('timer').innerHTML;
		var timeArray = presentTime.split(/[:]+/);
		var m = timeArray[0];
		var s = checkSecond((timeArray[1] - 1));
		if(s==59){m=m-1}
		//if(m<0){alert('timer completed')}
			if(m<=5){
				$('#timer').css({
					color:'red'
				});
			}
			if(m==0 && s==0){
				Swal.fire({
					title:'Waktu Anda Telah Habis!',
					icon:'warning',
					timer:3000,
					showConfirmButton:false
				}).then((result)=>{
					window.location = 'http://google.com';
				});
			}
			if(m<0){
				document.getElementById('timer').innerHTML =
				0 + ":00";
			}else{
				$('.main-sidebar a, .sidebar a.nav-link, #logout a, #footer a,input[type=search]')
				.click(function(event){
					event.preventDefault();
					leaveTryOut();
				});
				$(window).on('unload',function(event){
					event.preventDefault();
					leaveTryOut();
				});
				document.getElementById('timer').innerHTML =
				m + ":" + s;
			}
		setTimeout(startTimer, 1000);
		}

		function checkSecond(sec) {
		if (sec < 10 && sec >= 0) {sec = "0" + sec;} // add zero in front of numbers < 10
		if (sec < 0) {sec = "59";}
		return sec;
		}
	
	/* ----- /.Countdown Timer ------ */

	/* ----- Submit Answer ------ */
		$('.submit-answer').click(function(event){
			event.preventDefault();
			Swal.fire({
				title: 'Anda Yakin?',
				text: "",
				icon: 'question',
				showCancelButton: true,
				cancelButtonText: 'Batal',
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Saya Yakin!'
			}).then((result) => {
				if (result.value) {
					var kodeSubject = $('#kode-subject').text();
					console.log(JSON.stringify(jawaban));
					$.ajax({
						type:'POST',
						data:'jawaban='+jawaban,
						url:base_url+'index.php/dashboard/dashboard/sendanswer',
						dataType:'json',
						success:function(hasil){
							console.log(hasil.message);
						}
					});
				}
			})
		});
	/* ----- /. Submit Answer ------*/
	var jawaban = new Object();
	$('input[type=radio]').click(function(event){
		var $no = $(this).attr('name').split('-');
		var $answer = $(this).val();
		jawaban['soal'+$no[1]] = $answer;
		return jawaban;
	});

});
