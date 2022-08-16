// JavaScript Document

inc = 5;
function findPosY(obj)
{
	var curtop = 0;
	if(obj.offsetParent)
		while(1)
		{
		  curtop += obj.offsetTop;
		  if(!obj.offsetParent)
			break;
		  obj = obj.offsetParent;
		}
	else if(obj.y)
		curtop += obj.y;
	return curtop;
}
function move(image)
{
	var y = findPosY(image);
	y -= inc;
	document.getElementById(image).style.top = y + 'px';
}
function restore(image)
{
	var y = findPosY(image);
	
	document.getElementById(image).style.top = y + 'px';
}