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
        fileInput1.addEventListener('change', () => {
            if (fileInput1.files.length > 0) {
                const fileSize = fileInput1.files.item(0).size;
                const fileMb = fileSize / 1024 ** 2;
                if (fileMb >= 2) {
                    alert('Merci de téléverser des images de moins de 2MB');
                    window.location.reload();
                } else {
                    let image = document.getElementById('image_1');
                    initializeCropper(image);
                    document.getElementById('sendCroppedImage1').addEventListener('click', () => {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImageDataUrl = croppedCanvas.toDataURL();
                        Livewire.emit('uploadCroppedImage', 'image_1', croppedImageDataUrl);
                    });
                }
            }
        });
    }
    if (fileInput2) {
        fileInput2.addEventListener('change', () => {
            if (fileInput2.files.length > 0) {
                const fileSize = fileInput2.files.item(0).size;
                const fileMb = fileSize / 1024 ** 2;
                if (fileMb >= 2) {
                    alert('Merci de téléverser des images de moins de 2MB');
                    window.location.reload();
                } else {
                    let image = document.getElementById('image_2');
                    initializeCropper(image);
                    document.getElementById('sendCroppedImage2').addEventListener('click', () => {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImageDataUrl = croppedCanvas.toDataURL();
                        Livewire.emit('uploadCroppedImage', 'image_2', croppedImageDataUrl);
                    });
                }
            }
        });
    }
    if (fileInput3) {
        fileInput3.addEventListener('change', () => {
            if (fileInput3.files.length > 0) {
                const fileSize = fileInput3.files.item(0).size;
                const fileMb = fileSize / 1024 ** 2;
                if (fileMb >= 2) {
                    alert('Merci de téléverser des images de moins de 2MB');
                    window.location.reload();
                } else {
                    let image = document.getElementById('image_3');
                    initializeCropper(image);
                    document.getElementById('sendCroppedImage3').addEventListener('click', () => {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImageDataUrl = croppedCanvas.toDataURL();
                        Livewire.emit('uploadCroppedImage', 'image_3', croppedImageDataUrl);
                    });
                }
            }
        });
    }
    if (fileInput4) {
        if (fileInput4.files.length > 0) {
            const fileSize = fileInput4.files.item(0).size;
            const fileMb = fileSize / 1024 ** 2;
            if (fileMb >= 2) {
                alert('Merci de téléverser des images de moins de 2MB');
                window.location.reload();
            } else {
                fileInput4.addEventListener('change', () => {
                    let image = document.getElementById('image_4');
                    initializeCropper(image);
                    document.getElementById('sendCroppedImage4').addEventListener('click', () => {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImageDataUrl = croppedCanvas.toDataURL();
                        Livewire.emit('uploadCroppedImage', 'image_4', croppedImageDataUrl);
                    });
                });
            }
        }
    }
    if (fileInput5) {
        if (fileInput5.files.length > 0) {
            const fileSize = fileInput5.files.item(0).size;
            const fileMb = fileSize / 1024 ** 2;
            if (fileMb >= 2) {
                alert('Merci de téléverser des images de moins de 2MB');
                window.location.reload();
            } else {
                fileInput5.addEventListener('change', () => {
                    let image = document.getElementById('image_5');
                    initializeCropper(image);
                    document.getElementById('sendCroppedImage5').addEventListener('click', () => {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImageDataUrl = croppedCanvas.toDataURL();
                        Livewire.emit('uploadCroppedImage', 'image_5', croppedImageDataUrl);
                    });
                });
            }
        }
    }
    if (fileInput6) {
        if (fileInput6.files.length > 0) {
            const fileSize = fileInput6.files.item(0).size;
            const fileMb = fileSize / 1024 ** 2;
            if (fileMb >= 2) {
                alert('Merci de téléverser des images de moins de 2MB');
                window.location.reload();
            } else {
                fileInput6.addEventListener('change', () => {
                    let image = document.getElementById('image_6');
                    initializeCropper(image);
                    document.getElementById('sendCroppedImage6').addEventListener('click', () => {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImageDataUrl = croppedCanvas.toDataURL();
                        Livewire.emit('uploadCroppedImage', 'image_6', croppedImageDataUrl);
                    });
                });
            }
        }
    }
});
