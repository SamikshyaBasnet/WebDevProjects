// window.onscroll = function (){
//     scrollfunction();
// }

// function scrollfunction(){
//     const scrollbtn = document.getElementById("mybtn");
//     if(document.body.scrollTop>100 || document.documentElement.scrollTop > 100){
//         scrollbtn.style.display="block";
//     }
//     else{
//         scrollbtn.style.display="none";

//     }
// }

// function topFunction(){
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// }

// function fetch(){
//     $.get("https://api.covid19api.com/summary",
//      function(data){
//         //console.log(data['Countries'].length);
//         var tbval = document.getElementById('tbval');

//         for (let i = 1; i < data['Countries'].length; i++){
//             var x = tbval.insertRow();

//             x.insertCell(0);

//             tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
//             tbval.rows[i].cell[0].style.background = "#7a4a91";
//             tbval.rows[i].cell[0].style.color = "#fff";

//             x.insertCell(1);

//             tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
//             tbval.rows[i].cell[1].style.background = "#7a4a91 ";
//             tbval.rows[i].cell[1].style.color = "#fff";

//         }
//      }
    
//     )
// }

// //jquery



