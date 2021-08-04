const  calculateTemp=()=>{
    const numberTemp = document.getElementById('temp').value;
    console.log(numberTemp);
    
    const tempSelected = document.getElementById('temp_diff');
    const valueofUnitSelected= tempSelected.options[tempSelected.selectedIndex].value;

    //console.log(valueofUnitSelected);

    const celToFah=(cel)=>{
        // result = (numberTemp * 9/5)+ 32;
        let farenheit = Math.round((cel * 9/5)+ 32);
        return farenheit;
    }

    const fahToCel=(fah)=>{
        // result = (numberTemp * 9/5)+ 32;
        let celsius = Math.round((fah - 32) * 5/9);
        return celsius;
    }

    let result;
    const resultValue = document.getElementById('resultContainer');

    if (valueofUnitSelected=="cel"){
        result = (numberTemp * 9/5)+ 32;
        //  result = celToFah(numberTemp)
         resultValue.innerHTML = `= ${result} °Farenheit`;
        //resultValue.innerHTML = '=', result, ' F' 
    }
    else{
        result = fahToCel(numberTemp)
        resultValue.innerHTML = `= ${result} °Celsius`;
    }


}
