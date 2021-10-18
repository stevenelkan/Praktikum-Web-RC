function GantiWarna(value){
    if(value=="White"){
        document.body.style.backgroundColor="white"
        document.body.style.color="black"
    }
    else if(value=="Black"){
        document.body.style.backgroundColor="black"
        document.body.style.color="white"
    }
    else if(value=="Red"){
        document.body.style.backgroundColor="red"
        document.body.style.color="white"
    }
    else if(value=="Green"){
        document.body.style.backgroundColor="green"
        document.body.style.color="white"
    }
    else if(value=="Blue"){
        document.body.style.backgroundColor="blue"
        document.body.style.color="white"
    } 
}
function UbahCuaca(value){
    var a=document.getElementById("x")
    if(value=="Sunny"){
       a.innerHTML="It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream."
    }
    else if(value=="Rainy"){
        a.innerHTML="Rain is falling outside; take a rain coat and brolly, and don't stay out for too long."
    }
}
function Faktorial(faktorial){
    var b=document.getElementById("y")
    var hasil="1"
    if(faktorial.value==0 || faktorial.value==1){
        hasil=1
    }
    else if(faktorial.value>1){
        for(i=faktorial.value;i>1;i--){
            hasil=hasil*i
            
        }
    }
    else{
        hasil=-1
    }
    if(hasil!=-1){
        b.innerHTML="The factorial of "+faktorial.value+" is "+hasil
    }
    else{
        b.innerHTML="Angka yang dimasukkan salah"
    }
    
}