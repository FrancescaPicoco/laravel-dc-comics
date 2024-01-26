import './bootstrap'; //non è la libreria Bootstrap CSS

import '~resources/scss/app.scss'

import * as bootstrap from 'bootstrap'

import.meta.glob([
    '../img/**'
])


let cancel= document.querySelectorAll('deleted');
let inputF=document.getElementById('sure');               //confirm('ARE YOU SURE?');
for (let i = 0; i < cancel.length; i++) { //per ogni card-->evento if else
    cancel[i].addEventListener('click' , function(){
        let choice = confirm('are you sure?');
        if(choice == true){
            inputF.submit();
        }else{
            
        }
    })
}
// cancel.addEventListener('click', sureDelete());
// function sureDelete(click){
//     let x =alert('confirm?')
//     click.preventDefault();
// }


// var result = confirm("Want to delete?");
// if (result) {
    
// }