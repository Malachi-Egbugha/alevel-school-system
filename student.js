// JavaScript Document
function show(arg)
{
var i;
var x=document.getElementsByClassName("content");
for (i=0; i<x.length;i++)
{
x[i].style.display="none"
}
document.getElementById(arg).style.display="block";
}
