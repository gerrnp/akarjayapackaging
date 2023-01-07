"use strict";

const flashData = $('.flash-data').data('flashdata');
let icon;
if(flashData){
    if(flashData == 'Gagal'){
        icon = 'warning';
    }else if(flashData == 'Berhasil'){
        icon = 'success';
    }else{
        icon = 'Welcome back!';
    }
    Swal.fire({
        icon: icon,
        title: flashData + ' disimpan!',
        text: '',
      });
}

function previewImg() {
    const img = document.querySelector('#imgblog');
    const imgPrvw = document.querySelector('.img-preview');

    const fileimg = new FileReader();
    fileimg.readAsDataURL(img.files[0]);

    fileimg.onload = function(e) {
        imgPrvw.src = e.target.result;
    }
}
const Editor_blog = document.getElementById("editor");
if(Editor_blog){
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
}