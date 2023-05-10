var oneClick;



const clean =()=>{
    document.getElementById('resultNumber').innerHTML = "0"
    document.querySelector(".clean").innerHTML = "AC"
    oneClick = false
    
}

const sign=()=>{
    let number = document.getElementById('resultNumber').innerHTML;
    document.getElementById('resultNumber').innerHTML = - + number
}

const percetage=(num)=>{
    let number = document.getElementById('resultNumber').innerHTML;
    document.getElementById('resultNumber').innerHTML = number / 100
}


const insert=(num)=>{
    
    let number = document.getElementById('resultNumber').innerHTML;

    if(number == 0){
        document.getElementById('resultNumber').innerHTML = " "
    }
    
    
    document.getElementById('resultNumber').innerHTML +=  num
    document.querySelector(".clean").innerHTML = "C"
}




const comma=()=>{
    if(!oneClick){
    let number = document.getElementById('resultNumber').innerHTML;
        document.getElementById('resultNumber').innerHTML = number + ".";
        oneClick = true
    }
}


let number1;
let number2;
const calculate=(operation)=>{
    let number = document.getElementById('resultNumber').innerHTML;
    if(number != 0){
    number1 = document.getElementById('resultNumber').innerHTML + operation
    document.getElementById('resultNumber').innerHTML =""
    }
}

var teste = false
const result=()=>{
   
    if(number1){
        number2 = document.getElementById('resultNumber').innerHTML
        let res = number1 + number2
        document.getElementById('resultNumber').innerHTML= eval(res)
        teste = true
    }
    // if(teste == true){
    //     let resultado = document.getElementById('resultNumber').innerHTML;
    //     let resultado1 = resultado + number2
    //     document.getElementById('resultNumber').innerHTML= eval(resultado1)

    // }

   

}




