document.querySelector('#file-input').addEventListener('change',function(){
    document.querySelector('#div-modal').style.visibility = "hidden"
    document.querySelector('#infos-video').style.visibility ="unset"
})

focus =  document.querySelectorAll('.focus')
containTextarea = document.querySelectorAll('.content-textarea')

for( i=0; i < focus.length ; i++){
    containTextarea[i].addEventListener('click',function(){
         this.classList.toggle('border-bleu')
    })

    window.addEventListener('blur',function(){
        containTextarea[i].classList.toggle('border-bleu')
    })
}
