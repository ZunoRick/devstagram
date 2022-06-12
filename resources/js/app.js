import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

window.addEventListener('DOMContentLoaded', () =>{
  const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dicRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
  });

  dropzone.on('sending', (file, xhr, formData)=>{
    console.log(file);
  });

  dropzone.on('success', (file, response) => {
    console.log(response);
  });

  dropzone.on('error', (file, message) => {
    console.log(message);
  });

  dropzone.on('removedfile', () => {
    console.log('Archivo Eliminado');
  });
});
