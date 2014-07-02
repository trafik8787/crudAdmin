
<form id="w-form-modal-job" action="/about/jobs/index.php" method="" name="" enctype="multipart/form-data" return true;">
    
	<div class="inputGroup">
		<label>
			Имя<span class="required">*</span>
			<input value="" type="text" name="NAME_JOBS"/>
		</label>
	</div>
	<div class="inputGroup">
		<label>
			Телефон<span class="required">*</span>
			<input type="text" class="phoneMask" name="TELEFON_JOBS"/>
		</label>
	</div>
	<div class="inputGroup">
		<label>
			Файл с вашем резюме<span class="required">*</span>
			<input id="resume" value="" type="file" name="FILE_JOBS"/>
			<button id="file" class="btnVVD" type="button">Загрузить файл</button>
		</label>
	</div>
	<div class="inputGroup">
		<label>
			<button class="submit" type="submit">Отправить</button>
		</label>
	</div>
</form>
<div id="res" style="margin: 1em 0"></div>
<div id="loading" style="display:none;">
<img src="http://www.kirmanhotels.com/public/images/loading.gif" border="0" />
</div>
<iframe id="hiddenframe" name="hiddenframe" style="width:0; height:0; border:0"></iframe>



<!--В файле обработчика поместить обратный код-->
<!--
sleep(3);
echo '<script type="text/javascript">';
echo 'window.parent.document.getElementById("loading").style.display="none";';
// Если загрузка прошла успешно
if (empty($error)) {
   echo 'window.parent.document.getElementById("res").innerHTML="Файл успешно загружен";';
} else {
  echo 'window.parent.document.getElementById("res").innerHTML="Ошибка при загрузке файла";';
}
echo '</script>';
-->



<script>
    




	
	$("#w-form-modal-renta").validate({

			rules:{
				TELEFON_JOBS: {
					required: true,
					minlength: 18
				},				
				NAME_JOBS: {					
					required: true					
				},								
				FILE_JOBS: {					
					required: true
				}				

			},				
			messages:{				
				TELEFON_JOBS: {					
					required: "<b style='color: red'>Это поле обязательно для заполнения</b>",
					minlength: "<b style='color: red'>Номер телефона некоректный</b>"
				},					
				NAME_JOBS: {						
					required: "<b style='color: red'>Это поле обязательно для заполнения</b>"		
				},					
				FILE_JOBS: {					
					required: "<b style='color: red'>Это поле обязательно для заполнения</b>",
					
				}
				
			},
			
			//errorPlacement: function(error, element) {
			//
			//	var er = error.text();
			//	element.attr("data-content", er);
			//	element.popover('show');
			//	
			//
			//},
			
			 submitHandler: function(form) {
				
				$(form).attr('method','post');
				$(form).attr('target','hiddenframe');
				document.getElementById('res').innerHTML='';
				document.getElementById('loading').style.display='block';
				document.getElementById('w-form-modal-renta').style.display='none';
				

				$(form).ajaxSubmit();
				//$("#w-form-modal-renta").after('<div id="res" style="margin: 1em 0"></div><div id="loading" style="display:none;"><img src="http://www.kirmanhotels.com/public/images/loading.gif" border="0" /></div><iframe id="hiddenframe" name="hiddenframe" style="width:0; height:0; border:0"></iframe>');
				
				//$('button[type="submit"]').click();
				//return false;
				
			 }
              
				
	});		
	
    
    
        $('#file').click(function(){
            $('#resume').trigger('click');
        });    
    
	$("#resume").change(function() {
		if($(this).val()) {
			$("#file").text($(this).val())
		} else {
			$("#file").text("Загрузить файл")
		}
			
	})
        
        $(".phoneMask").inputmask("mask", {"mask": "+7 (999) 999-99-99"});
</script>