<HTML>
<HEAD>
<TITLE>HELP & FAQ</TITLE>
<style type="text/css">
	*{font-family: 'Roboto', sans-serif;}
   a:link {color: #ffffff}
   a:visited {color: #ffffff}
   a:hover {color: #ffffff}
   a:active {color: #ffffff}
#grad {
background: linear-gradient(to right, grey , white);
}
	#panel, #flip {
    padding: 2px;
    text-align: left;
}
#panel1,#panel2,#panel3,#panel4,#panel5,#panel6,#voucher{
    display:none;
 }
.ptr {
    text-decoration: none;
    cursor: pointer;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip6").click(function(){
        $("#panel6").slideToggle("slow");
    });
});
$(document).mouseup(function (e)
{
    var container = $(".panel");
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide("slow");
    }
});
$(document).ready(function(){
    $("#banner").mouseenter(function(){
		$("#voucher").show();
        $("#voucher").animate({left: '500px'});
    });
});
</script>
<script>
$(document).ready(function(){
    $("#banner").dblclick(function(){
        alert("Error!!! You have double clicked. Please retry.");
    });
});
$(document).ready(function(){
    $("#voucher").mousedown(function(){
        var $temp = $("<input>");
	$("body").append($temp);
	$temp.val($("#voucher").text()).select();
	document.execCommand("copy");
	$temp.remove();
    });
});
</script>
</HEAD>
<BODY background="connectwork.png">
<TABLE width="1200" height="440" style="border-width:4px; border-style:dashed;border-color:#000;border-radius: 25px;" align="center" id="grad">
<CAPTION><FONT color="white" size="7">HELP & FAQ</FONT></CAPTION>
<TR><TD>
<FONT size="4" face="Tahoma">
<UL>
<LI><SECTION id="flip1" class="ptr">Siapa saja yang bisa menjadi siswa di Cikipoops Codings?</SECTION>
<div id="panel1" class="panel">
Untuk kamu yang pernah berlangganan paket belajar  dan juga siapapun yang menggunakan layanan Cikipoops Codings untuk mendukung kegiatan 
belajarnya. </div>
</LI><HR>
<LI><SECTION id="flip2" class="ptr">Bagaimana jika saya lupa kata sandi akun saya?</SECTION>
<div id="panel2" class="panel">
Jangan panik, kamu dapat menghubungi kami melalui E-mail : cikipoopscodingsofficial@gmail.com.
</div></LI><HR>
<LI><SECTION id="flip3" class="ptr">Bagaimana cara mengetahui kode promo yang ada pada Cikipoops Codings?</SECTION>
<div id="panel3" class="panel">Kamu dapat mengunjungi media sosial Cikipoops Codings seperti Instagram,Facebook dan Youtube Official Cikipoops 
    Codings.</div></LI><HR>
<LI><SECTION id="flip4" class="ptr">Bagaimana jika kita mendapatkan kendala sinyal saat melakukan pembelajaran di Cikipoops Codings?</SECTION>
<div id="panel4" class="panel">Tenang! Nanti kamu akan mendapatkan kelas pengganti dari kelas yang tidak bisa kamu ikuti.</DIV></LI><HR>
<LI><SECTION id="flip5" class="ptr">Apakah kita dapat konsultasi diluar jam pembelajaran?</SECTION>
<div id="panel5" class="panel">Tentu saja bisa, kamu dapat berkonsultasi tentang apapun kendala yang kamu hadapi terkait dengan kelas yang kamu ikuti.<BR>
Akan tetapi mohon maaf jika nantinya admin akan lama merespon kendalamu.</DIV></LI><HR>
</UL></FONT>
</TR></TD>
</TABLE>
</BODY>
</HTML>