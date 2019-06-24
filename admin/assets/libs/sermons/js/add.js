let sermonAudioInput = document.getElementById('sermonAudio');
let sermonAudioTag = document.getElementById('sermonAudioTag');

let sermonImgInput = document.getElementById('sermon-img-input');
let sermonImgTagPreview = document.getElementById('sermon-img-preview');

// allow the admin to preview the audio
sermonAudioInput.onchange = function(e) {
    const audio = this.files[0];

    sermonAudioTag.src = URL.createObjectURL(audio);
     
    const audioName = audio.name;
    const audioExt = audioName.split('.').pop().toLowerCase();
    const audioSize = audio.size;
    const validExt = 'mp3';
    const validSize = 10000000; // audio size of 10 000 000 bytes = 10MB
    const audioExtIsValid = audioExt == validExt;
    const audioSizeIsValid = audioSize <= validSize;

    let messageDiv = document.getElementById('sermon-audio-message');
    let message = '';

    if (!audioExtIsValid  && !audioSizeIsValid) {

        message += `<small class="txt-red">
                    Please upload a valid audio file less than 10MB
                    </small>`;

    } else if (audioExtIsValid && !audioSizeIsValid) {

        message += `<small class="txt-red">
                    Please upload a smaller audio file less than 10MB
                    </small>`;

    } else if (!audioExtIsValid && audioSizeIsValid) {

        message += `<small class="txt-red">
                    Please upload a valid audio file
                    </small>`;0

    } else {
        messageDiv.style.display = 'none';
        sermonAudioTag.onend = function(e) {
            URL.revokeObjectURL(this.src);
        }
    }

    messageDiv.innerHTML = message;
    messageDiv.style.display = 'block';

}

sermonImgInput.addEventListener('change', function(){
    imagePreview(this)
});


// function to allow the admin to preview the sermon banner
function imagePreview(input) {
    if (input.files && input.files[0]) {
        const fileReader = new FileReader();
        fileReader.onload = function (e) {
            const image = input.files[0];
            const imageName = image.name;
            const imageSize = image.size;
            const imageExt = imageName.split('.').pop().toLowerCase();
            const validExt = ['jpeg' , 'jpg' , 'png'];
            const validSize = 2000000; // image size of 2 000 000 bytes = 2MB
            const imageExtIsValid = validExt.includes(imageExt); // validates to true if it is a valid image file
            const imageSizeIsValid = imageSize <= validSize; // validates to true if it is a valid image size
            let messageDiv = document.getElementById('sermon-banner-message');
            let message = '';

            if (!imageExtIsValid  && !imageSizeIsValid) {

                message += `<small class="txt-red">
                            Please upload a valid image file less than 2MB
                            </small>`;
                sermonImgTagPreview.setAttribute('src', '');

            } else if (imageExtIsValid && !imageSizeIsValid) {

                message += `<small class="txt-red">
                            Please upload a smaller image file less than 2MB
                            </small>`;
                sermonImgTagPreview.setAttribute('src', '');

            } else if (!imageExtIsValid && imageSizeIsValid) {

                message += `<small class="txt-red">
                            Please upload a valid image file
                            </small>`;
                sermonImgTagPreview.setAttribute('src', '');

            } else {
                messageDiv.style.display = 'none';
                sermonImgTagPreview.setAttribute('src', e.target.result);
            }

            messageDiv.innerHTML = message;
            messageDiv.style.display = 'block';
               
        }
        fileReader.readAsDataURL(input.files[0]);
    }
}





