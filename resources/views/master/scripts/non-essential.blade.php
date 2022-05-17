<script>
    let srcAppJs = "<?php echo mix('/js/app.js'); ?>";
    let srcVendorJs = "<?php echo asset('js/vendor.js'); ?>";
    let srcManifestJs = "<?php echo asset('js/manifest.js'); ?>";
    let srcGA = "https://www.googletagmanager.com/gtag/js?id=UA-165454125-1";


    loadScript('srcVendorJs', srcVendorJs, function() {}, 0);
    loadScript('srcManifestJs', srcManifestJs, function() {}, 0);
    loadScript('srcAppJs', srcAppJs, function() {}, 0);

    /**
     * A function to load stylesheets with a short delay
     * @param cssId an id to identify that stylesheet
     * @param location of the stylesheet
     */
    function loadScript(scriptId, location, callback, delay = 0) {
        setTimeout(() => {

            if (!document.getElementById(scriptId)) {
                var script = document.createElement('script');

                script.id = scriptId;
                script.src = location;
                script.onload = callback;

                document.body.appendChild(script);
                callback();
            }
        }, delay);

    }

</script>

