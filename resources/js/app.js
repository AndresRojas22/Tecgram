import './bootstrap';

import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage: 'Click to upload a picture',
    acceptedFiles: '.png,.jpg,.jpeg,.gif',
    addRemoveLinks:true,
    dictRemoveFile: 'Delete picture',
    maxFiles: 1,
    uploadMultiple: false,
});

dropzone.on('success', function(file,response){
 console.log(response);
});
