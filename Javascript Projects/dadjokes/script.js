
//Promises (instead of callback hell)
//condition either success or fail
//we consume the promises not create


//Fetch API
//fulfilled
//rejected
//ongoing

//GET https://icanhazdadjoke.com/

const jokes = document.querySelector('#joke');
const jokeBTN = document.querySelector('#jokeBtn');

// async function generateJokes(){

// }

const generateJokes=async()=>{
try{
   const setHeader = {
        headers:{
            Accept : "application/json"
        }
    }

    

   const res = await fetch('https://icanhazdadjoke.com/', setHeader)
    const data = await res.json()
    jokes.innerHTML = data.joke; 
}
catch(err){
  console.log('The error is ', err);
}
    
//    .then((res)=>res.json() 
//     )
//     .then((data)=>{
//         jokes.innerHTML = data.joke;
//     })
    


}
jokeBTN.addEventListener('click', generateJokes);
generateJokes();
