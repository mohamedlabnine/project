@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style4.css">
@endsection

@section('titel')
	laravel 
@endsection
@section('content')
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
    <button onclick="telecharge()" style="background-color: green; color: white; margin-left: 30px; ">telecharge</button>
    <script type="text/javascript">
    	function  telecharge() {
    		var div = document.getElementById("id") ;
    		html2pdf().from(div).save() ;
    	}
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
@endsection 