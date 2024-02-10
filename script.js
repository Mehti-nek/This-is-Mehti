document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const status = document.getElementById('status');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                status.innerHTML = 'Message sent successfully!';
                form.reset();
            } else {
                status.innerHTML = 'Error: ' + data.message;
            }
        })
        .catch(error => {
            status.innerHTML = 'Error: ' + error.message;
        });
    });
});
