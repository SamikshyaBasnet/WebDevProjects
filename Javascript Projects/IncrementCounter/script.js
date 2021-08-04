
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
             setTimeout(updateCounter, 50)
         }
         else{
            counter.innerHTML  = target;
         }
    }
    updateCounter()
});