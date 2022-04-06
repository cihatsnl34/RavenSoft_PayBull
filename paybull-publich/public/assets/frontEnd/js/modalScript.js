let modalImg1 = document.getElementById("sertifikaImg1")
let modalImg2 = document.getElementById("sertifikaImg2")
let modal1 = document.getElementById("sertifika1Modal")
let modal2 = document.getElementById("sertifika2Modal")

modalImg1.addEventListener("click",(e)=>{
  e.preventDefault()
  modal1.style.display = "block"

})

modalImg2.addEventListener("click",(e)=>{
  e.preventDefault()
  modal2.style.display = "block"

})

function closeModel(id){
  let modalId = document.getElementById(`${id}`);
  modalId.style.display = "none"
}
