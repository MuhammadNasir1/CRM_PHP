// =========form password Show-Hide=========
function showpassword(){
var inputpass = document.getElementById("pass");
var showpass = document.getElementById("pass_show_icon");
var hidepass = document.getElementById("pass_hide_icon");
if (inputpass.type === 'password') {
  inputpass.type = "text";
  showpass.style.display = "block";
  hidepass.style.display = "none";
}
else{
  inputpass.type = "password";
  showpass.style.display = "none";
  hidepass.style.display = "block";
} 
}
// =========Side-bars============
let btntog = document.querySelector('#btntog');
let sidebar = document.querySelector('.sidebar');
btntog.onclick =function() {
  sidebar.classList.toggle('open');
};
// =========Side-bars============
  /*============Dashboard chart ====================*/ 
  window.onload = function () {
  
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      backgroundColor: "transparent",
      title:{
        legend: {
      fontSize: 3,
    },
      },
      data: [{
        indexLabelFontColor: "white",
        type: "doughnut",
        innerRadius: 100,
        indexLabelFontSize: 17,
        indexLabel: "{label} - #percent%",
        toolTipContent: "<b>{label}:</b> {y} (#percent%)",
        dataPoints: [
          { y: 20, label: "" ,color:"#F7685B", },
          { y: 29, label: ""  ,color:"#2ED47A", },
          { y: 10, label: "" ,color:"#FFB946",  },
        ]
      }]
    });
    
    chart.render();
    
    }
  /*============Dashboard chart End ====================*/ 

