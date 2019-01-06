document.querySelector("#btn").addEventListener("click",function(){
     let un = document.querySelector("input[name='userName']").value;
     let ue = document.querySelector("input[name='email']").value;
     let uf = document.querySelector("input[name='file']").value;
     if(un || ue || uf){
         document.querySelector("#btn").innerHTML += '  <i class="fa fa-spinner fa-spin" style="font-size:15px">';
     }

});

document.querySelector("#file").addEventListener("change",function(){
   document.querySelector("#fileName").innerText =
   document.querySelector("#file").files[0].name

   let error_msg =  document.querySelector("#fileErrorMsg");
   if(error_msg){
        error_msg.style.display = "none";;
   }

   document.querySelector("label").classList.remove("red");
});