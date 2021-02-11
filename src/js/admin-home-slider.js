(function () {
  const image1Btn = document.querySelector('#home_slider_image_1_btn');

  let mediaUploader;

  image1Btn.addEventListener('click', (e) => {
    e.preventDefault();
    if (mediaUploader) {
      mediaUploader.open();
      return;
    }

    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose the image No. 1 for slider',
      button: {
        text: 'Choose a picture'
      },
      multiple: false
    });

    mediaUploader.on('select', () => {
      const attachment = mediaUploader.state().get('selection').first().toJSON();
      const image1Input = document.querySelector('#home_slider_image_1');
      const image = document.querySelector('#home_slider_image_1_img');

      image1Input.value = attachment.url;
      image.src = attachment.url;
    });

    mediaUploader.open();
  });
}());
