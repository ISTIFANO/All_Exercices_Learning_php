function a(i){
    
	const p=document.getElementById("p");
   var a= document.getElementsByClassName("bb")[i];
    p.innerHTML+=a.value;
}
function cos(){
    console.log(1)
    const p=document.getElementById("p");
    const a=Math.cos(p.innerHTML);
    p.innerHTML=a;
}
function tan(){
    console.log(1)
    const p=document.getElementById("p");
    const a=Math.tan(p.innerHTML);
    p.innerHTML=a;
}function sqrt(){
    console.log(1)
    const p=document.getElementById("p");
    const a=Math.sqrt(p.innerHTML);
    p.innerHTML=a;
}
function log(){
    console.log(1)
    const p=document.getElementById("p");
    const a=Math.log(p.innerHTML);
    p.innerHTML=a;
}
function sup(){
    const p=document.getElementById("p");
    p.innerHTML="";
}


   
   
 
    