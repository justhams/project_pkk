document.addEventListener('DOMContentLoaded', function() {
    var splitviews = document.querySelectorAll('.splitview');

    splitviews.forEach(function(splitview) {
        var parent = splitview,
            topPanel = parent.querySelector('.top'),
            handle = parent.querySelector('.handle'),
            skewHack = 0,
            delta = 0;

        // If the parent has .skewed class, set the skewHack var.
        if (parent.className.indexOf('skewed') != -1) {
            skewHack = 1000;
        }

        parent.addEventListener('click', function(event) {
            if (event.clientX < window.innerWidth / 2) {
                // Klik di sebelah kiri, arahkan ke halaman bass.
                window.location.href = "amp.php";
            } else {
                // Klik di sebelah kanan, arahkan ke halaman gitar.
                window.location.href = "vst.php";
            }
        });

        parent.addEventListener('mousemove', function(event) {
            // Get the delta between the mouse position and center point.
            delta = (event.clientX - window.innerWidth / 2) * 0.5;

            // Move the handle.
            handle.style.left = event.clientX + delta + 'px';

            // Adjust the top panel width.
            topPanel.style.width = event.clientX + skewHack + delta + 'px';
        });
    });
});