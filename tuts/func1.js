var dragged;
var img;
document.addEventListener("dragstart", function( event ) {
  // store a ref. on the dragged elem
  dragged = event.target;
}, false);

document.addEventListener("drop",function(event)
{
	event.target.classList.remove("boxmain");
},false);


function dropa( event )
{
  // prevent default action (open as link for some elements)
  event.preventDefault();
  // move dragged elem to the selected drop target
  dragged.parentNode.removeChild( dragged );
  event.target.appendChild( dragged );
  img.setAttribute('draggable',false);
  event.target.classList.remove("boxmain");
  document.getElementById('alertbox').style.visibility="visible";
 // document.body.setAttribute("class","blacki");
}
function foo(tutsno,no,no1)
{
	var val=false;
	var nof,nol,no1f,no1l;
	nof=no.substring(0,1);
	nol=no.substring(1,2);
	no1f=no1.substring(0,1);
	no1l=no1.substring(1,2);
	var x1,x2;
	x1=nof-no1f;
	x2=nol.charCodeAt(0)-no1l.charCodeAt(0);
	switch(tutsno)
	{
		case 1://pawn
		if(Math.abs(x1)===0 && x2>0 && x2<=2)
			val=true;
		break;
		case 2://knight
		if(Math.abs(x1)===1 && Math.abs(x2)===2 || Math.abs(x1)===2 && Math.abs(x2)===1  )
			val=true;
		break;
		case 3://bishop
		if(Math.abs(x1)===Math.abs(x2))
			val=true;
		break;
		case 4://rook
		if(Math.abs(x1)===0 || Math.abs(x2)===0)
			val=true;
		break;
		case 5:
		if(Math.abs(x1)===Math.abs(x2) ||Math.abs(x1)===0 ||Math.abs(x2)===0)
			val=true;
		break;
		case 6:
		if(Math.abs(x1)>=0 && Math.abs(x1)<=1 && Math.abs(x2)>=0 && Math.abs(x2)<=1)
			val=true;
		break;
	}
	return val;
}

function loadTable()
{
	var table = document.getElementById("chessTable");
	var k=0;
	var position;
	for(var i=0;i<8;i++)    
	{
		var row = table.insertRow(i);
		for(var j=0;j<8;j++)
		{
			k++;
			var cell = row.insertCell(j);
			var set =k;
			cell.setAttribute("id",set);
			cell.innerHTML=(j+1)+String.fromCharCode(i+65);
		}
	}
	var tutsno =document.getElementById("desc").innerHTML;
	var tutsno1,decider;
	img = document.createElement('img');
	switch(tutsno)
	{
		case "<b>Tutorial 1</b>"://pawn
		tutsno1=1;
		var x = document.getElementById("52");
		img.src = "img/bP.png";
		position=x.innerHTML;
		break;
		case "<b>Tutorial 2</b>"://knight
		tutsno1=2;
		var x = document.getElementById("37");
		img.src = "img/wN.png";
		position=x.innerHTML;
		break;
		case "<b>Tutorial 3</b>"://bishop
		tutsno1=3;
		var x = document.getElementById("28");
		img.src = "img/bB.png";
		position=x.innerHTML;
		break;
		case "<b>Tutorial 4</b>"://rook
		tutsno1=4;
		var x = document.getElementById("38");
		img.src = "img/wR.png";
		position=x.innerHTML;
		break;
		case "<b>Tutorial 5</b>"://queen
		tutsno1=5;
		var x = document.getElementById("24");
		img.src = "img/bQ.png";
		position=x.innerHTML;
		break;
		case "<b>Tutorial 6</b>"://king
		tutsno1=6;
		var x = document.getElementById("20");
		img.src = "img/wK.png";
		position=x.innerHTML;
		break;
	}
	
	img.style.width = "60px";
	img.style.height = "60px";
	img.setAttribute('draggable',true);
//img.addEventListener("dragstart", function(){draga(event);});
var no = x.innerHTML;
x.appendChild(img);
k=0;

for(var i=0;i<8;i++)
{
	for (var j=0;j<8;j++) 
	{
		var no1 = document.getElementById(++k).innerHTML;
		var m = document.getElementById(k);
		m.addEventListener("dragleave", function( event ) {event.target.classList.remove("boxmain");}, false);// events fired on the drop targets
		m.addEventListener("dragenter", function( event ) {event.target.setAttribute('class','boxmain');}, false);
		m.addEventListener("dragover", function( event ) {  event.preventDefault();}, false);
		decider=foo(tutsno1,no,no1);
		if(no1!==position)
		{
			if(decider)
			{
				m.addEventListener("drop",function(){dropa(event);});
				//m.innerHTML="y";
			}
		}
		m.innerHTML="";
	}
}
x.appendChild(img);
}

function details () {
	// body...
	if(document.getElementById('showparts').innerHTML==="Show")
	{
		var a =document.getElementsByClassName('lists');
		for(i=0;i<a.length;i++)
			a[i].style.visibility = "visible";
		document.getElementById('showparts').innerHTML="Hide";	
	}
	else
	{
		var a =document.getElementsByClassName('lists');
		for(i=0;i<a.length;i++)
			a[i].style.visibility = "hidden";
		document.getElementById('showparts').innerHTML="Show";
	}
}
function tutsOpen(argument){
	var len = argument.length;
	var a = argument.innerHTML.substring(4,len)+".php";
	window.open(a,"_self");
}
function prevTuts(){
	var elm = document.getElementById("desc");
	var str = elm.innerHTML.substring(12,13);
	if(str==1)
		window.open("../index.php","_self");
	else if(str==2)
		window.open("pawn.php","_self");
	else if(str==3)
		window.open("knight.php","_self");
	else if(str==4)
		window.open("bishop.php","_self");
	else if(str==5)
		window.open("rook.php","_self");
	else
		window.open("queen.php","_self");
}
function nextTuts(){
	var elm = document.getElementById("desc");
	var str = elm.innerHTML.substring(12,13);
	if(str==1)
		window.open("knight.php","_self");
	else if(str==2)
		window.open("bishop.php","_self");
	else if(str==3)
		window.open("rook.php","_self");
	else if(str==4)
		window.open("queen.php","_self");
	else if(str==5)
		window.open("king.php","_self");
	else
		window.open("../ChessBoard/chessgame.php","_self");
}
function showHint () {
	// body...
	document.getElementById('hint').style.visibility="visible";
	document.getElementById('hintButton').style.cursor="default";
}