<script>

    loadCss('Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap', 50);

    /**
     * A function to load stylesheets with a short delay
     * @param cssId an id to identify that stylesheet
     * @param location of the stylesheet
     * @param delay, set a delay for loading the stylesheet
     */
    function loadCss(cssId, location, delay = 0) {
        setTimeout(() => {
            if (!document.getElementById(cssId)) {
                var head = document.getElementsByTagName('head')[0];
                var link = document.createElement('link');
                link.id = cssId;
                link.rel = 'stylesheet';
                link.type = 'text/css';
                link.href = location;
                link.media = 'all';
                head.appendChild(link);
            }
        }, delay);
    }

</script>
