@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style4.css">
@endsection

@section('titel')
	laravel 
@endsection
@section('content')
    <a onclick="telecharge()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"/></svg></a><br><br><br><br>
    <div class="pp" id="id">
    	<p class="Nemero">{{ $demande->id }} : رقم الملف </p>
		<div class="head">
			<h3>المملكة المغربية </h3>
			<h3>وزارة التجهيز و النقل و اللوجيستيك و الماء </h3>
			<h3>المديرية الٍاقليمية للتجهيز و النقل و اللوجيستيك و الماء باً سفي</h3>
			<h3>المصلحة الاٍقليمية للماء باًسفي</h3><br>
			<h5> وصل اٍيداع</h5>
		</div><br>
	
		<div class="text-center">
			<h4>{{ $demande->nom }} {{ $demande->prenom }} :     يشهد  رئيس  المصلحة  الاٍقليمية ان السيد </h4>
			<h4>{{ $demande->cin }} :   حامل  للبطاقة  الوطنية </h4>
			<h4>{{ $demande->created_at }} :  قد وضع  لذا هذه  المصلحة بتاريخ  </h4>
			
		</div>
		<p class="Nb">ملحوضة : هذا الوصل يثبت فقط إيداع ملف الترخيص لايمكن اعتباره ترخيصا بحفر اًو جلب ماء</p>
	 	
    </div>
    <script type="text/javascript">
    	function  telecharge() {
    		var div = document.getElementById("id") ;
    		html2pdf().from(div).save() ;	
    	}
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
@endsection 