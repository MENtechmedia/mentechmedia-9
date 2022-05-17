<script>
    setTimeout(function() {
        (function (w, d) {
            var b = d.getElementsByTagName('body')[0];
            var s = d.createElement("script");
            s.async = false; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.

            s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@15.1.1/dist/lazyload.min.js";
            w.lazyLoadOptions = {
                /* Your options here */
            };
            b.appendChild(s);
            w.addEventListener('LazyLoad::Initialized', function (event) {
                w.lazyLoadInstance = event.detail.instance;
            }, false);
        })(window, document);
    }, 0);

</script>