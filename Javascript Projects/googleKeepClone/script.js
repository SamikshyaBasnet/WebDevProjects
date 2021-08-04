const addButton = document.querySelector('#add');

const updateLSData = ()=>{
    const textAreaData = document.querySelectorAll('textarea');

    const notes = [];
    
    // console.log(textAreaData);
    textAreaData.forEach((note)=>{
        return notes.push(note.value)
    })
    // console.log(notes)
    localStorage.setItem('notes', JSON.stringify(notes))
}

const addNewNote=(text = '')=>{
   const note = document.createElement('div');
   note.classList.add('note');
   const htmlData = `
    
   <div class="operation">
       <button class="edit"><i class="fas fa-edit"></i></button>
       <button class="delete"><i class="fas fa-trash-alt"></i></button>
    </div>
    <div class="main ${text ? "" : "hidden"}"> </div>
    <textarea class="${text ? "hidden" : ""}"> </textarea>
   `;

   note.insertAdjacentHTML('afterbegin', htmlData);

  
   //getting the references
    
const editButton = note.querySelector('.edit');
const deleteButton = note.querySelector('.delete');
const mainDiv = note.querySelector('.main');
const textArea = note.querySelector('textarea');

//deleting the node


deleteButton.addEventListener('click', ()=>{
    note.remove();
    updateLSData();
})


textArea.value = text;
 mainDiv.innerHTML = text;
//toggle using the edit icon
editButton.addEventListener('click', ()=>{
    mainDiv.classList.toggle('hidden');
    textArea.classList.toggle('hidden');
});
textArea.addEventListener('change', (event)=>{
     const value = event.target.value;
     //console.log(value);
     mainDiv.innerHTML = value;

     updateLSData();
})




   //appends the node as a 
   document.body.appendChild(note)

   //saving the data in local storage

   //The local storage and the session storage allow to save 
   //key value pairs in a web browser

   //The local storage obje ct stores the data with no exp date
   //The date will not be deleted when the browser is closed and
   //will be available next day, week or year








}

//getting data back from the local storage

const notes = JSON.parse(localStorage.getItem('notes'));

if(notes){
    notes.forEach((note)=>addNewNote(note))
}

addButton.addEventListener('click', ()=>
    addNewNote()
);
