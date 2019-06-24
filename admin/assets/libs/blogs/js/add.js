
let blogImgInput = document.getElementById('blog-img-input');
let blogImgTagPreview = document.getElementById('blog-img-preview');

blogImgInput.addEventListener('change', function() {
    imagePreview(this);
})

// function to allow the admin to preview the blog banner
function imagePreview(input) {
    if (input.files && input.files[0]) {
        let fileReader = new FileReader();
        fileReader.onload = function (e) {
            // console.log(e);
            const image = input.files[0];
            const imageName = image.name;
            const imageSize = image.size;
            const imageExt = imageName.split('.').pop().toLowerCase();
            const validExt = ['jpeg' , 'jpg' , 'png'];
            const validSize = 2000000; // image size of 2 000 000 bytes = 2MB
            const imageExtIsValid = validExt.includes(imageExt); // validates to true if it is a valid image file
            const imageSizeIsValid = imageSize <= validSize; // validates to true if it is a valid image size
            let messageDiv = document.getElementById('blog-banner-message');
            let message = '';

            if (!imageExtIsValid  && !imageSizeIsValid) {

                message += `<small class="txt-red">
                            Please upload a valid image file less than 2MB
                            </small>`;
                blogImgTagPreview.setAttribute('src', '');

            } else if (imageExtIsValid && !imageSizeIsValid) {

                message += `<small class="txt-red">
                            Please upload a smaller image file less than 2MB
                            </small>`;
                blogImgTagPreview.setAttribute('src', '');

            } else if (!imageExtIsValid && imageSizeIsValid) {

                message += `<small class="txt-red">
                            Please upload a valid image file
                            </small>`;
                blogImgTagPreview.setAttribute('src', '');

            } else {
                messageDiv.style.display = 'none';
                blogImgTagPreview.setAttribute('src', e.target.result);
            }

            messageDiv.innerHTML = message;
            messageDiv.style.display = 'block';
        }
        fileReader.readAsDataURL(input.files[0]);
    }
}