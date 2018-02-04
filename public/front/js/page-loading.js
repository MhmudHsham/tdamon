
if (typeof Pace != "undefined") {
    var soapPageLoadingContent = false;
    //document.write('<img alt="" src="images/logo2.png" style="display: none;">');
    var logoImg = new Image();
    logoImg.src = config.site_logo;
    var soapPageLoadingProgressInterval = setInterval(function () {
        try {
            if (document.body.className.indexOf("pace-done") != -1) {
                clearInterval(soapPageLoadingProgressInterval);
            }
            if (document.body.className.indexOf("pace-running") == -1) {
                return;
            }
            if (!soapPageLoadingContent) {
                document.getElementsByClassName("pace-activity")[0].innerHTML = '<div class="loading-page style1">' +
                        '<div class="loading-page-wrapper">' +
                        '<div class="container">' +
                        '<h1 class="logo block">' +
                        '<a title="' + config.site_title + '" href="' + config.site_url + '">' +
                        '</a>' +
                        '</h1>' +
                        '<img alt="" src="' + config.base_url + '/front/images/ajax_loading_earth.gif">' +
                        '</div>' +
                        '<span class="loading-text">' + lang.loading + '</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                /* document.getElementsByClassName("pace-activity")[0].innerHTML = '<div class="loading-page style2">' +
                 '<div class="loading-page-wrapper">' +
                 '<div class="container">' +
                 '<h1 class="logo block">' +
                 '<a title="Travelo" href="#">' +
                 '<img alt="" src="images/logo2.png">' +
                 '</a>' +
                 '</h1>' +
                 '<div class="loading-text block">Website is Loading...</div>' +
                 '<div class="notice-message block">please<br>be patient!</div><br />' +
                 '<div class="loading-progress-bar block col-sms-10 col-sm-8 col-md-6">' +
                 '<div class="loading-progress" style="width: 1%;"></div>' +
                 '<div class="loading-percent">1%</div>' +
                 '</div>' +
                 '</div>' +
                 '</div>' +
                 '</div>';*/
                soapPageLoadingContent = true;
            }

            var percent = document.getElementsByClassName("pace-progress")[0].getAttribute("data-progress-text");
            document.getElementsByClassName("loading-progress")[0].style.width = percent;
            document.getElementsByClassName("loading-percent")[0].innerHTML = percent;
        } catch (e) {
        }
    }, 50);
}