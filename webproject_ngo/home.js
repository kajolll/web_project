window.onscroll=function()
{myfunction()};
var header=document.getElementById('myheader');
var im=document.getElementById('im');
function myfunction()
{
	if(window.pageYOffset>sticky){
		header.classList.add("sticky");
		im.classList.add("sticky");
	}
	else
	{
			header.classList.remove("sticky");
			im.classList.remove("sticky");
	}
}
var nav=document.getElementById('nav');
window.onscroll=function(){
	if(window.pageYOffset>100)
	{
		nav.style.position="fixed";
		nav.style.top= 0;
	}
}
