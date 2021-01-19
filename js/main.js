/* Contact Form Submission */
const contactForm = document.querySelector('#contactForm');
contactForm.addEventListener('submit', evt => {
  evt.preventDefault();

  const data = new URLSearchParams();
  for (const pair of new FormData(contactForm)) {
      data.append(pair[0], pair[1]);
  }
  data.append('action', 'sunset_save_user_contact_form');
  const url = contactForm.getAttribute('data-url');

  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: data
  })
    .then(res => res.json())
    .then(res => {
      console.log(res);
    });
});
