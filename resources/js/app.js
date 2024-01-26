import './bootstrap'; //non è la libreria Bootstrap CSS

import '~resources/scss/app.scss'

import * as bootstrap from 'bootstrap'

import.meta.glob([
    '../img/**'
])


function delete() {
  document.getElementById("demo").innerHTML = "Hello World";
}
