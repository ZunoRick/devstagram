import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

window.addEventListener('DOMContentLoaded', () =>{
  const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif, .webp",
    addRemoveLinks: true,
    dicRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,

    init: function() {
      const username = document.querySelector('span#username').textContent.trim();
      if(document.querySelector('[name="imagen"]').value.trim()){
        const imagenPublicada = {};
        imagenPublicada.size = 1234;
        imagenPublicada.name = document.querySelector('[name="imagen"]').value;

        // console.log(`/uploads/${username}/${imagenPublicada.name}`);
        this.options.addedfile.call(this, imagenPublicada);
        this.options.thumbnail.call(this, imagenPublicada, `/uploads/${username}/${imagenPublicada.name}`);
        imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
      }
    },
  });

  dropzone.on('success', (file, response) => {
    document.querySelector('[name="imagen"]').value = response.imagen;
  });

  dropzone.on('removedfile', () => {
    document.querySelector('[name="imagen"]').value = '';
  });
});
