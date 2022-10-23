const hourEl = document.getElementById("hour")
const minuteEl = document.getElementById("minutes")
const secondEl = document.getElementById("seconds")
const ampmEl = document.getElementById("ampm")

function clock(){
 const time = new Date();
 let h = time.getHours();
 let m = time.getMinutes();
 let s = time.getSeconds();
 let ampm = "AM";
 if(h>12){
    h-=12;
    ampm = "PM";
 }
 h = h < 10? "0"+ h : h;
 m = m < 10? "0"+ m : m ;
 s = s < 10? "0"+ s : s;

 hourEl.innerText = h;
 minuteEl.innerText = m;
 secondEl.innerText = s; 
 ampmEl.innerText = ampm;
 setTimeout(()=>{ 
    clock()
 },1000)
} 
clock();