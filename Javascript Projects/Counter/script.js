const counters = document.querySelectorAll('.counter');




counters.forEach((counter) => {
    counter.innerHTML = 0
    console.log(counter);
    const updateCounter=()=>{
        const target = +counter.getAttribute('data-target');
        
         const startingCount = Number(counter.innerHTML);

         const incr = target / 100;
         if(target>startingCount){
             counter.innerHTML = `${Math.round(startingCount + incr)}`
             setTimeout(updateCounter, 100)
         }
         else{
            counter.innerHTML  = target;
         }
    }
    updateCounter()
});

// const counters = document.querySelectorAll('.counter');

// counters.forEach((counter) =>{
//     // console.log(counter)

//     counter.innerHTML  = 0;


//     const updateCounter=()=>{
//         const target = +counter.getAttribute('data-target');
        
//          const startingCount = Number(counter.innerHTML);

//          const incr = target / 100;
         
        
//          if(startingCount < target){
//              counter.innerHTML = `${Math.round(startingCount + incr)}`;

//              setTimeout(updateCounter, 10);
//          }
//          else{
//             counter.innerHTML  = target;
//          }
        

//         //console.log( typeof target)
//     }
//     updateCounter();
// }
// )