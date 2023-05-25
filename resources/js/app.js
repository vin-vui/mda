console.log('app.js loaded');

import './bootstrap';
import '../scss/app.scss';
import Alpine from 'alpinejs';
import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'
import 'cropperjs/dist/cropper.min.css';
import Cropper from 'cropperjs';

Alpine.data('ToastComponent', ToastComponent)
window.Alpine = Alpine;
Alpine.start();

let cropper;

function initializeCropper(image) {
    if (cropper) {
        cropper.destroy();
    }

    image.addEventListener('load', () => {
        cropper = new Cropper(image, {
            // config
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const fileInput1 = document.getElementById('input_1');
    const fileInput2 = document.getElementById('input_2');
    const fileInput3 = document.getElementById('input_3');
    const fileInput4 = document.getElementById('input_4');
    const fileInput5 = document.getElementById('input_5');
    const fileInput6 = document.getElementById('input_6');

    if (fileInput1) {
        checkAndCrop(fileInput1, 'image_1', 'sendCroppedImage1');
    }
    if (fileInput2) {
        checkAndCrop(fileInput2, 'image_2', 'sendCroppedImage2');
    }
    if (fileInput3) {
        checkAndCrop(fileInput3, 'image_3', 'sendCroppedImage3');
    }
    if (fileInput4) {
        checkAndCrop(fileInput4, 'image_4', 'sendCroppedImage4');
    }
    if (fileInput5) {
        checkAndCrop(fileInput5, 'image_5', 'sendCroppedImage5');
    }
    if (fileInput6) {
        checkAndCrop(fileInput6, 'image_6', 'sendCroppedImage6');
    }

    function checkAndCrop(fileInput, name, id) {

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files.item(0).size;
                const fileMb = fileSize / 1024 ** 2;
                if (fileMb >= 2) {
                    alert('Merci de téléverser des images de moins de 2MB');
                    window.location.reload();
                } else {
                    let image = document.getElementById(name);
                    initializeCropper(image);
                    document.getElementById(id).addEventListener('click', () => {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImageDataUrl = croppedCanvas.toDataURL();
                        Livewire.emit('uploadCroppedImage', name, croppedImageDataUrl);
                    });
                }
            }
        });
    };
});
