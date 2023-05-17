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

    init:function(){
        if(document.querySelector('[name="image"]').value.trim()){
            const postedImage = {};
            postedImage.size = 1234;
            postedImage.name = document.querySelector(('[name="image"]').value);

            this.options.addedfiles.call(this,postedImage);
            this.options.thumbnail.call(this,postedImage,'public/uploads/${postedImage.name}');

            postedImage.previewElement.classList.add(
                "dz-success",
                "dz-complete"
            );
        }
    }
});

dropzone.on('removedfile',function(){
    document.querySelector('[name="image"]').value = "";
});

dropzone.on('success', function(file,response){
    document.querySelector('[name="image"]').value = response.image;
});
