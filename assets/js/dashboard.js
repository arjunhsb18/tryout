$(document).ready(function(){
	var base_url = window.location.origin+'/tryout/';
	var jawaban = new Object();
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
		var no = $(this).attr('href').split('-');
		$('span.box-'+no[1]).css({
			backgroundColor:'orange'
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
		var no = name.split('-');
		jawaban['soal'+no[1]]="";
		$('span.box-'+no[1]).css({
			backgroundColor:'white'
		});
		uncheckAll($('input[name='+name+']'));
		return jawaban;
	});

	// --------- /.UnCheck Button Try Out ------//
	
	//------ Coundown Timer ------ //
	$('#tryout').ready(function(){
		startTimer();
		function startTimer() {
			var presentTime = $('#timer').html();
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
						var kode_subject = $('#kode-subject').text();
						var answer = JSON.stringify(jawaban);
						$.ajax({
							type:'POST',
							data:'answer='+answer+"&kode="+kode_subject,
							url:base_url+'index.php/dashboard/dashboard/sendanswer',
							dataType:'json',
							success:function(hasil){
								window.location = 'http://google.com';
							}
						});
					});
				}
				if(m<0){
					document.getElementById('timer').innerHTML =
					0 + ":00";
				}else{
					$('.main-sidebar a, .sidebar a.nav-link, #logout a, #footer a,input[type=search]')
					.on('click',function(event){
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
	});
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
				var kode_subject = $('#kode-subject').text();
				var answer = JSON.stringify(jawaban);
				$.ajax({
					type:'POST',
					data:'answer='+answer+"&kode="+kode_subject,
					url:base_url+'index.php/dashboard/dashboard/sendanswer',
					dataType:'json',
					success:function(hasil){
						window.location = 'http://google.com';
					}
				});
			}
		});
	}


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
					var kode_subject = $('#kode-subject').text();
					var answer = JSON.stringify(jawaban);
					$.ajax({
						type:'POST',
						data:'answer='+answer+"&kode="+kode_subject,
						url:base_url+'index.php/dashboard/dashboard/sendanswer',
						dataType:'json',
						success:function(hasil){
							window.location = 'http://google.com';
						}
					});
				}
			})
		});
	/* ----- /. Submit Answer ------*/
	
	/* ---- Membuat Lembar Jawaban Awal ----*/
	var totalpage = $('.page-last').text();
	for(var i= 1; i<=totalpage;i++){
		jawaban['soal'+i]=$('input:radio[name=answer-'+i+']:checked').val();
		if(jawaban['soal'+i]==undefined){
			jawaban['soal'+i]="";
		}
	}	
	/* ----/. Membuat Lembar Jawaban Awal ----*/
	
	/* ---- Set Jawaban yang di klik -----*/
	$('input[type=radio]').click(function(event){
		var $no = $(this).attr('name').split('-');
		var $answer = $(this).val();
		jawaban['soal'+$no[1]] = $answer;
		$('span.box-'+$no[1]).css({
			backgroundColor:'blue'
		});
		return jawaban;
	});
	/* ----/. Set Jawaban yang di klik -----*/

	/* ==== Edit Profile ----*/
	$('.profile-value').hover(
		function(){
		$(this).children().css({'display':'inline-block','font-size':'14px'});
		},
		function(){
			$(this).children().css('display','none');
		}
	);
	/* ====/. Edit Profile ----*/

	/* ==== Button Action ----*/
	$('button').hover(function(){
		if($(this).hasClass('btn-edit')){
			$(this).children().css({'display':'inline-block'})
		}
	},function(){
		if($(this).hasClass('btn-edit')){
			$(this).children().css({'display':'none'});
		}
	});
});
