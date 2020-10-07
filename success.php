<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Dziękujemy!</title>
	
	  <?php
if(isset($_GET['t1'])){


echo("<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-".$_GET['t1']."');</script>");

}
?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="./success_files/reset.css">
	<link rel="stylesheet" href="./success_files/bootstrap.min.css">
	<link rel="stylesheet" href="./success_files/thanks.css">
     </head>
<body class="thanks_page">
    
        <?php
if(isset($_GET['t1'])){


echo('<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-'.$_GET['t1'].'"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>');

}
?>

<img height="1" width="1" style="display:none" src="./success_files/tr">
<p> Gratulacje za udaną rejestrację w systemie. Dla naliczenia bonusu i zapewnienia dostępu do systemu, musimy upewnić się, że jesteś prawdziwą osobą, a nie robotem! W ciągu 24 godzin czekaj na telefon, aby potwierdzić swoje konto i dokończyć rejestrację - nie przegap tego telefonu, w przeciwnym razie twoje miejsce może dostać inny uczestnik systemu!</p>
<p> Sprawdź poprawność wprowadzonych danych, jeśli popełniłeś błąd, możesz wrócić i podać poprawne dane!</p>
<a href="#" onclick="mainRedirect()">Powrót</a>
<script type="text/javascript">
    function mainRedirect() {
        document.location.href="/";
    }
</script>   