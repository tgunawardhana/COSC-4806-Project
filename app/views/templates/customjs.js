
document.querySelectorAll('.star-rating:not(.readonly) label').forEach(star => {
    star.addEventListener('click', function() {
        this.style.transform = 'scale(1.2)';
        setTimeout(() => {
            this.style.transform = 'scale(1)';
        }, 200);
    });
});



function getReview(title) {
    document.getElementById('loading').style.display = 'block';
    document.getElementById('review-content').innerHTML = '';

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/movie/getReview', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            document.getElementById('loading').style.display = 'none';
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    document.getElementById('review-content').innerHTML = response.review;
                } else {
                    document.getElementById('review-content').innerHTML = 'Error: ' + response.error;
                }
            } else {
                document.getElementById('review-content').innerHTML = 'Request failed';
            }
        }
    };

    xhr.send('title=' + encodeURIComponent(title));
}