// const form = document.querySelector('#form-like');

// form.addEventListener('submit',function(e){
//     e.preventDefault();

//     const url = this.getAttribute('action');
//     const token = document.querySelector('meta[name="csrf-token"]').content;
//     const videoId = this.querySelector('#video-id').value;
//     const count = this.querySelector('#count');

//     fetch(url,{
//         headers: {
//             'Content-type': 'application/json',
//             'X-CSRF-TOKEN': token
//         },
//         method:'post',
//         body: JSON.stringify({
//             id: videoId
//         })
//     }).then(response => {
//         response.json().then(data => {
//             console.log(data);
//         })
//     }).catch(error => {
//         console.log(error)
//     })
// })
